<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Category_model;
use App\Products_model;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products=Products_model::all();
        return view('front.home',compact('products'));
    }

   
    public function shop()
    {
        $products=Products_model::all();
        return view('front.shop',compact('products'));
    }

    public function showCates($id){
        $category_products=Products_model::where('category_id',$id)->get();
        $id_=$id;
        return view('front.category_list_pro', compact('category_products','id'));

    }


    
    public function detailPro($id) {
        $products=DB::table('products')->where('id',$id)->get();
        return view('front.product_detail',compact('products'));
    }
}
