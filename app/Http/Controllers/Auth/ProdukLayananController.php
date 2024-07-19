<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ProdukLayanan;
use Illuminate\Http\Request;

class ProdukLayananController extends Controller
{
    public function index()
    {
        $produkLayanan = ProdukLayanan::all();
        $view = view('Arenzha.index', compact('produkLayanan'));
        return $view;
    }

    public function create()
    {
        return view('produk_layanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        ProdukLayanan::create($request->all());
        return redirect()->route('produk-layanan.index');
    }

    public function edit(ProdukLayanan $produkLayanan)
    {
        return view('produk_layanan.edit', compact('produkLayanan'));
    }

    public function update(Request $request, ProdukLayanan $produkLayanan)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $produkLayanan->update($request->all());
        return redirect()->route('produk-layanan.index');
    }

    public function destroy(ProdukLayanan $produkLayanan)
    {
        $produkLayanan->delete();
        return redirect()->route('produk-layanan.index');
    }
}
