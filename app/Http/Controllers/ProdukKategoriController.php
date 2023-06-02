<?php

namespace App\Http\Controllers;

use App\Models\ProdukKategori;
use Illuminate\Http\Request;

class ProdukKategoriController extends Controller
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
        $data = [
            'dKategori' => ProdukKategori::all(),
        ];
        return view('layout.produk_kategori.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout.produk_kategori.add');
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
            'nama_kategori' => 'required|min:3',
        ]);

        ProdukKategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect()->route('produkkategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProdukKategori  $produkKategori
     * @return \Illuminate\Http\Response
     */
    public function show(ProdukKategori $produkKategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProdukKategori  $produkKategori
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $data = [
            'dKategori' => ProdukKategori::find($id)
        ];
        return view('layout.produk_kategori.edit',$data);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProdukKategori  $produkKategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'nama_kategori' => 'required|min:3',
        ]);
        $kategori = ProdukKategori::find($id);
        $kategori->update([
            'nama_kategori' => $request->nama_kategori,
        ]);
        return redirect()->route('produkkategori.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProdukKategori  $produkKategori
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        // Temukan user yang akan dihapus
        $data = ProdukKategori::find($id);
        $data->delete();

        return redirect('/produkkategori')->with('success', 'User has been deleted.');
    }
}
