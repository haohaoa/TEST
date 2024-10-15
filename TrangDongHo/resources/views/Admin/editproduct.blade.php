@extends('Admin.master')
@section('title','Edit Product')
@section('main_contentAdmin')
@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif
<div class="container mt-4">
  <div class="row">
    <div class="col-md-3">
      <div class="list-group">
        <a href="{{ route('admin_home') }}" class="list-group-item list-group-item-action">contact</a>
        <a href="{{ route('admin_users') }}" class="list-group-item list-group-item-action">Users</a>
        <a href="{{ route('admin_product') }}" class="list-group-item list-group-item-action active">Products</a>
        <a href="{{ route('admin_customer') }}" class="list-group-item list-group-item-action">Customer Invoice</a>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card">
        <div class="card-header">
          <h2 class="card-title">Edit Product</h2>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('admin_update_product',['id'=> $data->product_id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="productName">Product Name</label>
              <input type="text" class="form-control" id="productName" name="productName" placeholder="Enter product name" value="{{ $data->name }}" required>
            </div>
            <div class="form-group">
              <label for="productDescription">Product Description</label>
              <textarea class="form-control" id="productDescription" name="productDescription" rows="3" placeholder="Enter product description" required>{{ $data->description }}</textarea>
            </div>
            <div class="form-group">
              <label for="productPrice">Product Price</label>
              <input type="text" class="form-control" id="productPrice" name="productPrice" placeholder="Enter product price" value="{{ $data->money }}" required>
            </div>
            <div class="form-group">
              <label for="productColor">Product Color</label>
              <input type="text" class="form-control" id="productColor" name="productColor" placeholder="Enter product color" value="{{ $data->color }}" required>
            </div>
            <div class="form-group">
              <label for="currentImage">Current Image</label>
              <div class="row">
                <div class="col-md-6">
                  <img src="{{ asset('ruiz/assets/images/product/' . $data->link) }}" alt="Current Image" class="img-thumbnail">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="productImage">Choose New Image</label>
              <input type="file" class="form-control-file" id="productImage" name="productImage">
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" id="isFeatured" name="isFeatured" {{ $data->hot == 1 ? 'checked' : '' }}>
              <label class="form-check-label" for="isFeatured">
                Featured Product
              </label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update Product</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
