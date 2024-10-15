@extends('frontend.master')

@section('title', 'Đặt hàng thành công')

@section('main-content')
<div class="container mb-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-white">Order Success</div>

                <div class="card-body">
                    <p>Thank you for ordering from us!</p>
                    <p>We have received your order and will process it as soon as possible.</p>
                    <p>You will receive a confirmation email and order updates from us.</p>
                    <p>If you have any questions, please contact us.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
