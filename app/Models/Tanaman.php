<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'spesies',
        'asal',
        'alamat',
    ];

    public function transaksi(){
        return $thin->hasMany(Transaksi::class);
    }
}
