
@extends("frontend.master")
@section('title','saerch')
@section("main-content")
<div class="main-wrapper">
 
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Shop Fullwidth</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->


    <!-- main-content-wrap start -->
    <div class="main-content-wrap shop-page section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- shop-product-wrapper start -->
                    <div class="shop-product-wrapper">
                        <!-- shop-products-wrap start -->
                        <div class="shop-products-wrap">
                            <div class="tab-content">
                                <div class="tab-pane active" id="grid">
                                    <div class="shop-product-wrap">
                                        <div class="row">
                                            @foreach ($allsearch as $sp )
                                            <div class="col-lg-3 col-md-6">
                                                <!-- single-product-area start -->
                                                <div class="single-product-area mt-30">
                                                    <div class="product-thumb">
                                                        <a href="{{route('product',['product_id'=> $sp ->product_id])}}">
                                                            <img class="primary-image" src="{{ asset('ruiz/assets/images/product/' . $sp->link) }}" alt="">
                                                        </a>
                                                        <div class="label-product label_new">New</div>
                                                    </div>
                                                    <div class="product-caption">
                                                        <h4 class="product-name"><a href="product-details.html">{{$sp ->name}}</a></h4>
                                                        <div class="price-box">
                                                            <span class="new-price">{{number_format($sp->money)}} vnd</span>
                                                            <span class="old-price">{{number_format($sp->money)}} vnd</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-area end -->
                                            </div> 
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                </div>
                             
                            </div>
                        </div>
                        <!-- shop-products-wrap end -->

                    
                    </div>
                    <!-- shop-product-wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- main-content-wrap end -->


</div>
@endsection
    




