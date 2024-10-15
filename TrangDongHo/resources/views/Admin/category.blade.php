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
    {{-- <ul class="product-categories"> --}}
      {{-- <li class="category"> --}}
        {{-- <a href="#" class="btn category-toggle">Category</a> --}}
        {{-- <ul class="products hidden"> --}}
          {{-- @foreach ($category as $pl )
          <li><a href="{{route('category',['id'=> $pl ->id])}}">{{$pl ->name}}</a></li>
          @endforeach --}}
          
        {{-- </ul> --}}
      {{-- </li> --}}

    {{-- </ul> --}}
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
        <div class="alert alert-info">
          @php
            $all = 0;
          @endphp
          
          @foreach ($category as $sp)
            @php
              $tong = $sp->quantyti; // Assuming the correct attribute name is 'quantity'
              $all += $tong;
            @endphp
          @endforeach
          
          Total Products: {{ $all }}
        </div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Color</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Quantity</th>
                <th scope="col">Category</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($category as $sp)
              <tr>
                <th scope="row">{{$sp->product_id}}</th>
                <td>
                  <img src="{{ asset('ruiz/assets/images/product/' . $sp->link) }}" alt="Product Image" class="img-thumbnail" style="width: 100px; height: auto;">
                </td>
                <td>{{$sp->name}}</td>
                <td>{{$sp->color}}</td>
                <td>{{$sp->money}}</td>
                <td>{{$sp->description}}</td>
                <td>{{$sp->quantyti}}</td>
                <td>{{$sp->loai}}</td>
                <td>{{ $sp->created_at}}</td>
                <td>{{ $sp->updated_at }}</td>
                <td>
                  <a href="{{route('admin_edit_product', ['id' => $sp->product_id])}}" class="btn btn-primary">Edit</a>
                  <a href="{{route('admin_add_IMG_product_details', ['id' => $sp->product_id])}}" class="btn btn-primary">+ Img</a>
                  <a href="{{route('deleteProduct', ['id' => $sp->product_id])}}" onclick="return confirmDelete()" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
              <script>
                function confirmDelete() {
                    // Sử dụng hộp thoại xác nhận để hiển thị thông báo
                    var result = confirm("Are you sure you want to delete this product?");
                    // Trả về kết quả (true nếu người dùng chọn OK, false nếu chọn Cancel)
                    return result;
                }
              </script>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

  <script>
  // JavaScript to toggle visibility of product lists
  document.addEventListener("DOMContentLoaded", function() {
    const categoryToggles = document.querySelectorAll('.category-toggle');

    categoryToggles.forEach(toggle => {
      toggle.addEventListener('click', function(e) {
        e.preventDefault();
        const productsList = this.nextElementSibling;
        productsList.classList.toggle('hidden');
      });
    });
  });
</script>

<style>
  .hidden {
    display: none;
  }
</style>

@endsection
