<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    
    protected $table = 'data';

    protected $fillable = [
        'nama',
        'no_KK',
        'no_tlp',
        'penghasilan',
        'Pekerjaan',
        'kondisi_rumah',
        'jumlah_tanggungan',
        'status',
        'sktm',
        'slip_gaji',
        'foto_depan',
        'foto_ruang_tamu',
        'foto_dapur',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_login', 'id_pengguna');
    }
}