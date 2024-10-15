@extends('Admin.master')
@section('title','Product')
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
        <a href="{{route('admin_customer')}}" class="list-group-item list-group-item-action">Customer Invoice</a>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="col-md-12">
    <h2>Products</h2>
    <!-- Thêm thanh tìm kiếm vào đây -->
    <form class="form-inline mb-4" method="get" action="{{route('searchProduct')}}">
      @csrf
      <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search" required>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <div class="col-md-3">
        <a href="{{route('admin_addproduct')}}" class="btn btn-primary">Add New</a>
      </div>
    </form>
    
    <div class="card">
      <div class="card-header">
        Product List
      </div>
      <div class="card-body">
        <!-- Hiển thị tổng số lượng sản phẩm -->
        <div class="alert alert-info">
          Total Products: {{ $totalProducts }}
        </div>
        <div class="row">
          @foreach ($allProducts as $sp)
            <div class="col-md-4 mb-4">
              <div class="card">
                <div class="card-header">
                  Product Image
                </div>
                <div class="card-body">
                  <img src="{{ asset('ruiz/assets/images/product/' . $sp->link) }}" alt="" class="img-thumbnail">
                  <p>Product ID: {{ $sp->product_id }}</p>
                  <p>Product Name: {{ $sp->name }}</p>
                  <p>Price: {{ $sp->money }}</p>
                  <p>Quantyti: {{ $sp->quantyti}}</p>
                  <p>Description: {{ $sp->description }}</p>
                  <div class="d-flex justify-content-between">
                    <a href="{{route('admin_edit_product', ['id' => $sp->product_id])}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('admin_add_IMG_product_details', ['id' => $sp->product_id])}}" class="btn btn-primary">+ Img</a>
                    <a href="{{route('deleteProduct', ['id' => $sp->product_id])}}" class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
                  </div>
                  <script>
                    function confirmDelete() {
                        // Sử dụng hộp thoại xác nhận để hiển thị thông báo
                        var result = confirm("Are you sure you want to delete this product?");
                        // Trả về kết quả (true nếu người dùng chọn OK, false nếu chọn Cancel)
                        return result;
                    }
                </script>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
