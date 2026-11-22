<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable
{
    use Notifiable;

    protected $table = 'pengguna';

    protected $primaryKey = 'id_pengguna';

    protected $fillable = [
        'nama_pengguna',
        'email',
        'no_telepon',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
    ];

    public function keranjang()
    {
        return $this->hasOne(
            KeranjangBelanja::class,
            'id_pengguna',
            'id_pengguna'
        );
    }

    public function pesanan()
    {
        return $this->hasMany(
            Pesanan::class,
            'id_pengguna',
            'id_pengguna'
        );
    }
}
