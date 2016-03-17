<!DOCTYPE html>
<html>
	<head>
		<title>Klinik Hamidah Management System</title>
		<!-- Bootstrap Styles-->
    	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
     	<!-- FontAwesome Styles-->
    	<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
        <!-- Custom Styles-->
    	<link href="{{ asset('css/login.css') }}" rel="stylesheet" />
    	<!-- Google Fonts-->
   		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	</head>
	<body>

		<h2 class="form-signin-heading" align="center"><i class="fa fa-stethoscope fa-5x" align="center"></i><br>KLINIK HAMIDAH<br>MANAGEMENT SYSTEM</h2>
		<div class="container">

	      <form class="form-signin">
	        
	        <label for="inputEmail" class="sr-only">Username</label>
	        <input type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
	        <label for="inputPassword" class="sr-only">Password</label>
	        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
	        <!-- <div class="checkbox">
	          <label>
	            <input type="checkbox" value="remember-me"> Remember me
	          </label>
	        </div> -->
	        <!-- <button class="btn btn-lg btn-primary btn-block" type="submit" href="{{action('StaffController@register')}}">Sign in</button> -->
	        <a class="btn btn-lg btn-primary btn-block" href="{{action('StaffController@index')}}">Login</a>
	      </form>

    	</div>

		<!-- JS Scripts-->
	    <!-- jQuery Js -->
	    <script src="{{ asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>
	      <!-- Bootstrap Js -->
	    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
	    <!-- Metis Menu Js -->
	    <script src="{{ asset('js/jquery.metisMenu.js') }}" type="text/javascript"></script>
	      <!-- Custom Js -->
	    <script src="{{ asset('js/custom-scripts.js') }}" type="text/javascript"></script>
	</body>
</html>