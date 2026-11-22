<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenggunaanVoucher extends Model
{
    protected $table = 'penggunaan_voucher';

    protected $primaryKey = 'id_penggunaan_voucher';

    public function voucher()
    {
        return $this->belongsTo(
            Voucher::class,
            'id_voucher',
            'id_voucher'
        );
    }

    public function pesanan()
    {
        return $this->belongsTo(
            Pesanan::class,
            'id_pesanan',
            'id_pesanan'
        );
    }
}
