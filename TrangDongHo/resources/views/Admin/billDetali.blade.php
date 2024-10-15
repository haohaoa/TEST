@extends('Admin.master')
@section('main_contentAdmin')
<div class="container mt-4">
    <div class="row">
      <div class="col-md-12">
        <div class="list-group">
          <a href="{{route('admin_home')}}" class="list-group-item list-group-item-action   ">contact</a>
          <a href="{{route('admin_users')}}" class="list-group-item list-group-item-action ">Users</a>
          <a href="{{route('admin_product')}}" class="list-group-item list-group-item-action ">Products</a>
          <a href="{{route('admin_customer')}}" class="list-group-item list-group-item-action active">customer invoice  </a>
        </div>
      </div>
    </div>
  </div>
<div class="container mt-4">
    <div class="col-md-3 mt-3">
        <a href="{{route('admin_customer')}}" class="btn btn-secondary">Back</a>
    </div>
  <div class="row">
    <div class="col-md-12">
      <h2>product deuali</h2>
      <div class="card">
        <div class="card-header">
            Information line
          <div class="float-right">
            <a type="button" href="{{ route('status', ['id' => $billData[0]['idBill'], 'id_product' => $billData[0]['idProduct']]) }}" class="btn btn-success">Order confirmation</a>
          </div>
        </div>
        <div class="card-body">
            <p><strong>ID Bill:</strong> {{ $billData[0]['idBill'] }}</p>
            <p><strong>Name User:</strong> {{ $billData[0]['name'] }}</p>
            <p><strong>Address:</strong> {{ $billData[0]['address'] }}</p>
            <p><strong>Phone:</strong> {{ $billData[0]['phone'] }}</p>
            <p><strong>email:</strong> {{ $billData[0]['email'] }}</p>
            <p><strong>Order date:</strong> {{ $billData[0]['created_at'] }}</p>
            <p><strong>note:</strong> {{ $billData[0]['note'] }}</p>
        <hr>
          <h4>product deuali</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">img</th>
                  <th scope="col">name product</th>
                  <th scope="col">quantity</th>
                  <th scope="col">money</th>
                </tr>
              </thead>
              <tbody>   
                <tr>
                  <th scope="row">{{ $billData[0]['idProduct'] }}</th> <!-- Sử dụng id của sản phẩm -->
                  <td><img style="width: 50px; height: auto;" src="{{  asset('ruiz/assets/images/product/' .$billData[0]['img']) }}" alt="product image"></td> <!-- Hiển thị hình ảnh sản phẩm -->
                  <td>{{ $billData[0]['nameProduct'] }}</td> <!-- Hiển thị tên sản phẩm -->
                  <td>{{ $billData[0]['quantity'] }}</td>
                  <td>{{ number_format($billData[0]['money'] )}} VND</td> <!-- Hiển thị giá sản phẩm -->
                </tr>
              </tbody>
            </table>
          </div>
          <p><strong>status product:</strong> {{ $billData[0]['status'] }}</p> <!-- Hiển thị trạng thái đơn hàng -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
