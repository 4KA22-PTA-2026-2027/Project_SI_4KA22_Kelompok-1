<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $primaryKey = 'id_kategori';

    public function produk()
    {
        return $this->hasMany(
            ProdukParfume::class,
            'id_kategori',
            'id_kategori'
        );
    }
}
