<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';

    protected $primaryKey = 'id_pesanan';

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
            DetailPesanan::class,
            'id_pesanan',
            'id_pesanan'
        );
    }

    public function pembayaran()
    {
        return $this->hasOne(
            Pembayaran::class,
            'id_pesanan',
            'id_pesanan'
        );
    }

    public function pengiriman()
    {
        return $this->hasOne(
            Pengiriman::class,
            'id_pesanan',
            'id_pesanan'
        );
    }

    public function penggunaanVoucher()
    {
        return $this->hasOne(
            PenggunaanVoucher::class,
            'id_pesanan',
            'id_pesanan'
        );
    }
}
