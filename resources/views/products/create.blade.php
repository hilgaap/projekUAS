@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('header')
    Tambah Produk Baru
@endsection

@section('content')
    <h2 class="text-xl font-semibold mb-4">Tambah Produk Baru</h2>

    <form method="POST" action="{{ route('products.store') }}" class="space-y-4">
        @csrf
        <div class="flex items-end gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kode Produk</label>
                <input type="number" name="kode" required
                    class="border rounded px-3 py-2 focus:ring focus:ring-blue-300 w-40">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
                <input type="text" name="nama" required
                    class="border rounded px-3 py-2 focus:ring focus:ring-blue-300 w-40">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
                <input type="number" name="harga" required
                    class="border rounded px-3 py-2 focus:ring focus:ring-blue-300 w-40">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Stock</label>
                <input type="number" name="stock" required
                    class="border rounded px-3 py-2 focus:ring focus:ring-blue-300 w-40">
            </div>
           
        <div>
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            Simpan
        </button>
        </div>
        </div>
    </form>
@endsection
