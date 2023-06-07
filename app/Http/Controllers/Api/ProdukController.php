<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Produk;
use App\Http\Resources\ProdukResource;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::latest()->paginate(5);

        return new ProdukResource('true', 'List Data Produk', $produk);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'foto'          => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama'          => 'required',
            'deskripsi'     => 'required',
            'stok'          => 'required',
            'harga'         => 'required',
            'kategori'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload foto
        $foto = $request->file('foto');
        $namaFoto = $foto->hashName();
        $foto->move('assets/produk', $namaFoto);

        //create produk
        $produk = Produk::create([
            'foto'     => $namaFoto,
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'stok'   => $request->stok,
            'harga'   => $request->harga,
            'id_produk_kategori'   => $request->kategori,
        ]);

        //return response
        return new ProdukResource(true, 'Data Produk Berhasil Ditambahkan!', $produk);
    }

    public function update(Request $request, Produk $produk)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama'          => 'required',
            'deskripsi'     => 'required',
            'stok'          => 'required',
            'harga'         => 'required',
            'kategori'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //check if foto is not empty
        if ($request->hasFile('foto')) {

            //upload image
            $foto = $request->file('image');
            $foto->storeAs('public/assets/produk', $foto->hashName());

            //delete old image
            Storage::delete('public/assets/produk/'.$foto->image);

            //update post with new image
            $produk->update([
                'foto'     => $foto->hashName(),
                'nama'     => $request->nama,
                'deskripsi'   => $request->deskripsi,
                'stok'   => $request->stok,
                'harga'   => $request->harga,
                'id_produk_kategori'   => $request->kategori,
            ]);

        } else {
            //update post without foto
            $produk->update([
                'nama'     => $request->nama,
                'deskripsi'   => $request->deskripsi,
                'stok'   => $request->stok,
                'harga'   => $request->harga,
                'id_produk_kategori'   => $request->kategori,
            ]);
        }

        //return response
        return new ProdukResource(true, 'Data Produk Berhasil Diubah!', $produk);
    }

    public function destroy(Produk $produk)
    {
        //delete image
        Storage::delete('public/produk/'.$produk->image);

        //delete post
        $produk->delete();

        //return response
        return new ProdukResource(true, 'Data Produk Berhasil Dihapus!', null);
    }
}
