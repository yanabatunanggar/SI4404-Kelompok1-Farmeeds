<?php

namespace App\Models;

use App\Models\Alat;
use App\Models\User;
use App\Models\Bibit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function alat() {
        return $this->hasMany(Alat::class, 'id', 'id_alat');
    }

    public function bibit() {
        return $this->hasMany(Bibit::class, 'id', 'id_bibit');
    }

    public function user() {
        return $this->hasMany(User::class, 'id', 'id_user');
    }
}
