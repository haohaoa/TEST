@extends('Admin.master')
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
        <a href="{{route('admin_home')}}" class="list-group-item list-group-item-action   ">contact</a>
        <a href="{{route('admin_users')}}" class="list-group-item list-group-item-action ">Users</a>
        <a href="{{route('admin_product')}}" class="list-group-item list-group-item-action ">Products</a>
        <a href="{{route('admin_customer')}}" class="list-group-item list-group-item-action active">customer invoice </a>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="col-md-12">
    <h2>product</h2>
    <div class="card">
      <div class="card-header">
        product list
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">img</th>
              <th scope="col">name product</th>
              <th scope="col">status </th>
              <th scope="col">detali</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($billData as $data)
            <tr>
              <td scope="row">{{ $data['idBill'] }}</td>
              <td>                            
                   <img style="width: 50px; height: auto;" src="{{ asset('ruiz/assets/images/product/' . $data['img']) }}" alt="">
              </td>
              <td>{{ $data['nameProduct'] }}</td>
              
              <td>{{ $data['status'] }}</td>
             <td>
              <a href="{{ route('admin_customer_detali', ['id' => $data['idBill']]) }}" class="btn btn-primary">Detail</a>

             </td>
            
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
