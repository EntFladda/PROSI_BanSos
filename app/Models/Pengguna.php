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
        'Email', 'Username', 'Password', 'Name', 'role'
    ];

    protected $hidden = [
        'Password', 'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->Password;
    }
}