<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $guarded = [
        'id'
    ];

    public function users() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
