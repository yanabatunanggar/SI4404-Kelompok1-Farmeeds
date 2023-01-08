<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = 'products';

    // protected $guarded = ['id'];
    protected $fillable = [
        'nama_produk', 
        'kategori',
        'stock',
        'provinsi',
        'kota',
        'deskripsi',
        'gambar',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function carts() {
        return $this->belongsTo(Cart::class, 'id', 'id_product');
    }

    public function provinces() {
        return $this->belongsTo(Province::class, 'provinsi', 'id');
    }

    public function regencies() {
        return $this->belongsTo(Regency::class, 'kota', 'id');
    }
}
