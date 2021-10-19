<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    use HasFactory;

    protected $table = 'tanamen';

    protected $fillable = [
        'nama',
        'spesies',
        'asal',
        'alamat',
    ];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama', 'like', '%' . $search . '%')
                    ->orWhere('spesies', 'like', '%' . $search . '%')
                    ->orWhere('asal', 'like', '%' . $search . '%')
                    ->orWhere('alamat', 'like', '%' . $search . '%');
        });

    }

    public function transaksis(){
        return $this->hasMany(Transaksi::class);
    }
}
