@extends('front.master')
@section('title','Detail Page')
@section('content')

<div class="container">
<div class="row">

@foreach ($products as $product)
<div class="col-md-6 col-xs-12">
<div class="thumbnail">
<img src="{{url('images',$product->image)}}" class="card-img">
</div>
</div>
<div class="col-md-5 col-md-offset-1">
<h2><?php echo ucwords($product->pro_name); ?></h2>
<h5>{{$product->pro_info}}</h5>
<h2 class="text-danger">Rs. {{$product->spl_price}}</h2>

<p><b>Available : {{$product->stock}} In Stock</b></p>
<a href="{{url('cart/addItem',$product->id)}}" class="btn btn-sm btn-outline-secondary">Add to Cart<i class="fa fa-shopping-cart"></i></a>

<br><br>




</div>

@endforeach
</div>
@endsection