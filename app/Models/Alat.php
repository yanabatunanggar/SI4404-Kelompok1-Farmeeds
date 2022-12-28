<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alat extends Model
{
    use HasFactory;

    protected $table = 'alat_tanis';

    public function order() {
        return $this->belongsTo(Order::class, 'id', 'id_alat');
    }
}

/*
Relasi

orders to alats
one to many

alats to orders
many to one | one to many (inverse)

orders to bibits
one to many

bibits to orders
many to one | one to many (inverse)

orders to users
one to many

users to orders
many to one | one to many (inverse)


*/