<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_cart extends Model
{
    use HasFactory;

    protected $table = 'order_carts';

    protected $fillable = [
        'user_id',
        'product_id',
        'quantite',
    ];
}
