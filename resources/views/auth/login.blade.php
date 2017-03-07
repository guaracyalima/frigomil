<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Frigomi - Admin :: Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- ===== FAVICON =====-->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- ===== CSS =====-->
    <!-- General-->
    <link rel="stylesheet" href="{{ asset('admin/css/basic.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/theme.css') }}" class="style-theme">
    
    <!--[if lt IE 9]>
    <script src="js/basic/respond.min.js"></script>
    <script src="js/basic/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
    
    <!--[if lt IE 9]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <!--SECTION-->
    <section class="l-main-container">
      <!--Main Content-->
      <div class="login-wrapper">
        <div class="login-container">
          <!--Logo-->
          <h1 class="login-logo"><img src="img/logo.png" alt="Proteus"></h1>
          <!--Login Form-->
          <form id="loginForm" role="form" method="POST" action="{{ route('login') }}" class="login-form">
            {{ csrf_field() }}


            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <input id="email" type="email" name="email" placeholder="Email" class="form-control">
              @if ($errors->has('email'))
              <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
              @endif
            </div>


            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <input id="password" type="password" name="password" placeholder="Password" class="form-control">
              @if ($errors->has('password'))
              <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
              @endif
            </div>


            <button type="submit" class="btn btn-dark btn-block btn-login">Sign In</button>
            <div class="login-social">
              <div class="l-span-md-12">
                <div class="or"><span>- Ou -</span></div>
              </div>
              <div class="l-col-sm-6"><a href="#" class="btn btn-facebook btn-block"><i class="fa fa-facebook"></i>Conectar com o Facebook</a></div>
              <div class="l-col-sm-6"><a href="#" class="btn btn-twitter btn-block"><i class="fa fa-twitter"></i>Conectar com o Twitter</a></div>
            </div>
            <div class="login-options"><a href="{{ route('password.request') }}" class="fl">Esqueceu sua senha?</a><a href="{{ route('register') }}" class="fr">Cadastre-se</a></div>
          </form>
        </div>
      </div>
    </section>
    <!-- ===== JS =====-->
    <!-- jQuery-->
    <script src="{{ asset('admin/js/basic/jquery.min.js') }}"></script>
    <script src="js/basic/jquery-migrate.min.js"></script>
    <!-- General-->
    <script src="js/basic/modernizr.min.js"></script>
    <script src="js/basic/bootstrap.min.js"></script>
    <script src="js/shared/jquery.asonWidget.js"></script>
    <script src="js/plugins/plugins.js"></script>
    <script src="js/general.js"></script>
    <!-- Semi general-->
    <script type="text/javascript">
      var paceSemiGeneral = { restartOnPushState: false };
      if (typeof paceSpecific != 'undefined'){
      	var paceOptions = $.extend( {}, paceSemiGeneral, paceSpecific );
      	paceOptions = paceOptions;
      }else{
      	paceOptions = paceSemiGeneral;
      }
      
    </script>
    <script src="js/plugins/pageprogressbar/pace.min.js"></script>
    <!-- Specific-->
    <script src="js/plugins/forms/validation/jquery.validate.min.js"></script>
    <script src="js/plugins/forms/validation/jquery.validate.additional.min.js"></script>
    <script src="js/calls/page.login.js"></script>
  </body>
</html>