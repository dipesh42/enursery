<?php

namespace App\Http\Controllers;
use App\Address_model;
use App\Order_model;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;



class CheckoutController extends Controller
{
    public function index(){
        if(Auth::check()){
            $cartItems=Cart::content();
            return view('cart.checkout',compact('cartItems'));
        }
        else{
            return redirect('login');
        }
    }

    public function address(Request $request){
        $this->validate($request,[
            'fullname'=>'required',
//            'pincode'=>'required|numeric',
            'city'=>'required|min:5|max:25',
            'state'=>'required|min:5|max:35',
//            'country'=>'required',
        ]);

        $request['user_id']=Auth::user()->id;
        $request['country']='Nepal';

        Address_model::create($request->all());

//        $order = new Order_model;
//        $order->createOrder();
        Cart::destroy();
        return view('profile.thanksyou');
    }
}
