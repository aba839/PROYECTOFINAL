<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Product;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'delivery_date',
        'customer_id',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // public function products()
    // {
    //     return $this->belongsToMany(Product::class, 'order_product')->withPivot('quantity');
    // }
    public $timestamps = false;
}
