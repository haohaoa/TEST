@extends('Admin.master')
@section('title','User')
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
              <a href="{{route('admin_users')}}" class="list-group-item list-group-item-action active">Users</a>
              <a href="{{route('admin_product')}}" class="list-group-item list-group-item-action">Products</a>
              <a href="{{route('admin_customer')}}" class="list-group-item list-group-item-action">Customer invoice </a>
          </div>
      </div>
  </div>
</div>
<div class="container">
  <div class="col-md-12">
      <h2>User</h2>
      <!-- Thêm thanh tìm kiếm vào đây -->
      <form class="form-inline mb-4" method="GET" action="{{route('searchUser')}}">
           @csrf
          <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search" required>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          <div class="col-md-3">
              <a href="{{route('addUser')}}" class="btn btn-primary">Add new</a>
          </div>
      </form>
      <div class="card">
          <div class="card-header">
              User list
          </div>
          <div class="card-body">
              <!-- Hiển thị tổng số lượng người dùng -->
              <div class="alert alert-info">
                  Total Users: {{ $totalUsers }}
              </div>
              <div class="table-responsive">
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Sex</th>
                              <th scope="col">Email</th>
                              <th scope="col">Password</th>
                              <th scope="col">Admin</th>
                              <th scope="col">Created At</th>
                              <th scope="col">Updated At</th>
                              <th scope="col">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($alluser as $us)
                          <tr>
                              <th scope="row">{{$us->id}}</th>
                              <td>{{$us->name}}</td>
                              <td>{{$us->sex}}</td>
                              <td>{{$us->email}}</td>
                              <td>{{$us->password}}</td>
                              <td>{{$us->admin}}</td>
                              <td>{{$us->created_at}}</td>
                              <td>{{$us->updated_at}}</td>
                              <td>
                                  <a href="{{route('editUserId',['id'=> $us->id])}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('deleteUserId',['id'=> $us->id])}}" onclick="return confirmDelete()" class="btn btn-danger">Delete</a>
                              </td>
                          </tr>
                          @endforeach
                          <script>
                            function confirmDelete() {
                                // Sử dụng hộp thoại xác nhận để hiển thị thông báo
                                var result = confirm("bạn có chắc chắn muốn xóa không");
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
@endsection
