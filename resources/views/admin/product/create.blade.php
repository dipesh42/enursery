@extends('admin.master')
@section('title','Form Insert')
@section('content')

    <div class="container-fluid">
    <div class="row">

<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" style="text-decoration: underline; margin-top:50px;">
    <h3>Add New Product</h3>
    <div class="col-md-6">
        <div class="panel-body">
        <form action="{{route('product.store')}}" method="post" role = "form" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group{{$errors->has('pro_name')?' has-error':''}}">
        <label for="pro_name">Name</label>
        <input type="text" class="from-control" name="pro_name" id="pro_name" placeholder="Product Name">
        <spam class="text-danger">{{$errors->first('pro_name')}}</spam>
        </div>

        <div class="form-group{{$errors->has('pro_code')?' has-error':''}}">
        <label for="pro_code">Code</label>
        <input type="text" class="from-control" name="pro_code" id="pro_code" placeholder="Code">
        <spam class="text-danger">{{$errors->first('pro_code')}}</spam>
        </div>


        <div class="form-group{{$errors->has('pro_price')?' has-error':''}}">
        <label for="pro_price">Price</label>
        <input type="text" class="from-control" name="pro_price" id="pro_price" placeholder="Price">
        <spam class="text-danger">{{$errors->first('pro_price')}}</spam>
        </div>

        <div class="form-group{{$errors->has('stock')?' has-error':''}}">
        <label for="stock">Stock</label>
        <input type="text" class="from-control" name="stock" id="stock" placeholder="Stock">
        <spam class="text-danger">{{$errors->first('stock')}}</spam>
        </div>


        <div class="form-group{{$errors->has('pro_info')?' has-error':''}}">
        <label for="pro_info">Description</label>
        <textarea name="pro_info" id="pro_info" row="5" class="form-control"> </textarea>
        <spam class="text-danger">{{$errors->first('pro_info')}}</spam>
        </div>

        <div class="form-group{{$errors->has('category_id')?' has-error':''}}">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" class="form-control">
        <option value=""> --Select Category-- </option>
        @foreach($categories as $id=>$category)
        <option value="{{$id}}">{{$category}}</option>
        @endforeach  
        </select>
        <spam class="text-danger">{{$errors->first('category_id')}}</spam>
        </div>


        <div class="form-group{{$errors->has('image')?' has-error':''}}">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control">
        <spam class="text-danger">{{$errors->first('image')}}</spam>
        </div>

        <div class="form-group{{$errors->has('spl_price')?' has-error':''}}">
        <label for="spl_price"> sale Price</label>
        <input type="text" class="from-control" name="spl_price" id="spl_price" placeholder="Sale Price">
        <spam class="text-danger">{{$errors->first('spl_price')}}</spam>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>

</main>
</div>
</div>


@endsection