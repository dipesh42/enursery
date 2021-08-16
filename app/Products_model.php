<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_model extends Model
{
    protected $table='products';
    protected $primarykey='id';
    protected $fillable=['pro_name','pro_code','pro_price','pro_info','image','spl_price','stock','category_id'];
}
