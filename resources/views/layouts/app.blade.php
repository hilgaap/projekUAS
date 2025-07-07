<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Kasir Sederhana' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-blue-600 p-4 text-white flex space-x-4">
        <a href="{{ route('sales.index') }}" class="hover:underline">Transaksi Penjualan</a>
        <a href="{{ route('products.index') }}" class="hover:underline">Data Produk</a>
    </nav>

    <div class="p-4">
        {{ $slot }}
    </div>
</body>
</html>
