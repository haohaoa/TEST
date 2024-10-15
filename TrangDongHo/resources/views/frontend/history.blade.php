@extends('frontend.master')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 mb-5">
            <h2 class="text-center mb-4">Order History</h2>
            @if(empty($all))
            <div class="alert alert-info">
                No orders found.
            </div>
            @else
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Order Photo</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Total Amount</th>
                            <th>created</th>
                            <th>quantity</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all as $order)
                        <tr>
                            <td>{{$order['id']}}</td>
                            <td>
                                <img src={{ asset('ruiz/assets/images/product/' . $order['product_link']) }} alt="Order" class="img-fluid" style="max-width: 100px;">
                            </td>
                            <td>{{$order['product_name']}}</td>
                            <td>{{$order['address']}}</td>
                            <td>{{number_format($order['money'])}} vnd</td>
                            <td>{{$order['created_at']}}</td>
                            <td>
                                {{$order['quantity']}}
                           
                             </td>
                            <td>
                                    {{$order['status']}}
                               
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
