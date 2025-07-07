<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     // Nama tabel (opsional kalau tabelnya 'products', Laravel otomatis paham)
    protected $table = 'products';

    // Primary Key-nya 'kode', bukan 'id'
    protected $primaryKey = 'kode';
    public $incrementing = false; // Karena 'kode' bukan auto increment
    protected $keyType = 'int';   // Karena 'kode' bertipe integer

    // Kolom yang boleh diisi secara mass-assignment
    protected $fillable = [
        'kode',
        'nama',
        'harga',
        'stock',
    ];
}
