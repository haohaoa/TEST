<!-- resources/views/admin/create_category.blade.php -->

@extends('Admin.master')

@section('title', 'Add Category')

@section('main_contentAdmin')

@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
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
<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-3 mt-3">
        <a href="{{ route('admin_home') }}" class="btn btn-secondary">Back</a>
      </div>
      <h2>Add New Category</h2>
      <form method="POST" action="{{route('store')}}">
        @csrf
        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" required>
        </div>
        <div class="form-group">
          <label for="description">Category Description</label>
          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter category description (optional)"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
      </form>
    </div>
  </div>
</div>

@endsection
