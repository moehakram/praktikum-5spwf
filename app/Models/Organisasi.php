<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organisasi extends Model
{
    use HasFactory;

    protected $table = 'organisasi';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = true;
    public $incrementing = true;

    protected $guarded = ['id'];

    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'organisasi_id', 'id');
    }

    public function aset(): HasMany
    {
        return $this->hasMany(User::class, 'organisasi_id', 'id');
    }
}
