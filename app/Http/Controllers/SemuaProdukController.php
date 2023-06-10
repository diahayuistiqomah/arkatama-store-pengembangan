<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\ProdukKategori;
use Illuminate\Support\Facades\DB;

class SemuaProdukController extends Controller
{
    public function index(Request $request)
    {
        $dataKategori = ProdukKategori::all(); 
        $dataProduk = DB::table('produk')
                    ->select('produk.id as id_produk', 'produk.*', 'produk_kategori.id as id_kategori', 'produk_kategori.*')
                    ->join('produk_kategori', 'produk_kategori.id', '=', 'produk.id_produk_kategori')
                    ->where('status', 1)
                    ->get();

        $nama           = $request->input('nama');
        $kategori       = $request->input('kategori');
        $harga_terendah = $request->input('harga_terendah');
        $harga_tertinggi = $request->input('harga_tertinggi');


        if($nama != null AND $kategori != null AND $harga_terendah != null AND $harga_tertinggi != null){
            $cariProduk = $this->cari($nama,$kategori,$harga_terendah,$harga_tertinggi)->get();
        }elseif($nama != null AND $kategori == null AND $harga_terendah != null AND $harga_tertinggi != null){
            $cariProduk = $this->cariSemua($nama,$harga_terendah,$harga_tertinggi)->get();
        }else{
            $cariProduk = $dataProduk;
        }

        $data = [
            'dKategori' => $dataKategori,
            'dProduk' => $cariProduk,
        ];
        return view('layout.semua_produk.index', $data);
    }

    public function show($id)
    {
        $dataProduk = DB::table('produk')
                    ->select('produk.id as id_produk', 'produk.*', 'produk_kategori.id as id_kategori', 'produk_kategori.*')
                    ->join('produk_kategori', 'produk_kategori.id', '=', 'produk.id_produk_kategori')
                    ->where('status', 1)
                    ->where('produk.id', $id)
                    ->first();
        $data = [
            'dProduk' => $dataProduk,
        ];
        return view('layout.semua_produk.show', $data);
        
    }

    public function cari($nama,$kategori,$harga_terendah,$harga_tertinggi)
    {
        $dataProduk = DB::table('produk')
                    ->select('produk.id as id_produk', 'produk.*', 'produk_kategori.id as id_kategori', 'produk_kategori.*')
                    ->join('produk_kategori', 'produk_kategori.id', '=', 'produk.id_produk_kategori')
                    ->where('status', 1)
                    ->Where('produk.nama', 'like','%'.$nama.'%')
                    ->where('produk_kategori.id',$kategori)
                    ->WhereBetween('produk.harga', [$harga_terendah, $harga_tertinggi]);
        return $dataProduk;
    }

    public function cariSemua($nama,$harga_terendah,$harga_tertinggi)
    {
        $dataProduk = DB::table('produk')
                    ->select('produk.id as id_produk', 'produk.*', 'produk_kategori.id as id_kategori', 'produk_kategori.*')
                    ->join('produk_kategori', 'produk_kategori.id', '=', 'produk.id_produk_kategori')
                    ->where('status', 1)
                    ->Where('produk.nama', 'like','%'.$nama.'%')
                    ->WhereBetween('produk.harga', [$harga_terendah, $harga_tertinggi]);
        return $dataProduk;
    }

}
