@extends('template.base')

@section('style')
<link rel="stylesheet" href="{{asset('style/style.css')}}">
@endsection

@section('content')
<div class="container mt-5" style="width: 33%;">
  <form class="mb-4" action="/update/{{$product->id}}" method="POST">
  @csrf
  @method('PATCH')
      <h1 class="text-center mb-4">Edit Product</h1>
      <div class="form-group">
          <label for="">Product Name</label>
          <input value="{{$product->product_name}}" type="text" class="form-control" name="product_name">
      </div>
      <div class="form-group">
          <label for="">Price</label>
          <input value="{{$product->price}}" type="number" class="form-control" name="price">
      </div>
      <div class="form-group">
          <label for="">Stock</label>
          <input value="{{$product->stock}}" type="number" class="form-control" name="stock">
      </div>
      <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
  </form>
</div>
@endsection