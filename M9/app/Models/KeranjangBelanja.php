<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeranjangBelanja extends Model
{
    protected $table = 'keranjang_belanja';

    protected $primaryKey = 'id_keranjang';

    public function pengguna()
    {
        return $this->belongsTo(
            Pengguna::class,
            'id_pengguna',
            'id_pengguna'
        );
    }

    public function detail()
    {
        return $this->hasMany(
            DetailKeranjang::class,
            'id_keranjang',
            'id_keranjang'
        );
    }
}
