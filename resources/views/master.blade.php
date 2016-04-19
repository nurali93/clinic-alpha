<!DOCTYPE html>
<html>
	<head>
		<title>Klinik Hamidah Management System</title>
		<!-- Bootstrap Styles-->
    	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
     	<!-- FontAwesome Styles-->
    	<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
        <!-- Custom Styles-->
    	<link href="{{ asset('css/custom-styles.css') }}" rel="stylesheet" />
    	<!-- Google Fonts-->
   		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   		<!-- TABLE STYLES-->
    	<link href="{{ asset('js/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet" />
    	<!-- Multiple Selection-->
    	<link href="{{ asset('css/multiple-select.css') }}" rel="stylesheet" />

	</head>
	<body>
		@include('header')
		@yield('sidebar')

		<!-- /. PAGE WRAPPER START -->
        <div id="wrapper">
	        <div id="page-wrapper" >
	            <div id="page-inner">
				 <div class="row">
	                    <div class="col-md-12">
	                        @yield('content')
	                    </div>
	                </div> 
	                 <!-- /. ROW  -->
					 <footer><p>Klinik Hamidah Management System 1.0.0</p></footer>
					</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER END -->
        </div>
     <!-- /. WRAPPER  -->

		<!-- JS Scripts-->
	    <!-- jQuery Js -->
	    <script src="{{ asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>
	      <!-- Bootstrap Js -->
	    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
	    <!-- Metis Menu Js -->
	    <script src="{{ asset('js/jquery.metisMenu.js') }}" type="text/javascript"></script>
	    <!-- DATA TABLE SCRIPTS -->
    	<script src="{{ asset('js/dataTables/jquery.dataTables.js') }}"></script>
    	<script src="{{ asset('js/dataTables/dataTables.bootstrap.js') }}"></script>
    	<!-- Multiple select -->
	    <script src="{{ asset('js/multiple-select.js') }}" type="text/javascript"></script>

	      <!-- Custom Js -->
	    <script src="{{ asset('js/custom-scripts.js') }}" type="text/javascript"></script>
	</body>
</html>