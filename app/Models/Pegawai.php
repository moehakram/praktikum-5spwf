<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pegawai extends User
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'pegawai';

    protected $primaryKey = 'nip';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'nip', 'password', 'nama', 'phone_number', 'alamat'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];


}
