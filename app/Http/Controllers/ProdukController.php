<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\ProdukKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = DB::table('produk')
                    ->select('produk.id as id_produk', 'produk.*', 'produk_kategori.id as id_kategori', 'produk_kategori.*')
                    ->join('produk_kategori', 'produk_kategori.id', '=', 'produk.id_produk_kategori')
                    ->get();

        $data = [
            'dProduk' => $produk
        ];

        return view('layout.produk.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                $data = [
            'dKategori' => ProdukKategori::all(),
        ];
        return view('layout.produk.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'kategori' => 'required',
            'deskripsi' => 'required|min:3',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

         // Upload dan simpan file foto
         $foto = $request->file('foto');
         $namaFoto = time()."_".$foto->getClientOriginalName();
         $foto->move('assets/produk', $namaFoto);

        Produk::create([
            'nama'  => $request->nama,
            'foto'  => $namaFoto,
            'deskripsi'  => $request->deskripsi,
            'stok'  => $request->stok,
            'harga'  => $request->harga,
            'id_produk_kategori'  => $request->kategori,
        ]);

        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = [
            'dProduk' => Produk::find($id),
            'dKategori' => ProdukKategori::all(),
        ];
        return view('layout.produk.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'kategori' => 'required',
            'deskripsi' => 'required|min:3',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $produk = Produk::find($id);
        $foto = $request->file('foto');

        if($foto != null){
            unlink('assets/produk/'.$produk->foto);
            $namaFoto = time()."_".$foto->getClientOriginalName();
            $foto->move('assets/produk', $namaFoto);
            $produk->update([
                'foto' => $namaFoto,
            ]);
        }
        $produk->update([
            'nama'  => $request->nama,
            'deskripsi'  => $request->deskripsi,
            'stok'  => $request->stok,
            'harga'  => $request->harga,
            'id_produk_kategori'  => $request->kategori,
        ]);
       return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        // Temukan user yang akan dihapus
        $produk = Produk::find($id);
        unlink('assets/produk/'.$produk->foto);
        $produk->delete();

        return redirect('/produk')->with('success', 'User has been deleted.');
    }
}
