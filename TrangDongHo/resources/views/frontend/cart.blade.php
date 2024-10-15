@extends('frontend.master')
@section('title','cart')
@section('main-content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif
@if(session('error'))
<div class="alert alert-success">
    {{session('error')}}
</div>
@endif
<div class="main-wrapper">
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Cart Page</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    
    <!-- main-content-wrap start -->
    <div class="main-content-wrap section-ptb cart-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if($allCart->isEmpty())
                    <h2>No product</h2>
                    @else 
                    <form action="#" class="cart-table">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="plantmore-product-thumbnail">Images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="plantmore-product-price">Unit Price</th>
                                        <th class="plantmore-product-quantity">Quantity</th>
                                        <th class="plantmore-product-subtotal">Total</th>
                                        <th class="plantmore-product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $product_total = 0; // Khởi tạo biến $product_total trước vòng lặp foreach
                                    @endphp
                                    @foreach ($allCart as $Cart )
                                    @php
                                        $total = $Cart->money * $Cart->quantity;
                                        $product_total += $total;
                                    @endphp
                                    <tr>
                                        <td class="plantmore-product-thumbnail"><a href="#"><img src="{{ asset('ruiz/assets/images/product/' . $Cart->link) }}" alt=""></a></td>
                                        <td class="plantmore-product-name"><a href="#">{{ $Cart->name }}</a></td>
                                        <td class="plantmore-product-price"><span class="amount">{{number_format($Cart->money)  }} vnd</span></td>
                                        <td class="plantmore-product-quantity">{{ $Cart->quantity }}</td>
                                        <td class="product-subtotal"><span class="amount">{{number_format($total) }} vnd</span></td>
                                        <td class="plantmore-product-remove" onclick="return confirmDelete()"><a href="{{ Route('deletecart', ['id' => $Cart->id]) }}"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                @endforeach
                                <script>
                                    function confirmDelete() {
                                        // Sử dụng hộp thoại xác nhận để hiển thị thông báo
                                        var result = confirm("Are you sure you want to delete this item?");
                                        // Trả về kết quả (true nếu người dùng chọn OK, false nếu chọn Cancel)
                                        return result;
                                    }
                                </script>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-4 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul>
                                        <li>Total <span>{{number_format($product_total)}} vnd</span></li>
                                    </ul>
                                    <a href="{{route('bill')}}" class="proceed-checkout-btn">Proceed to checkout</a>

                                </div>
                            </div>
                        </div>
                    </form>
                    
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- main-content-wrap end -->


</div>
@endsection


    

    <!-- JS
============================================ -->
