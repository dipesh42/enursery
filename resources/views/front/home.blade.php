@extends('front.master')
@section('title','Home Page')
@section('content')


<main role="main">

<div id="myCarousel" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 " src="{{URL::asset('dist/img/pic2.jpg')}}" alt="First slide" height="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="{{URL::asset('dist/img/pic1.jpg')}}" alt="Second slide" height="500px">
    </div>
   
   
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">

            @forelse($products as $product)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top"  alt="Card image cap" src="{{url('images',$product->image)}}">
                <div class="card-body">
                  <del> Rs. {{$product->pro_price}} </del>
                  <span class="price text-muted float-right">Rs. {{$product->spl_price}}</span>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     
                      <a href="{{url('productDetail',$product->id)}}" class="btn btn-sm btn-outline-secondary">View Product</a>
                      
                   
                      <a href="{{url('cart/addItem',$product->id)}}" class="btn btn-sm btn-outline-secondary">Add to Cart<i class="fa fa-shopping-cart"></i></a>
                    </div>
                  </div>
                </div>
              </div>
          
          
          
          
            </div>
            @empty
            <h3> No Products </h3>
            @endforelse


          </div>
        </div>
      </div>

</main>

@endsection