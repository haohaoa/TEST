@extends('frontend.master')
@section('main-content')
<div class="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                  <h1 ></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">Billing Details</h3>
                        <form action="{{route('addbill')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="firstName" name="name" placeholder="" value="{{$user->name}}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email">Email address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{$user->email}}">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="address">Street address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="House number and street name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone">Phone <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="orderNotes">Order notes</label>
                                    <textarea class="form-control" name="note" id="orderNotes" rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                                <div class="payment-method">
                                    <div class="order-button-payment">
                                        <input type="submit" onclick=" return confirmDelete()" class="btn btn-primary btn-block" value="Place order" />
                                        <script>
                                            function confirmDelete() {
                                                // Sử dụng hộp thoại xác nhận để hiển thị thông báo
                                                var result = confirm("order");
                                                // Trả về kết quả (true nếu người dùng chọn OK, false nếu chọn Cancel)
                                                return result;
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">Your Order</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $alltotal = 0; @endphp
                                    @foreach ($cart as $ct)
                                        @php
                                        $quatity = $ct->quantity;
                                        $money = $ct->money;
                                        $total =  $money * $quatity;
                                        $alltotal += $total;
                                        @endphp 
                                        <tr>
                                            <td>{{$ct->name}} <strong class="product-quantity"> × {{$ct->quantity}}</strong></td>
                                            <td>{{number_format($ct->money)}} vnd</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Order Total</th>
                                        <td><strong>{{number_format($alltotal)}} vnd</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
