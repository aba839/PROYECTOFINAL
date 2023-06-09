<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'quantity',
        'price',
    ];

    // public function orders()
    // {
    //     return $this->belongsToMany(Order::class, 'order_product')->withPivot('quantity');
    // }

    public $timestamps = false;
}
