<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Gloudemans\Shoppingcart\Facades\Cart as ShoppingCart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    /*protected $fillable = [
        'product_id',
        'quantity',
        'unit_price',
        'total_price',
    ];*/
    protected $guarded=[];

    public function product()
    {
        return $this->hasMany(Product::class,'product_id');
    }
}
