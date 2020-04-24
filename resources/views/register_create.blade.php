<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{url('template/register/formcreate/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('template/register/formcreate/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('template/register/formcreate/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('template/register/formcreate/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('template/register/formcreate/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('template/register/formcreate/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('template/register/formcreate/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('template/register/formcreate/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('template/register/formcreate/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('template/register/formcreate/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('template/register/formcreate/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
@if($errors->any())
				@foreach ($errors->all() as $error)
					<div>{{ $error }}</div>
				@endforeach
				@endif

	<div class="container-contact100">
		<div class="wrap-contact100">

      <h1 align="center">DAFTAR KEANGGOTAAN</h1>
      <br>

			<form class="contact100-form validate-form" action="{{ route('register.store') }}" method="post">
          {{ csrf_field() }}

        <div class="form-group">
            <label for="nama_petugas">Nama :</label>
            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas">
          </div>

        <div class="form-group">
            <label for="no_telp">No Telp :</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp">
          </div>

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>

		<div class="form-group">
            <label for="password">Password :</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>

          <div class="form-group">
            <label for="level">Status :</label>
            <select class="form-control" id="level" name="level">
							<?php if(Session::get('level')=="admin") { ?>
								<option value="admin">admin</option>
							<?php } ?>
							<option value="tutor">tutor</option>
							<option value="pelajar">pelajar</option>
						</select>
          </div>


				<div class="container-contact100-form-btn">

        <button class="contact100-form-btn" type="reset">
          Cancel
        </button>
					<button class="contact100-form-btn" type="submit">
						<span>
							Submit
							<i class="zmdi zmdi-arrow-right m-l-8"></i>
						</span>
					</button>
				</div>
			</form>
    </div>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="{{url('template/register/formcreate/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('template/register/formcreate/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('template/register/formcreate/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{url('template/register/formcreate/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('template/register/formcreate/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('template/register/formcreate/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{url('template/register/formcreate/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('template/register/formcreate/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('template/register/formcreate/js/main.js')}}"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
