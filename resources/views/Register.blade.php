<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hi Brain!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" type="image/png" href="{{url('Template/dash/images/brain.ico')}}"/>

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{url('template/dash/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{url('template/dash/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('template/dash/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{url('template/dash/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{url('template/dash/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{url('template/dash/css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{url('template/dash/css/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" href="{{url('template/dash/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{url('template/dash/fonts/flaticon/font/flaticon.css')}}">

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
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> hibrain@gmail.com</a>
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
                <li class="active">
                  <a href="{{ route('register.index') }}" class="nav-link text-left">Data-User</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-left">Contact</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
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
    <br>
    <br>
    <br>
    <br>
    <div class="main-content">
      <div class="container-fluid">
        <div class="panel panel-headline">
          <div class="panel-body">
            <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                  <div class="header">
                    <h2>Data User</h2>
                  </div>
                  <div class="body table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama Lengkap</th>
                          <th>Nomor Telepon</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no = 1; @endphp
                        @foreach($petugas as $pt)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $pt->nama_petugas }}</td>
                          <td>{{ $pt->no_telp }}</td>
                          <td>{{ $pt->email }}</td>
                          <td>{{ $pt->level }}</td>
                          <td>
                            <form action="{{ route('register.destroy', $pt->id )}}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <a href="{{ route('register.edit', $pt->id) }}" class="btn btn-sm btn-primary">Edit</a>
                              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <?php if(Session::get('status')=="admin") {?>
                      <a href="{{ route('novel.create') }}" class="btn btn-sm btn-success">Tambah Data</a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
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
