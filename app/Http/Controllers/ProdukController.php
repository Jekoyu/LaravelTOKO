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
        $nama = "Bambang";
        $prodi = "Sistem Informasi";
        return view('data', [
            'nama' => $nama,
            'nama_prodi' => $prodi
        ]);

        
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
