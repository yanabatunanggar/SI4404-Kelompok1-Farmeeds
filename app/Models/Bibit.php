<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bibit extends Model
{
    use HasFactory;

    protected $table = 'bibits';

    public function order() {
        return $this->belongsTo(Order::class, 'id_bibit', 'id');
    }
}
