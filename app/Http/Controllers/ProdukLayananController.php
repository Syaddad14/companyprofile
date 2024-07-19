<?php

namespace App\Http\Controllers;

use App\Models\ProdukLayanan;
use Illuminate\Http\Request;

class ProdukLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produkLayanans = ProdukLayanan::all();
        return view('produk_layanan.index', compact('produkLayanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk_layanan.create');
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
            'name' => 'required',
            'description' => 'required',
        ]);

        ProdukLayanan::create($request->all());
        return redirect()->route('produk-layanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdukLayanan $produkLayanan)
    {
        return view('produk_layanan.edit', compact('produkLayanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdukLayanan $produkLayanan)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $produkLayanan->update($request->all());
        return redirect()->route('produk-layanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdukLayanan $produkLayanan)
    {
        $produkLayanan->delete();
        return redirect()->route('produk-layanan.index');
    }
}
