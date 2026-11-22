<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VarianProduk extends Model
{
    protected $table = 'varian_produk';

    protected $primaryKey = 'id_varian';

    public function produk()
    {
        return $this->belongsTo(
            ProdukParfume::class,
            'id_produk',
            'id_produk'
        );
    }

    public function detailKeranjang()
    {
        return $this->hasMany(
            DetailKeranjang::class,
            'id_varian',
            'id_varian'
        );
    }

    public function detailPesanan()
    {
        return $this->hasMany(
            DetailPesanan::class,
            'id_varian',
            'id_varian'
        );
    }
}
