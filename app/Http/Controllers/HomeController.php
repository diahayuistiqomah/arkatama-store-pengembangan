<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Produk;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // Menampilkan halaman home
    public function index()
    {
        $dataBaner = DB::table('slider')
                    ->where('status', 1)
                    ->get();

        $dataProduk = DB::table('produk')
                    ->select('produk.id as id_produk', 'produk.*', 'produk_kategori.id as id_kategori', 'produk_kategori.*')
                    ->join('produk_kategori', 'produk_kategori.id', '=', 'produk.id_produk_kategori')
                    ->where('status', 1)
                    ->get();
                    
        $data = [
            'dProduk' => $dataProduk,
            'dBaner' => $dataBaner
        ];
        return view('layout.home', $data);
    }
}
