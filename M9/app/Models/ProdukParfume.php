<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdukParfume extends Model
{
    protected $table = 'produk_parfume';

    protected $primaryKey = 'id_produk';

    public function kategori()
    {
        return $this->belongsTo(
            Kategori::class,
            'id_kategori',
            'id_kategori'
        );
    }

    public function varian()
    {
        return $this->hasMany(
            VarianProduk::class,
            'id_produk',
            'id_produk'
        );
    }
}
