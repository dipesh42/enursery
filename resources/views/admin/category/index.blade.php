@extends('admin.master')
@section('title','Category Page')
@section('content')

    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main" style="margin-top: 50px">
        <h3 style="text-decoration: underline;"> List Categories  </h3>
        
 
        <br>
        <ul class="nav navbar-nav">
            @if(!empty($categories))

            <div class="table-responsive">
        <table class="table table-hover">
        <thead>
        <tr>
        <th>Category ID</th>
        <th>Category Name</th>
        </thead>

        <tbody>

        @forelse($categories as $category)
      

        <tr>
        <td> {{$category->id}}</td>
        <td> {{$category->name}}</td>
        </tr>

        @empty
        <li>No Category</li>
        @endforelse
        </tbody>


        </table>
 </div>

        

       
        @endif

        </ul>

        <br><br>
        <form action="{{route('category.store')}}" method="post" role="form">
        {{csrf_field()}}

        <div class="form-group">
        <lable for="name">Category name:</lable>
        <input type="text" class="form-control" name="name" id="name" placeholder="Category name">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        </form>


    </main>

@endsection