    @extends('frontend.master')
    @section('titla','contact')
    @section('main-content')
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
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
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Contact Us Page</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area end -->

            <!-- Page Conttent -->
            <main class="page-content section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="contact-form">
                                <div class="contact-form-info">
                                    <div class="contact-title">
                                        <h3>TELL US YOUR PROJECT</h3>
                                    </div>
                                    <form  action="{{ route('contact') }}" method="post">
                                        @csrf
                                        <div class="contact-page-form">
                                            <div class="contact-input">
                                                <div class="contact-inner">
                                                    <input name="name" type="text" placeholder="Name *" required>
                                                </div>
                                                <div class="contact-inner">
                                                    <input name="email" type="email" placeholder="Email *" required>
                                                </div>
                                                <div class="contact-inner">
                                                    <input name="phone" type="text" placeholder="Phone *" required>
                                                </div>
                                                <div class="contact-inner">
                                                    <input name="ib_bill" type="text" placeholder="ID bill *" required>
                                                </div>
                                                <div class="contact-inner contact-message">
                                                    <textarea name="message" placeholder="Message *" required></textarea>
                                                </div>
                                            </div>
                                            <div class="contact-submit-btn">
                                                <button class="login-btn btn" type="submit"><span>Send Email</span></button>

                                                <p class="form-messege"></p>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    @endsection



    