<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('NIK', 'like', '%' . $search . '%')
                    ->orWhere('born', 'like', '%' . $search . '%')
                    ->orWhere('no_hp', 'like', '%' . $search . '%')
                    ->orWhere('alamat', 'like', '%' . $search . '%')
                    ->orWhere('tgl_kerja', 'like', '%' . $search . '%');
        });

    }

    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }
}
