<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $tables ="makanan"; 

    protected $fillable = [
        'nama_makanan', 'harga_makanan', 'qty_makanan', 'gambar_makanan'
    ];
}
