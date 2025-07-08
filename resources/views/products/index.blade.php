@extends('layouts.app')

@section('title', 'Data Produk')

@section('header')
    Data Produk
@endsection

@section('content')
    <h2 class="text-xl font-semibold mb-4">Data Produk</h2>

  
    <form method="POST" action="{{ route('products.action') }}" class="space-y-4">
        @csrf
        <div class="flex space-x-2">
            <button type="submit" name="action" value="load" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Load</button>
            <button type="submit" name="action" value="insert" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Insert</button>
            <button type="submit" name="action" value="update" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">Update</button>
            <button type="submit" name="action" value="delete" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">Delete</button>
        </div>

        @if (count($products) > 0)
            <div class="overflow-x-auto">
                <table class="w-full border border-gray-300 text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border px-2 py-1">Pilih</th>
                            <th class="border px-2 py-1">Kode</th>
                            <th class="border px-2 py-1">Nama</th>
                            <th class="border px-2 py-1">Harga</th>
                            <th class="border px-2 py-1">Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="border px-2 py-1 text-center">
                                    <input type="radio" name="kode" value="{{ $product->kode }}">
                                </td>
                                <td class="border px-2 py-1">{{ $product->kode }}</td>
                                <td class="border px-2 py-1">{{ $product->nama }}</td>
                                <td class="border px-2 py-1">{{ $product->harga }}</td>
                                <td class="border px-2 py-1">{{ $product->stock }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-gray-600">Belum ada data. Klik Load untuk memuat produk.</p>
        @endif
    </form>
@endsection
