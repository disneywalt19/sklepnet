<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const PENDING = 'pending';
    const PAID    = 'paid';

    public function isPending() {
        return $this->status == self::PENDING;
    }

    public function isPaid() {
        return $this->status == self::PAID;
    }

    public function products() {
        return $this->hasMany(OrderProducts::class);
    }
}
