<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class line extends Model
{
    use HasFactory;

    protected $table = 'lines';

    protected $fillable = [
        'product_id',
        'order_id',
        'quantite',
        'montant',
    ];
}

