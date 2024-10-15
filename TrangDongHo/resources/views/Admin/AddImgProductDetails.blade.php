@extends('Admin.master')
@section('title','Add Product Details')
@section('main_contentAdmin')
@if(session('success'))
<div class="alert alert-success">
  {{session('success')}}
</div>
@endif
<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <div class="list-group">
        <a href="{{route('admin_home')}}" class="list-group-item list-group-item-action">contact</a>
        <a href="{{route('admin_users')}}" class="list-group-item list-group-item-action">Users</a>
        <a href="{{route('admin_product')}}" class="list-group-item list-group-item-action active">Products</a>
        <a href="{{route('admin_customer')}}" class="list-group-item list-group-item-action">Customer Invoice </a>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="col-md-12">
    <div class="col-md-3 mt-3">
        <a href="{{route('admin_product')}}" class="btn btn-secondary">Back</a>
    </div>
    <h2>Add IMG Product</h2>
    <form method="POST" action="{{route('admin_add_IMG_product_details_form',['id'=> $id])}}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="productImage">Product Image</label>
        <input type="file" class="form-control-file" id="productImage" name="productImage" required>
      </div>
      <button type="submit" class="btn btn-primary">Add IMG </button>
    </form>
  </div>
</div>
@endsection
