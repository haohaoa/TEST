@extends('Admin.master')
@section('title','ADMIN')
@section('main_contentAdmin')
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-12">
          <div class="list-group">
            <a href="{{route('admin_home')}}" class="list-group-item list-group-item-action  active ">contact</a>
            <a href="{{route('admin_users')}}" class="list-group-item list-group-item-action ">Users</a>
            <a href="{{route('admin_product')}}" class="list-group-item list-group-item-action ">Products</a>
            <a href="{{route('admin_customer')}}" class="list-group-item list-group-item-action">customer invoice </a>
              </div>
        </div>
      </div>
    </div>
    {{-- main_contenadmin --}}
    <body>

      <div class="container mt-4">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="mb-4">Customer Support</h2>
                  <div class="table-responsive">
                      <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Phone</th>
                                  <th>Message</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($allContact as $data )
                                <tr>
                                  <td>{{$data->id}}</td>
                                  <td>{{$data->name}}</td>
                                  <td>{{$data ->email}}</td>
                                  <td>{{$data->phone }}</td>
                                  <td>{{$data ->message}}</td>
                              </tr>
                            @endforeach
                              <!-- Loop through support requests here -->
                              
                             
                              <!-- End loop -->
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
@endsection


  