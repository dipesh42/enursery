<?php

namespace App;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order_model extends Model
{
    protected $table='orders';
    protected $primaryKey='id';
    protected $fillable=['total','status','user_id'];

    public function orderFields(){
        return $this->belongsToMany(Products_model::class)->withPivot('qty','total');
    }

    public function createOrder(){
        $user=Auth::user();
        $order=$user->orders()->create(['total'=>Cart::total(),'status'=>'pending']);
        $cartItems=Cart::content();
   

    foreach ($cartItems as $cartItem){
        $order->orderFields()->attach($cartItem->id,
        ['qty'=>$cartItem->qty,'tax'=>Cart::tax(),'total'=>$cartItem->qty*$cartItem->price]);
    }
}
}
