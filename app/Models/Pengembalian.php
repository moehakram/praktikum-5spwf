<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengembalian extends Model
{
    use HasFactory;

    protected $table = 'pengembalian';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = true;
    public $incrementing = true;

    protected $guarded = ['id'];


     // Relasi ke model Peminjaman
     public function peminjaman() : BelongsTo
     {
         return $this->belongsTo(Peminjaman::class, 'peminjaman_id');
     }
 
     // Relasi ke model Pegawai
     public function pegawai() : BelongsTo
     {
         return $this->belongsTo(User::class, 'pegawai_id');
     }
}
