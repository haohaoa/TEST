@extends('Admin.master')
@section('title','Add User')
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
        <a href="{{route('admin_users')}}" class="list-group-item list-group-item-action active">Users</a>
        <a href="{{route('admin_product')}}" class="list-group-item list-group-item-action ">Products</a>
        <a href="{{route('admin_customer')}}" class="list-group-item list-group-item-action">Customer Invoice </a>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="col-md-12">
    <div class="col-md-3 mt-3">
        <a href="{{route('admin_users')}}" class="btn btn-secondary">Back</a>
    </div>
    <h2>Add New User</h2>
    <form method="POST" action="{{ route('create_adminUser') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="productName">User Name</label>
        <input type="text" class="form-control" id="productName" name="name" placeholder="Enter User name" required>
      </div>
      <div class="form-group">
        <label for="productDescription"> Password</label>
        <input class="form-control" id="productDescription" name="password" rows="3" placeholder="Enter User password" required></input>
      </div>
      <div class="form-group">
        <label for="productDescription"> Password confirmation </label>
        <input class="form-control" id="productDescription" name="password_confirmation" rows="3" placeholder="Enter User password confirmation" required></input>
      </div>
      <div class="form-group">
        <label for="productPrice">Email</label>
        <input type="text" class="form-control" id="productPrice" name="email" placeholder="Enter Email" required>
      </div>
      <div class="form-group">
        <label for="productColor"> Admin</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="admin" id="admin1" value="1" >
          <label class="form-check-label" for="admin1">
            Yes
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="admin" id="admin0" value="0" checked>
          <label class="form-check-label" for="admin0">
            No
          </label>
        </div>
      </div>
    
      <button type="submit" class="btn btn-primary">Add User</button>
    </form>
    
  </div>
</div>
@endsection
