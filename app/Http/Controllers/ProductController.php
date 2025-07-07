<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    // public function index()
    // {
    //     $products = Product::all();
    //     return view('products.index', compact('products'));
    // }

    // public function store(Request $request)
    // {
    //     Product::create($request->validate([
    //         'kode' => 'required|integer|unique:products,kode',
    //         'nama' => 'required|unique:products,nama',
    //         'harga' => 'required|integer',
    //         'stock' => 'required|integer',
    //     ]));
    //     return redirect()->route('products.index');
    // }

    // public function update(Request $request, Product $product)
    // {
    //     $product->update($request->validate([
    //         'nama' => 'required|unique:products,nama,' . $product->kode . ',kode',
    //         'harga' => 'required|integer',
    //         'stock' => 'required|integer',
    //     ]));
    //     return redirect()->route('products.index');
    // }

    // public function destroy(Product $product)
    // {
    //     $product->delete();
    //     return redirect()->route('products.index');
    // }
    //ke2
//     public function index()
// {
//     $products = Product::all();
//     return view('products.index', compact('products'));
// }

// public function handleAction(Request $request)
// {
//     $action = $request->action;
//     $kode = $request->kode;

//     if ($action === 'load') {
//         return redirect()->route('products.index');
//     } elseif ($action === 'insert') {
//         return redirect()->route('products.create');
//     } elseif ($action === 'update') {
//         if ($kode) {
//             return redirect()->route('products.edit', $kode);
//         }
//     } elseif ($action === 'delete') {
//         if ($kode) {
//             Product::where('kode', $kode)->delete();
//         }
//         return redirect()->route('products.index');
//     }

//     return back();
// }
// public function index()
// {
//     // Awal kosong, belum ada data
//     $products = [];
//     return view('products.index', compact('products'));
// }

// public function load()
// {
//     // Load data dari database
//     $products = Product::all();
//     return view('products.index', compact('products'));
// }
public function index()
{
    $products = [];
    return view('products.index', compact('products'));
}

public function load()
{
    $products = Product::all();
    return view('products.index', compact('products'));
}

public function handleAction(Request $request)
{
    $action = $request->action;
    $kode = $request->kode;

    if ($action === 'load') {
        return redirect()->route('products.load');
    } elseif ($action === 'insert') {
        return redirect()->route('products.create');
    } elseif ($action === 'update') {
        if ($kode) {
            return redirect()->route('products.edit', $kode);
        } else {
            return back()->with('error', 'Pilih produk untuk update.');
        }
    } elseif ($action === 'delete') {
        if ($kode) {
            Product::where('kode', $kode)->delete();
        }
        return redirect()->route('products.load');
    }

    return back();
}

public function create()
{
    return view('products.create');
}

public function store(Request $request)
{
    Product::create($request->validate([
        'kode' => 'required|integer|unique:products,kode',
        'nama' => 'required|unique:products,nama',
        'harga' => 'required|integer',
        'stock' => 'required|integer',
    ]));

    return redirect()->route('products.load');
}

public function edit($kode)
{
    $product = Product::where('kode', $kode)->firstOrFail();
    return view('products.edit', compact('product'));
}

public function update(Request $request, $kode)
{
    $product = Product::where('kode', $kode)->firstOrFail();
    $product->update($request->validate([
        'nama' => 'required|unique:products,nama,' . $product->kode . ',kode',
        'harga' => 'required|integer',
        'stock' => 'required|integer',
    ]));

    return redirect()->route('products.load');
}


}
