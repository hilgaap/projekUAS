<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use DateTime;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('products')->insert([
    
    ['kode' => 1001, 'nama' => 'Beng Beng', 'harga' => 10000, 'stock' => 40, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1002, 'nama' => 'Choki Choki', 'harga' => 2000, 'stock' => 60, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1003, 'nama' => 'Tic Tac', 'harga' => 1500, 'stock' => 70, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1004, 'nama' => 'Mie Lidi', 'harga' => 1000, 'stock' => 100, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1005, 'nama' => 'Kacang Sukro', 'harga' => 3000, 'stock' => 50, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1006, 'nama' => 'Astor', 'harga' => 4000, 'stock' => 45, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1007, 'nama' => 'Permen Kopiko', 'harga' => 500, 'stock' => 200, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1008, 'nama' => 'Permen Yupi', 'harga' => 2000, 'stock' => 80, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1009, 'nama' => 'Permen Milkita', 'harga' => 1000, 'stock' => 150, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1010, 'nama' => 'Wafer Superman', 'harga' => 2500, 'stock' => 55, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1011, 'nama' => 'Chitato', 'harga' => 12000, 'stock' => 30, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1012, 'nama' => 'Taro Net', 'harga' => 6000, 'stock' => 40, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1013, 'nama' => 'Qtela', 'harga' => 7000, 'stock' => 35, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1014, 'nama' => 'Krip Krip', 'harga' => 1000, 'stock' => 90, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1015, 'nama' => 'Oreo', 'harga' => 8000, 'stock' => 50, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1016, 'nama' => 'Good Time', 'harga' => 5000, 'stock' => 60, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1017, 'nama' => 'Momogi', 'harga' => 1500, 'stock' => 75, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1018, 'nama' => 'Pilus Garuda', 'harga' => 2500, 'stock' => 85, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1019, 'nama' => 'Roma Kelapa', 'harga' => 4500, 'stock' => 65, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
    ['kode' => 1020, 'nama' => 'Energen', 'harga' => 3500, 'stock' => 70, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
]);
    }
}
