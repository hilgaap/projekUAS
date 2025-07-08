@extends('layouts.app')

@section('title', 'Transaksi Penjualan')

@section('header')
    Transaksi Penjualan
@endsection

@section('content')
    <h2 class="text-xl font-semibold mb-4">Transaksi Penjualan</h2>

  
    <form method="POST" action="{{ route('sales.add') }}" class="mb-6 space-y-4">
        @csrf
        <div>
            <label for="kode" class="block mb-1 text-sm font-medium text-gray-700">Kode Produk</label>
            <select name="kode" id="kode" required class="w-full rounded border border-gray-300 p-2">
                <option value="">Pilih Produk</option>
                @foreach ($products as $product)
                    <option value="{{ $product->kode }}">{{ $product->kode }} - {{ $product->nama }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="qty" class="block mb-1 text-sm font-medium text-gray-700">Jumlah</label>
            <input type="number" name="qty" id="qty" value="1" required class="w-full rounded border border-gray-300 p-2">
        </div>
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Tambah ke List</button>
    </form>

 
    @if (count($cart) > 0)
        <h3 class="text-lg font-medium mb-2">Daftar Belanja</h3>
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300 text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border px-2 py-1">Kode</th>
                        <th class="border px-2 py-1">Nama</th>
                        <th class="border px-2 py-1">Harga</th>
                        <th class="border px-2 py-1">Qty</th>
                        <th class="border px-2 py-1">Total</th>
                        <th class="border px-2 py-1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $index => $item)
                        <tr>
                            <td class="border px-2 py-1">{{ $item['kode'] }}</td>
                            <td class="border px-2 py-1">{{ $item['nama'] }}</td>
                            <td class="border px-2 py-1">{{ $item['harga'] }}</td>
                            <td class="border px-2 py-1">
                                <form method="POST" action="{{ route('sales.edit') }}" class="flex items-center space-x-2">
                                    @csrf
                                    <input type="hidden" name="index" value="{{ $index }}">
                                    <input type="number" name="qty" value="{{ $item['qty'] }}" min="1" class="w-16 rounded border border-gray-300 p-1">
                                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-2 py-1 rounded text-xs">Edit</button>
                                </form>
                            </td>
                            <td class="border px-2 py-1">{{ $item['total'] }}</td>
                            <td class="border px-2 py-1">
                                <form method="POST" action="{{ route('sales.remove') }}" onsubmit="return confirm('Hapus barang ini?')">
                                    @csrf
                                    <input type="hidden" name="index" value="{{ $index }}">
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-2 py-1 rounded text-xs">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <form method="POST" action="{{ route('sales.checkout') }}" class="mt-4">
            @csrf
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Bayar</button>
        </form>
    @else
        <p class="text-gray-600">Belum ada produk yang ditambahkan.</p>
    @endif
@endsection
