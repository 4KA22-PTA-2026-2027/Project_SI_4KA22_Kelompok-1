<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailKeranjang extends Model
{
    protected $table = 'detail_keranjang';

    protected $primaryKey = 'id_detail_keranjang';

    public function keranjang()
    {
        return $this->belongsTo(
            KeranjangBelanja::class,
            'id_keranjang',
            'id_keranjang'
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
