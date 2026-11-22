<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    protected $table = 'detail_pesanan';

    protected $primaryKey = 'id_detail_pesanan';

    public function pesanan()
    {
        return $this->belongsTo(
            Pesanan::class,
            'id_pesanan',
            'id_pesanan'
        );
    }

    public function varian()
    {
        return $this->belongsTo(
            VarianProduk::class,
            'id_varian',
            'id_varian'
        );
    }
}
