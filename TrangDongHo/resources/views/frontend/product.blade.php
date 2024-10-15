@extends('frontend.master')
@section('title', 'Product - ' . $product->name)
@section('main-content')
<div class="main-wrapper">
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
   
    <!-- main-content-wrap start -->
    <div class="main-content-wrap shop-page section-ptb">
        <div class="container">
            <div class="row product-details-inner">
                <div class="col-lg-5 col-md-6">
                    <!-- Product Details Left -->
                    <div class="product-large-slider">
                        <div class="pro-large-img img-zoom">
                            <img src="{{ asset('ruiz/assets/images/product/' . $product->link) }}" alt="product-details" />
                        </div> 
                    </div>
                    
                    <div class="product-nav">
                        @foreach ( $detail as $ct )
                            <div class="pro-nav-thumb">
                                <img src="{{ asset('ruiz/assets/images/product/' . $ct->link) }}" alt="product-details" class="small-image" data-image="{{ asset('ruiz/assets/images/product/' . $ct->link) }}">
                            </div>
                        @endforeach
                    </div>
                    <!--// Product Details Left -->
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="product-details-view-content">
                        <div class="product-info">
                            <h3>{{$product->name}}</h3>
                            <div class="price-box">
                                <span class="new-price">{{number_format($product->money)}} vnd</span>
                                <span class="old-price">990.000 vnd</span>
                            </div>
                            <p>{{$product->description}}</p>

                            <div class="single-add-to-cart">
                                <form action="{{route('addcart',['id'=> $product->product_id])}}" class="cart-quantity d-flex" method="post">
                                    @csrf
                                    <div class="quantity">
                                        <div class="cart-plus-minus">
                                            <input type="number" class="input-text" name="quantity" value="1" title="Qty">
                                        </div>
                                    </div>
                                    <button class="add-to-cart" type="submit">Add To Cart</button>
                                </form>
                            </div>
                            <hr>
                          
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-description-area section-pt">
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="product_details_tab_content tab-content">
                            <!-- Start Single Content -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="related-product-area section-pt">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3> Related Product</h3>
                        </div>
                    </div>
                </div>
                <div class="row product-active-lg-4">
                    @foreach ($product_ctsp as $ctsp )
                    <div class="col-lg-12">
                        <!-- single-product-area start -->
                        <div class="single-product-area mt-30">
                            <div class="product-thumb">
                                <a href="{{route('product',['product_id' => $ctsp->product_id])}}">
                                    <img class="primary-image" src="{{ asset('ruiz/assets/images/product/' . $ctsp->link) }}" alt="">
                                </a>
                                <div class="label-product label_new">New</div>
                            </div>
                            <div class="product-caption">
                                <h4 class="product-name"><a href="product-details.html">{{$ctsp->name}}</a></h4>
                                <div class="price-box">
                                    <span class="new-price">{{number_format($ctsp->money)}} VND</span>
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
@endsection



   

  