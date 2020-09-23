<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    protected $table = 'detail_orders';
    protected $guarded = ['id_detail_order'];
    protected $primaryKey = 'id_detail_order';

    public function food()
    {
        return $this->hasOne('App\Makanan', 'id_makanan', 'id_makanan');
    }

    public function trasaction()
    {
        return $this->belongsTo('App\Transaksi');
    }
}
