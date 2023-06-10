<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;

class SemuaProdukController extends Controller
{
    public function index()
    {
        $dataProduk = DB::table('produk')
                    ->select('produk.id as id_produk', 'produk.*', 'produk_kategori.id as id_kategori', 'produk_kategori.*')
                    ->join('produk_kategori', 'produk_kategori.id', '=', 'produk.id_produk_kategori')
                    ->where('status', 1)
                    ->get();
                    
        $data = [
            'dProduk' => $dataProduk,
        ];
        return view('layout.semuaproduk', $data);
    }
}
