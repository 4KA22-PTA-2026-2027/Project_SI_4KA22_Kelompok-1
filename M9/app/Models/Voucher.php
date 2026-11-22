<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = 'voucher';

    protected $primaryKey = 'id_voucher';

    public function penggunaan()
    {
        return $this->hasMany(
            PenggunaanVoucher::class,
            'id_voucher',
            'id_voucher'
        );
    }
}
