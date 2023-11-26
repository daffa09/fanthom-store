<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::orderBy('created_at', 'desc')->paginate(12);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public', $foto->hashName());

        Products::create([
            'nama' => $request->nama,
            'harga' => str_replace('.', '', $request->harga),
            'deskripsi' => $request->deskripsi,
            'foto' => $foto->hashName(),
        ]);

        return redirect()->route('products.index')->with('success', 'Add Product Succsess');
    }

    public function edit(Products $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Products $product)
    {
        // Validasi inputan
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
        ]);


        $product->nama = $request->nama;
        $product->harga = str_replace('.', '', $request->harga);
        $product->deskripsi = $request->deskripsi;

        if ($request->file('foto')) {
            Storage::disk('local')->delete('public/' . $product->foto);
            $foto = $request->file('foto');
            $foto->storeAs('public', $foto->hashName());
            $product->foto = $foto->hashName();
        }

        $product->update();

        return redirect()->route('products.index')->with('success', 'Update Product Succsess');
    }
}
