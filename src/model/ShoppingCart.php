<?php

namespace skygdi\ShoppingCart\model;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    function scopeSelf($Equery,$user_id){
        return $Equery->where("user_id",$user_id);

    }

    public $table = "shopping_cart";

    protected $fillable = [
        'product_id', 'qty', 'user_id'
    ];
}
