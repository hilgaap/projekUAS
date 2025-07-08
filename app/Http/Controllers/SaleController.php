<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SaleController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $cart = session()->get('cart', []);
        return view('sales.index', compact('products', 'cart'));
    }

    public function add(Request $request)
    {
        $product = Product::where('kode', $request->kode)->first();
        if ($product) {
            $cart = session()->get('cart', []);
            $cart[] = [
                'kode' => $product->kode,
                'nama' => $product->nama,
                'harga' => $product->harga,
                'qty' => $request->qty,
                'total' => $product->harga * $request->qty,
            ];
            session()->put('cart', $cart);
        }
        return redirect()->route('sales.index');
    }

    public function edit(Request $request)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$request->index])) {
            $cart[$request->index]['qty'] = $request->qty;
            $cart[$request->index]['total'] = $cart[$request->index]['harga'] * $request->qty;
            session()->put('cart', $cart);
        }
        return redirect()->route('sales.index');
    }

    public function remove(Request $request)
    {
        $cart = session()->get('cart', []);
        unset($cart[$request->index]); 
        $cart = array_values($cart);   
        session()->put('cart', $cart);
        return redirect()->route('sales.index');
    }

    public function checkout()
    {
    $cart = session()->get('cart', []);

    foreach ($cart as $item) {
        $product = Product::where('kode', $item['kode'])->first();
        if ($product) {
            $product->stock = $product->stock - $item['qty'];
            $product->save(); // simpan perubahan stok
        }
    }

    session()->forget('cart');
    return redirect()->route('sales.index')->with('success', 'Transaksi selesai, stok produk terupdate!');
}
}
