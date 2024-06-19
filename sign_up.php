<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Humans Softtech</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
	<script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-5.3.3-dist/js/jquary.js"></script>
	<style>
	
	

    .pattern-bg {
        overflow: hidden;
        width: 100vw;
        height: 100vh;
        z-index: -1;
        position: fixed;
        background-position: center center;
        background-size: 100% auto;
        background-image: url('/img/bg/background.svg');
    }
	.nav-item:hover .dropdown-menu {
      display: block;
	}
  .jumbotron {
	background-color: #CCCCCC;
	color: #000;
	padding: 100px 25px;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
	background-color: #000000;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
	border: 1px solid #f4511e;
	background-color: #CCC !important;
	color: #f4511e;
  }
  .panel-heading {
	color: #fff !important;
	background-color: #CCCCCC !important;
	padding: 25px;
	border-bottom: 1px solid transparent;
	border-top-left-radius: 0px;
	border-top-right-radius: 0px;
	border-bottom-left-radius: 0px;
	border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
	margin: 15px 0;
	background-color: #FFFFFF;
	color: #fff;
  }
  .navbar {
	margin-bottom: 0;
	background-color: #FFFFFF;
	z-index: 9999;
	border: 0;
	font-size: 16px !important;
	line-height: 1.42857143 !important;
	letter-spacing: 4px;
	border-radius: 0;
  }
  .navbar li a, .navbar .navbar-brand {
	color: #000 !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
	color: #000000 !important;
	
	background-color: #FFF !important;
  }
  .navbar-default .navbar-toggle {
	border-color: #FFF;
	color:black; !important;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
    </style>
</head>
<body style="background-size:100%">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="alignment-adjust: text-before-edge">
  <a class="navbar-brand" href="#">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav navbar-right">
      <li class="nav-item active">
        <a class="nav-link" href="compress_image.php">COMPRESS IMAGE <span class="sr-only"></span></a>
      </li>
		 <li class="nav-item active">
        <a class="nav-link" href="resize_image.php">RESIZE IMAGE <span class="sr-only"></span></a>
      </li>
		 <li class="nav-item active">
        <a class="nav-link" href="crop_image.php">CROP IMAGE <span class="sr-only"></span></a>
      </li>
		 <li class="nav-item active">
        <a class="nav-link" href="convert_jpg.php">CONVERT TO JPG <span class="sr-only"></span></a>
      </li>
		 <li class="nav-item active">
        <a class="nav-link" href="photo_editor.php">PHOTO EDITOR <span class="sr-only"></span></a>
      </li>
      
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MORE TOOLS
          
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">OPTIMIZE</a>
				<!--<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Compress Image</a>
					<a class="dropdown-item" href="#">upscale</a>
					<a class="dropdown-item" href="#">Remove Background</a>
			    </div>-->
          <a class="dropdown-item" href="#">CREATE</a>
		  <a class="dropdown-item" href="#">MODIFY</a>
          <a class="dropdown-item" href="#">CONVERT</a>
		  <a class="dropdown-item" href="#">SECURITY</a>
         
          
        </div>
        </li>
    </ul>
     
		<ul class="nav navbar-nav navbar-right">
		<li class="nav-item active" >
        <a class="nav-link glyphicon glyphicon-user" href="login_page.php">LOGIN <span class="sr-only"></span></a>
      </li>
		<li class="nav-item active">
        <a class="nav-link" href="sign_up.php">SIGN UP<span class="sr-only"></span></a>
      </li>
			</ul>
      <!--<li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>-->
   
  </div>
</nav>
	
	
	
	
<!-- sign up page part -->
	
	
	<!--<div class="row" align="center">
		<div class="col-sm-9">
			<div class="auth_info">
				<div class="auth_box">
					<a class="brand" href="" title="iLoveIMG" >
					</a>
					<h2 class="form-title">Create new account</h2>
				</div>
			</div>	
		</div>
		<div class="col-sm-3">
		
		</div>-->
		<div class="auth__box">
            
<a class="brand" href="/" title="iLoveIMG">
    <img src="/img/iloveimg.svg" alt="iLoveIMG">
</a>                <h2 class="form__title">Create new account</h2>
<div class="social-auth">
    <div id="w0" class="social-auth--big-buttons"><ul class="auth-clients"><li><a class="facebook auth-link" href="/auth/auth?authclient=facebook" title="Facebook"><span class="auth-icon facebook"></span><span class="auth-link__text">Facebook</span></a></li><li><a class="google auth-link" href="/auth/auth?authclient=google" title="Google"><span class="auth-icon google"></span><span class="auth-link__text">Google</span></a></li><li><a class="sso auth-link" href="/auth/auth?authclient=sso" title="SSO"><span class="auth-icon sso"></span><span class="auth-link__text">Sso</span></a></li></ul></div></div>

    

<form id="signupForm" action="/register" method="post">
<input type="hidden" name="_csrf-ilovepdf" value="wX79LhT-OhOXLDpNB0fFyJlaPgtUEK7FLOkytB52VRjxNppDYasNWvtuajo3AfyB6D5yPQVnxI9gpUWFKykFfQ==">    <div class="form__group">
        <div class="field-name required" style="display: block;">
<div class="input--icon input--user"><input type="text" id="name" class="input" name="SignupForm[name]" placeholder="Name" autofocus="" aria-required="true"></div><div class="help-block"></div>
</div>    </div>
    <div class="form__group">
        <div class="field-signupEmail required" style="display: block;">
<div class="input--icon input--email"><input type="text" id="signupEmail" class="input" name="SignupForm[email]" placeholder="Email" aria-required="true"></div><div class="help-block"></div>
</div>    </div>
    <div class="form__group">
        <div class="field-password required" style="display: block;">
<div class="input--icon input--lock"><input type="password" id="password" class="input" name="SignupForm[password]" placeholder="Password" aria-required="true"></div><div class="help-block"></div>
</div>    </div>
<div class="field-signupform-timezone" style="display: block;">

<input type="hidden" id="signupform-timezone" class="form-control" name="SignupForm[timezone]" value="Asia/Calcutta">

<div class="help-block"></div>
</div>    <div class="form-actions">
        <button type="submit" data-loading-text="Checking..." class="btn" id="registerButton">
            Sign up <i class="m-icon-swapright m-icon-white"></i>
        </button>
    </div>
    <div class="create-account">
        <p>
            Already member? <a href="https://www.iloveimg.com/login" id="goLogin">Log in</a>
        </p>
    </div>
    <div class="form-extra-info small">
        By creating an account, you agree to iLovePDF <a href="/help/terms" class="termsLink">Terms of Service</a> and <a href="/help/privacy" class="legalLink">Privacy Policy</a>    </div>

    <script>
        // For inline register page; This logic is also present in "AbstractAuthState"
        (function(){
            function defer(method) {
                if (window.Cookies) {
                    method();
                } else {
                    setTimeout(function () {
                        defer(method)
                    }, 50);
                }
            }
            defer(function(){
                if(window.Intl && window.Intl.DateTimeFormat()){
                    var tzNewValue = window.Intl.DateTimeFormat().resolvedOptions().timeZone;
                    if(tzNewValue){
                        window.Cookies.set('auth_tz', tzNewValue);
                        var tzElem =  document.querySelector("#signupform-timezone");
                        if(tzElem) tzElem.value = tzNewValue;
                    }
                }
            });
        })()
    </script>
</form>        </div>
  
	</div>
</body>
</html>