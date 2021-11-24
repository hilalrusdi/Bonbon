<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama', 'like', '%' . $search . '%')
                    ->orWhere('spesies', 'like', '%' . $search . '%')
                    ->orWhere('asal', 'like', '%' . $search . '%')
                    ->orWhere('bobot1', 'like', '%' . $search . '%')
                    ->orWhere('bobot2', 'like', '%' . $search . '%')
                    ->orWhere('bobot3', 'like', '%' . $search . '%')
                    ->orWhere('bobot4', 'like', '%' . $search . '%')
                    ->orWhere('bobot5', 'like', '%' . $search . '%');
        });

    }

    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }

    public function quality(){
        return $this->hasMany(Quality::class);
    }
}
