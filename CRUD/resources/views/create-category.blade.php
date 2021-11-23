@extends('template.base')

@section('style')
<link rel="stylesheet" href="{{asset('style/style.css')}}">
@endsection

@section('content')
<div class="container mt-5" style="width: 33%;">
  <form class="mb-4" action="/category-store" method="POST">
      @csrf
      <h1 class="text-center mb-4">Create Category</h1>
      <div class="form-group">
          <label for="">Category Name</label>
          <input type="text" class="form-control" name="name">
      </div>
      <button id="btn-submit" class="btn btn-primary mt-3">Submit</button>
  </form>
</div>
@endsection