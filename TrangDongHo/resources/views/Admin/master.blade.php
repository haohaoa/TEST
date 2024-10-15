<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield( 'title' )</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
        
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin_customer')}}">
                <i class="fas fa-shopping-cart"></i>
                <!-- Thay thế fas fa-cog bằng fas fa-shopping-cart -->
                @if(session('bill'))
                <span class="badge badge-danger">{{session('bill')}}</span>
                <!-- Thêm badge badge-danger để hiển thị thông báo màu đỏ -->
                @else
                @endif
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('logout')}}" onclick="return confirmDelete()"><i class="fas fa-sign-out-alt"></i> Logout</a>
              <script>
                function confirmDelete() {
                    // Sử dụng hộp thoại xác nhận để hiển thị thông báo
                    var result = confirm("Do you want to log out?");
                    // Trả về kết quả (true nếu người dùng chọn OK, false nếu chọn Cancel)
                    return result;
                }
            </script>
            </li>
          </ul>
        </div>
      </nav>
  {{-- main_contenadmin --}}
    @yield('main_contentAdmin')
  {{-- end main_contenadmin--}}

  <!-- footer Start -->
  <footer class="footer bg-dark text-light mt-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
          <div class="copy-left-text">
            <p>Copyright &copy; <a href="#" class="text-light">ruiz</a> 2024. All Right Reserved.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="copy-right-image">
            <img src="{{asset('ruiz/assets/images/icon/img-payment.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </footer>
<!-- footer End -->

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
  