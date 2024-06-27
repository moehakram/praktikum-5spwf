<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = true;
    public $incrementing = true;

    protected $guarded = ['id'];

     // Relasi ke model Inventaris
     public function inventaris() : BelongsTo
     {
         return $this->belongsTo(Inventaris::class, 'inventaris_id');
     }
 
     // Relasi ke model Pegawai
     public function pegawai() : BelongsTo
     {
         return $this->belongsTo(User::class, 'pegawai_id');
     }
 
     // Relasi ke model Pengembalian
     public function pengembalian() : HasOne
     {
         return $this->hasOne(Pengembalian::class, 'peminjaman_id');
     }
}
