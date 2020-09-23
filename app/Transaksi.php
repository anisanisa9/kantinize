<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksis";
    protected $primarykey = "id_transaksi";

    protected $fillable = [
        'id_user', 'tanggal_order', 'total_bayar'
    ];
}
