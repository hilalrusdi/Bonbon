<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Transaksi extends Model
{
    use HasFactory;
    use Sluggable;


    protected $table = 'transaksis';

    public $primaryKey = 'id';
    
    protected $fillable = [
        'supplier_id',
        'tanaman_id',
        'user_id',
        'nama',
        'tgl',
        'no_hp',
        'status',
        'ket',
        'total',
        'slug'
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

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    

    public function suppliers(){
        return $this->belongsTo(Supplier::class);
    }

    public function tanamen(){
        return $this->belongsTo(Tanaman::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
