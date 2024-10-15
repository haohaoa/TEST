@extends('frontend.master')
@section('title','CLOCK')
@section('main-content')
      <!-- Hero Section Start -->
     
    <div class="hero-slider hero-slider-one">
        <!-- Single Slide Start -->
        <div class="single-slide" style="background-image: url(ruiz/assets/images/slider/slide-bg-2.jpg)">
            
        </div>
        <!-- Single Slide End -->
    </div>
    <!-- Hero Section End -->
    
    <!-- Banner Area Start -->
    <div class="banner-area section-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="ruiz/assets/images/banner/banner-01.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6  col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="ruiz/assets/images/banner/banner-02.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
   
    <!-- Product Area Start -->
    <div class="product-area section-pb section-pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4>Best seller products</h4>
                    </div>
                </div>
            </div>
            <div class="row product-active-lg-4">
                @foreach ($allProduct as $sp )
                <div class="col-lg-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mt-30">
                        <div class="product-thumb">
                            <a href="{{ route('product', ['product_id' => $sp->product_id]) }}">
                                <img class="primary-image" src="{{ asset('ruiz/assets/images/product/' . $sp->link) }}" alt="">
                            </a>
                            <div class="label-product label_new">New</div>
                            <div class="action-links">
                            </div>
                        </div>
                        <div class="product-caption">
                            <h4 class="product-name"><a href="product-details.html">{{$sp -> name}}</a></h4>
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
    <!-- Product Area End -->
    
    <!-- Banner Area Start -->
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="ruiz/assets/images/banner/banner-03.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6  col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="ruiz/assets/images/banner/banner-04.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    
    
    <!-- Product Area Start -->
    <div class="product-area section-pb section-pt-30">
        <div class="container">
           
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="nav product-tab-menu" role="tablist">
                        <li class="product-tab__item nav-item">
                            <a class="product-tab__link" id="nav-new-tab" data-bs-toggle="tab" href="#nav-new" role="tab" aria-selected="false">New Arrivals</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            
            <div class="tab-content product-tab__content" id="product-tabContent">
                <div class="tab-pane fade show active" id="nav-featured" role="tabpanel">
                    <div class="product-carousel-group">
                       
                        <div class="row product-active-row-4">
                            @foreach ($allProduct as $sp )
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="{{ route('product', ['product_id' => $sp->product_id]) }}">
                                            <img class="primary-image" src="{{ asset('ruiz/assets/images/product/' . $sp->link) }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">{{$sp->name}}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">{{ number_format($sp->money) }} vnd</span>
                                            <span class="old-price">{{ number_format($sp->money) }} vnd</span>
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
    </div>

   
@endsection