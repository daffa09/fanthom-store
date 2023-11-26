<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

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
            'harga' => 'required|numeric',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public', $foto->hashName());

        Products::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto->hashName(),
        ]);

        return redirect()->route('products.index')->with('success', 'Add Product Succsess');
    }

    public function edit(Products $product)
    {
        return view('products.edit', compact('product'));
    }
}
