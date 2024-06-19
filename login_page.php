<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
<title>Humans Softtech</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
	<script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
	<script src="bootstrap-5.3.3-dist/js/jquary.js"></script>
    <style>
    .nav-item:hover .dropdown-menu {
      display: block;
    }
  </style>
	
</head>

<body style="background-size: 100%">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
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
      
      <li class="nav-item dropdown">
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
		   </ul>
      </li>
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
	<br><br><br>
	<div style="background-color: #DDDADA"  class="row">
<div class="container col-sm-8" align="justify" >
  <h2>LOGIN_PAGE</h2>
  <form action="company.php">
    <div class="form-group col-4">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group col-4">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox col-4">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
		</div>
	<div class="col-sm-4">
	
	</div>
	
</body>
</html>