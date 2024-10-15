@extends('Admin.master')
@section('title','Add Product')
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
    <h2>Add New Product</h2>

    <form method="POST" action="{{ route('admin_addproduct_create') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="productCategory">Product Category</label>
        <select class="form-control" id="productCategory" name="category_id" required>
          <option value="" disabled selected>Select category</option>
          @foreach($allcategory as $cat)
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="productName">Product Name</label>
        <input type="text" class="form-control" id="productName" name="productName" placeholder="Enter product name" required>
      </div>
      <div class="form-group">
        <label for="productDescription">Product Description</label>
        <textarea class="form-control" id="productDescription" name="productDescription" rows="3" placeholder="Enter product description" required></textarea>
      </div>
      <div class="form-group">
        <label for="productPrice">Product Price</label>
        <input type="text" class="form-control" id="productPrice" name="productPrice" placeholder="Enter product price" required>
      </div>
      <div class="form-group">
        <label for="productColor">Product Color</label>
        <input type="text" class="form-control" id="productColor" name="productColor" placeholder="Enter product color" required>
      </div> 
      <div class="form-group">
        <label for="productColor">Product quantyti</label>
        <input type="text" class="form-control" id="productColor" name="quantyti" placeholder="Enter product color" required>
      </div>  
      
      <div class="form-group">
        <label for="productImage">Product Image</label>
        <input type="file" class="form-control-file" id="productImage" name="productImage" required>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="isFeatured" name="isFeatured">
        <label class="form-check-label" for="isFeatured">
          Featured Product
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
    
  </div>
</div>
@endsection
