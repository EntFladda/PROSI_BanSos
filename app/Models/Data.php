<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data'; // sesuaikan dengan nama tabel Anda jika berbeda

    protected $fillable = [
        'id_login',
        'nama',
        'no_KK',
        'no_tlp',
        'penghasilan',
        'Pekerjaan',
        'kondisi_rumah',
        'jumlah_tanggungan',
        'status',
        'foto_depan',
        'foto_ruang_tamu',
        'foto_dapur',
    ];

    // Relasi dengan model pengguna jika dibutuhkan
    public function user()
    {
        return $this->belongsTo(User::class, 'id_login', 'id_pengguna');
    }
}