<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $table = 'pengurus';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

      // Relasi ke model Peminjaman
      public function peminjaman()
      {
          return $this->hasMany(Peminjaman::class, 'pegawai_id');
      }
  
      // Relasi ke model Pengembalian
      public function pengembalian()
      {
          return $this->hasMany(Pengembalian::class, 'pegawai_id');
      }

      function organisasi(): BelongsTo
      {
        return $this->belongsTo(Organisasi::class, 'organisasi_id', 'id');
      }
}
