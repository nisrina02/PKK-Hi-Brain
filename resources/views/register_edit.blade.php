<!DOCTYPE html>
<html lang="en">

<head>
  <title>Academics &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{url('template/dash/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{url('template/dash/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('template/dash/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{url('template/dash/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{url('template/dash/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{url('template/dash//css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{url('template/dash/css/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" href="{{url('template/dash/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{url('template/dash//fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{url('template/dash/css/aos.css')}}">
  <link href="{{url('template/dash/css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{url('template/dash/css/style.css')}}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a>
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a>
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a>
          </div>
          <div class="col-lg-3 text-right">
            <a href="{{url('logout')}}" class="small btn btn-primary px-4 py-2 rounded-0"><span class="fa-fa-sign-out"></span>Log Out</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="{{url('/dashboard2')}}" class="d-block">
              <img src="{{url('template/dash/images/brain3.png')}}" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="{{url('/dashboard2')}}" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="{{url('/courses')}}" class="nav-link text-left">Courses</a>
                </li>
                <?php if(Session::get('level')=="admin") { ?>
                <li class="active">
                  <a href="{{ route('register.index') }}" class="nav-link text-left">Data-User</a>
                </li>
              <?php } ?>
                <li>
                    <a href="#" class="nav-link text-left">Contact</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                                      </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>

        </div>
      </div>

    </header>


    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('template/dash/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Edit Data user</h2>
            </div>
          </div>
        </div>
      </div>


    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Edit</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                  @foreach($petugas as $pt)
                  <form class="contact100-form validate-form" action="{{ route('register.update', $pt->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                      <label for="nama_petugas">Nama Lengkap :</label>
                      <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" value="{{ $pt->nama_petugas }}">
                    </div>
                    <div class="form-group">
                      <label for="no_telp">Nomor Telepon :</label>
                      <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $pt->no_telp }}">
                    </div>
                    <div class="form-group">
                      <label for="email">Email :</label>
                      <input type="email" class="form-control" id="email" name="email" value="{{ $pt->email }}">
                    </div>
                    <div class="form-group">
                      <label for="password">Password :</label>
                      <input type="password" class="form-control" id="password" name="password" value="{{ $pt->password }}">
                    </div>
                    <div class="form-group">
                      <label for="level">Status :</label>
                      <select class="form-control" id="level" name="level">
          							<option value="admin">admin</option>
          							<option value="tutor">tutor</option>
          							<option value="pelajar">pelajar</option>
          						</select>
                    </div>
                    <div class="container-contact100-form-btn">
                      <button type="submit" class="btn btn-primary btn-lg px-5">
                        Submit
                      </button>
                      <button type="reset" class="btn btn-primary btn-lg px-5">
                        Cancel
                      </button>
                    </div>
                  </form>
                  @endforeach
                </div>
            </div>
        </div>
    </div>


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="{{url('template/dash/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{url('template/dash/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{url('template/dash/js/jquery-ui.js')}}"></script>
  <script src="{{url('template/dash/js/popper.min.js')}}"></script>
  <script src="{{url('template/dash/js/bootstrap.min.js')}}"></script>
  <script src="{{url('template/dash/js/owl.carousel.min.js')}}"></script>
  <script src="{{url('template/dash/js/jquery.stellar.min.js')}}"></script>
  <script src="{{url('template/dash/js/jquery.countdown.min.js')}}"></script>
  <script src="{{url('template/dash/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{url('template/dash/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{url('template/dash/js/aos.js')}}"></script>
  <script src="{{url('template/dash/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{url('template/dash/js/jquery.sticky.js')}}"></script>
  <script src="{{url('template/dash/js/jquery.mb.YTPlayer.min.js')}}"></script>




  <script src="{{url('template/dash/js/main.js')}}"></script>

</body>

</html>
