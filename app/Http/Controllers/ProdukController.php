<?php

namespace App\Http\Controllers;

// use App\Models\Produk;

use App\Models\Produk;
use Illuminate\Http\Request;
// use App\Models\Produk;

class ProdukController extends Controller
{

    public function index()
    {
        //return "Ini Controller Produk";
        // return view('data');
        // return view('data',compact('nama'));
        // $nama = "Bambang";
        // $prodi = "Sistem Informasi";
        // return view('data', [
        //     'nama' => $nama,
        //     'nama_prodi' => $prodi
        // ]);

        

        $data = Produk::all();
        return view('produk', 
        compact('data'));

    }


    public function create()
    {
        return view('produk_create');
    }

    
    public function store(Request $request)
    {
      
        $request->validate([
            'nama_produk' => 'required|string|
            max:100|unique:produk,nama_produk',
            'kategori' => 'required|string|max:50',
            'harga_satuan' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'satuan' => 'required|string|max:20'
        ]);

       
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'harga_satuan' => $request->harga_satuan,
            'stok' => $request->stok,
            'satuan' => $request->satuan
        ]);

        return redirect('/produk')->with('success',
         'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
