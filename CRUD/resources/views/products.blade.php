@extends('template.base')

@section('content')
<div class="container mt-5">
  <h1>Product List</h1>
  <table class="table">
      <thead>
          <tr>
              <th>#</th>
              <th>Product Name</th>
              <th>Category</th>
              <th>Price</th>
              <th>Stock</th>
              <th>Action</th>
              <th>      </th>
          </tr>
      </thead>
      <tbody>
      @foreach($products as $product)
          <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$product->product_name}}</td>
              <td>{{$product->category->name}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->stock}}</td>
              <td>
                  <a href="/editproducts/{{$product->id}}" class="btn btn-success">Edit</a>
              </td>
              <td>
              <form action="/delete/{{$product->id}}" method="POST">
                  @csrf 
                  @method('DELETE')
                  <button action="/delete/$product->id", method="POST" type="submit" class="btn btn-danger">Delete</button>
                  </form>
              </td>
          </tr>
        @endforeach
      </tbody>
  </table>
</div>  
@endsection