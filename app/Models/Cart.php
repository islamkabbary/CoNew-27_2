<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}
