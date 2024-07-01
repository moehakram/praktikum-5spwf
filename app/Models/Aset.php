<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Aset extends Model
{
    use HasFactory;
    protected $table = 'inventaris';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = true;
    public $incrementing = true;
    

    protected  $guarded = ['id'];


    public function peminjaman() : HasMany
    {
        return $this->hasMany(Peminjaman::class, 'inventaris_id', 'id');
    }

    public function organisasi() : BelongsTo
    {
        return $this->belongsTo(Organisasi::class, 'organisasi_id', 'id');
    }
}
