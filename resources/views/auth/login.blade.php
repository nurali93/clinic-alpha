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

          <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
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