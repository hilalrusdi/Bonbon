<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tgl',
        'no_hp',
        'status',
        'ket',
        'total',
    ];


    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama', 'like', '%' . $search . '%')
                    ->orWhere('tgl', 'like', '%' . $search . '%')
                    ->orWhere('status', 'like', '%' . $search . '%')
                    ->orWhere('ket', 'like', '%' . $search . '%')
                    ->orWhere('total', 'like', '%' . $search . '%');
        });

    }

    

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function tanaman(){
        return $this->belongsTo(Tanaman::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
