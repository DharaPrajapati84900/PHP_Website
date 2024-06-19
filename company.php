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

<body background="images/background.jpg" style="background-size:100%">
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
	
<div class="jumbotron text-center">
  <h1>Every tool you could want to edit images in bulk</h1> 
  <p style="font-size:22px">You online photo editor is here and forever free!</p> 
  <br /><br />
  <form>
    <div class="container">
  <div class="row ">
    <div class="col-sm-3 border p-5 ">
	 <h3>Compress IMAGE</h3>
		<p>Compress JPG, PNG, SVG, and GIFs while saving space and maintaining quality.</p>
     
    </div>
    <div class="col-sm-3  border p-5">
      <h3>Resize IMAGE</h3>
     <p> Define your dimensions by percent or pixel, and resize your JPG, PNG, SVG, and GIF image. </p>
      
    </div>
    <div class="col-sm-3 border p-5">
      <h3>Crop IMAGE</h3>        
      <p>Crop JPG, PNG, or GIFs with ease; choose pixels to define your rectangle or use our visual editor.</p>
    </div>
	  <div class="col-sm-3 border p-5">
      <h3>Connvert to JPG</h3>        
      <p>Turn PNG, GIF, PSD, SVG, WEBP, HEIC, or RAW formate images to JPG in bulk with ease.</p>
    </div>
  </div>
	
	
	<div class="row">
    <div id="box" class="col-sm-3 border  p-5">
      <h3>Convert from JPG</h3>
		<p>Turn JPG images to PNG and GIF. Choose several JPGs to create an animated GIF in seconds ! </p>
    </div>
    <div class="col-sm-3 border p-5">
      <h3>Photo editor</h3>
     <p> Spice up your pictures with text, effects, frames or stickers. Simple editing tools for your images needs. </p>
    </div>
    <div class="col-sm-3 border p-5">
      <h3>Upscale Image</h3>        
      <p>Enlarge your images with high resolution. Easily increase the size of your JPG and PNG images while maintaining visual quality.</p>
    </div>
	  <div class="col-sm-3 border p-5">
      <h3>Remove Background</h3>        
      <p>Quickly remove image backgrounds with high accuracy. Instantly detect objects and cut out backgrounds with ease.</p>
    </div>
  </div>
	
	
	<div class="row">
    <div class="col-sm-3 border p-5">
      <h3>Watermark IMAGE</h3>
		<p>Stamp and image or text over your images in seconds. Choose the typography, transparency and position.</p>
    </div>
    <div class="col-sm-3 border p-5">
      <h3>Meme generator</h3>
     <p> Create your memes online with ease. Caption meme images or upload your pictures to make custom memes. </p>
    </div>
    <div class="col-sm-3 border p-5">
      <h3>Rotate IMAGE</h3>        
      <p>Rotate many images JPG, PNG or GIF at same time. Choose to rotate only landscape or portrait images !</p>
    </div>
	  <div class="col-sm-3 border p-5">
      <h3>HTML to IMAGE</h3>        
      <p>Convert webpages in HTML to JPG or SVG copy and paste the URL of the page you want and convert it to IMAGE with a click.</p>
    </div>
  </div>
<div 	class="row">
    <div class="col-sm-3 border p-5">
      <h3>Blur face</h3>
		<p>Easily blur out faces in photos. You can also blur licence plates and other objects to hide private information.</p>

</div>
	</div>
	</div>
	</div>
    
    
    
    
    <!-- 2nd part of the page-->
    
     <div class="jumbotron text-center" style="background-color:#FFFFFF; color:#000000">
  <h1>Photo editing tools mode for everyone</h1> 
  
    <div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <h3>Optimize web images</h3>
      
           
      <p>Easily resize and compress multiple photos at once with pixel perfect accuracy. Instantly transform your online photos & images for web, social media and e-commerce.</p>
      
    </div>
     <div class="col-sm-4">
      <h3>Batch edit photos</h3>
           
      <p>With batch processing, you can convert multiple photos at the same time. iLoveIMG supports PNG, JPG, GIF, WEBP, HEIC, RAW conversions, and more. Mass convert files up to 1GB per task with Premium.</p>
      
    </div>
     <div class="col-sm-4">
      <h3>Edit Documents</h3>
           
      <p>iLovePDF is your number 1 web app to help you edit PDF with ease. Enjoy all the tools you need to work efficiently with your documents.</p>
      
    </div>
   
  </div>
</div>

<!--<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum..</h4>      
      <p><strong>VISION:</strong> Our vision Lorem ipsum..</p>
    </div>
  </div>
</div>-->



<!-- 3rd part of the page -->
	
 <div class="jumbotron text-center">
  <div class="container-fluid">

  <h1>
  		<div class="title1 text-center">
        	Your trusted online image editor, loved by users worldwide
        </div>
   </h1>
  
  <br />
 		<div class="subtitle1 text-center">
        	iLoveIMG is your simple solution for editing images online. Access all the tools you need to enhance your images easily, straight from the web, with 100% security.
          </div>
  
  </div>
  <div class="row">
			<div class="col-sm-6">
        		<img width="100" height="50" src="images/ISO_logo_1.jpg" alt="ISO27001" />
            </div>
            <div class="col-sm-6">
            	<img width="100" height="50" src="images/ssl_encrypted_logo.jpg" alt="secure connection Http"/>
            	
       		</div>  
  </div>
  
 </div>
 
 
 
 <!-- 4th part if page -->
 
 <div class="container-fluid" style="color:#FFF; background-color:#333333"> 
 	<div class="row">
	    	<div class="col-sm-6" >
        <h1>Get more with Premium</h1>
        
        <p> Edit multiple images faster with batch file processing, convert to several image formats in high resolution and enjoy a web experience free of ads.</p> <br />
        
        <button class="btn btn-default btn-lg" fdprocessedid="s1z54" style="background-color:#FFCC00; color:#000" style="alignment-baseline:after-edge">Get Premium</button>
        </div>
        <div class="col-sm-6">


        
        <svg width="431" height="301" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="78.708" height="30.991" rx="4" transform="rotate(-45.016 396.35 -335.48)" stroke="#B7D2FF"></rect><path d="M406.049 40.275 298.57 12.095c-5.102-1.34-10.319 1.738-11.655 6.873L225.7 254.361c-1.336 5.135 1.718 10.385 6.82 11.713l107.479 28.166c5.102 1.342 10.319-1.737 11.655-6.872l61.215-235.38c1.336-5.135-1.718-10.385-6.82-11.713Z" fill="#fff"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M313.263 31.448c8.5 2.222 13.59 10.947 11.376 19.48-2.214 8.532-10.905 13.642-19.404 11.42-8.5-2.223-13.589-10.948-11.375-19.48 2.226-8.533 10.904-13.643 19.403-11.42Z" fill="#FFC233"></path><path fill-rule="evenodd" clip-rule="evenodd" d="m301.128 47.249.777-7.204c.025-.166.152-.281.292-.269.051 0 .102.026.14.064l3.41 3.283c.102.09.242.077.344-.026l5.204-5.62c.102-.115.267-.115.357 0a.252.252 0 0 1 .05.102l2.049 7.537c.038.14.153.217.28.179l4.683-1.176c.14-.038.267.064.292.218a.257.257 0 0 1-.025.166l-2.85 6.667c-.051.141-.191.218-.306.18l-14.519-3.807c-.114-.013-.19-.14-.178-.294ZM300.681 51.069a1.069 1.069 0 0 1 1.298-.767l11.974 3.142c.572.154.903.729.763 1.303a1.069 1.069 0 0 1-1.298.767l-11.974-3.143a1.07 1.07 0 0 1-.763-1.302Z" fill="#292931"></path><path d="m357.725 193.048-94.679-24.819a2.083 2.083 0 0 0-2.544 1.507l-2.418 9.299a2.11 2.11 0 0 0 1.489 2.568l94.678 24.819a2.084 2.084 0 0 0 2.545-1.508l2.417-9.299a2.089 2.089 0 0 0-1.488-2.567ZM363.777 169.813l-94.678-24.82a2.086 2.086 0 0 0-2.545 1.508l-2.417 9.299a2.108 2.108 0 0 0 1.488 2.567l94.679 24.82a2.086 2.086 0 0 0 2.545-1.508l2.417-9.299a2.108 2.108 0 0 0-1.489-2.567ZM351.982 215.133l-94.678-24.819a2.084 2.084 0 0 0-2.545 1.507l-2.417 9.299a2.11 2.11 0 0 0 1.489 2.568l94.678 24.819a2.084 2.084 0 0 0 2.545-1.507l2.417-9.299a2.09 2.09 0 0 0-1.489-2.568Z" fill="#F5F5FA"></path><path d="m335.582 47.338 53.517 14.026" stroke="url(#a)" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"></path><path d="m332.43 59.423 45.488 11.917" stroke="url(#b)" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"></path><path d="m322.398 85.775-33.476-8.776c-2.227-.587-4.517.767-5.102 3.002l-5.446 20.91c-.585 2.249.751 4.548 2.99 5.123l33.476 8.775c2.227.588 4.517-.766 5.103-3.002l5.433-20.91a4.175 4.175 0 0 0-2.978-5.122ZM376.668 99.992l-33.489-8.776c-2.227-.587-4.517.767-5.103 3.015l-5.433 20.91c-.585 2.248.751 4.548 2.991 5.122l33.489 8.776c2.226.587 4.517-.767 5.102-3.002l5.433-20.91c.585-2.249-.751-4.548-2.99-5.135ZM368.742 146.347l-94.678-24.819a2.084 2.084 0 0 0-2.545 1.507l-2.417 9.3a2.108 2.108 0 0 0 1.488 2.567l94.679 24.819a2.083 2.083 0 0 0 2.544-1.507l2.418-9.299a2.1 2.1 0 0 0-1.489-2.568Z" fill="#F5F5FA"></path><path transform="rotate(-8.18 557.254 -21.66) skewX(-.001)" fill="#E3F0FC" stroke="#E3F0FC" d="M.566.424h14.056v14.041H.566z"></path><path transform="rotate(-8.172 1638.602 -99.22) skewX(.015)" fill="#E3F0FC" stroke="#E3F0FC" d="M.566.424h14.056v14.041H.566z"></path><path transform="rotate(-8.172 459.44 -1398.555) skewX(.015)" fill="#E3F0FC" stroke="#E3F0FC" d="M.566.424h14.056v14.041H.566z"></path><path transform="rotate(-8.172 1540.24 -1476.053) skewX(.015)" fill="#E3F0FC" stroke="#E3F0FC" d="M.566.424h14.056v14.041H.566z"></path><path transform="rotate(-8.172 609.711 -88.758) skewX(.015)" stroke="#E3F0FC" stroke-width="1.5" d="M.849.636H194.06v152.925H.849z"></path><path d="M182.735 80.06 53.069 98.682a3.555 3.555 0 0 0-3.023 4.019l13.898 96.59a3.558 3.558 0 0 0 4.034 3.006l129.666-18.621a3.555 3.555 0 0 0 3.022-4.02l-13.897-96.59a3.558 3.558 0 0 0-4.034-3.006Z" fill="#86B3FE"></path><path d="m61.942 179.862 20.591-21.729a6.027 6.027 0 0 1 7.402-1.063l22.109 12.861c2.739 1.594 6.278.671 7.874-2.064l27.057-46.349c1.735-2.972 5.81-3.557 8.307-1.193l42.49 40.126c.46.432.761 1.009.852 1.635l4.525 31.454c.222 1.54-.863 2.968-2.416 3.191l-131.535 18.89a2.833 2.833 0 0 1-3.212-2.345l-4.782-31.046a2.799 2.799 0 0 1 .738-2.368ZM109.699 139.008c5.585-.802 9.468-5.933 8.673-11.459-.795-5.526-5.967-9.356-11.552-8.554-5.585.802-9.468 5.932-8.673 11.459.795 5.526 5.967 9.356 11.552 8.554ZM250.925 65.147a2 2 0 1 0 3.945-.661l-3.945.66Zm-66.047-50.469a2 2 0 0 0 .085 2.828l13.105 12.338a2 2 0 1 0 2.742-2.912l-11.649-10.968 10.968-11.65a2 2 0 0 0-2.912-2.741l-12.339 13.105Zm68.02 50.138c1.972-.33 1.972-.331 1.972-.333l-.001-.004-.002-.011a.443.443 0 0 1-.006-.036l-.023-.127a41.509 41.509 0 0 0-.477-2.142 61.349 61.349 0 0 0-1.812-5.892c-1.751-4.847-4.71-11.297-9.549-17.7-9.737-12.886-26.975-25.418-56.726-24.52l.12 3.997c28.352-.854 44.395 10.997 53.415 22.934 4.539 6.007 7.326 12.077 8.978 16.648a57.296 57.296 0 0 1 1.693 5.505 34.77 34.77 0 0 1 .425 1.902l.017.09.003.02v.002c0-.001 0-.002 1.973-.333ZM4.163 226.969a2 2 0 1 0-3.962.549l3.962-.549Zm74.16 60.092a2 2 0 0 0 0-2.829l-12.731-12.725a2 2 0 0 0-2.828 2.829l11.316 11.312-11.312 11.316a2 2 0 1 0 2.83 2.828l12.725-12.731ZM2.182 227.244c-1.981.274-1.98.276-1.98.277v.004l.002.013.006.04a19.61 19.61 0 0 0 .11.67c.08.453.205 1.108.387 1.936a70.625 70.625 0 0 0 1.88 6.812c1.846 5.614 5.02 13.108 10.34 20.611 10.695 15.086 29.962 30.047 63.982 30.04l-.001-4c-32.613.007-50.708-14.233-60.718-28.353-5.033-7.099-8.048-14.209-9.802-19.547a66.653 66.653 0 0 1-1.775-6.423 43.715 43.715 0 0 1-.43-2.223 12.124 12.124 0 0 1-.016-.107l-.004-.023v-.003l-1.981.276Z" fill="#E3F0FC"></path><path d="M61.661 51.134c0 5.262-4.265 9.528-9.527 9.528-5.261 0-9.527-4.266-9.527-9.528 0-5.261 4.266-9.527 9.527-9.527 5.262 0 9.527 4.266 9.527 9.527Z" stroke="#4D90FE"></path><rect width="29.145" height="29.145" rx="4" transform="rotate(-45.016 382.185 -10.32)" fill="#86B3FE"></rect><rect width="15.463" height="15.463" rx="4" transform="rotate(-45.016 138.938 -291.155)" fill="#B7D2FF"></rect><defs><linearGradient id="a" x1="331.982" y1="50.423" x2="392.718" y2="58.231" gradientUnits="userSpaceOnUse"><stop stop-color="#FFB400"></stop><stop offset=".53" stop-color="#FCEE21"></stop><stop offset="1" stop-color="#FFB400"></stop></linearGradient><linearGradient id="b" x1="330.801" y1="62.234" x2="379.586" y2="68.506" gradientUnits="userSpaceOnUse"><stop stop-color="#FFB400"></stop><stop offset=".53" stop-color="#FCEE21"></stop><stop offset="1" stop-color="#FFB400"></stop></linearGradient></defs></svg>
                           
        </div>
        
    </div>
 </div>
 
 <br /><br /><br /><br />
 
 
 <!-- 5th part of page -->
 <div class="container">
 
  <div class="row">
    <div class="col-sm-4" align="justify">
      	<h4 style="color:#0099FF"><u>ILOVEIMG</u></h4>
  		<a href="#" style="color:#000; text-decoration:none; font-size:20px">Home</a><br />
        <a href="#" style="color:#000; text-decoration:none; font-size:20px">Features</a><br />
        <a href="#" style="color:#000; text-decoration:none; font-size:20px">Pricing</a><br />
        <a href="#" style="color:#000; text-decoration:none; font-size:20px">Tools</a><br />
        <a href="#" style="color:#000; text-decoration:none; font-size:20px">FAQ</a>
    </div>
    
     <div class="col-sm-4" align="justify">
      	<h4 style="color:#0099FF"><u>PRODUCT</u></h4>
  		<a href="#" style="color:#000; text-decoration:none; font-size:20px">Developers</a><br />
        <a href="#" style="color:#000; text-decoration:none; font-size:20px">Wordpress Plugin</a><br />
        <a href="#" style="color:#000; text-decoration:none; font-size:20px">ilovepdf.com</a>
       
    </div>
    
     <div class="col-sm-4" align="justify">
      	<h4 style="color:#0099FF"><u>COMPANY</u></h4>
  		<a href="#" style="color:#000; text-decoration:none; font-size:20px">Our Story</a><br />
        <a href="#" style="color:#000; text-decoration:none; font-size:20px">Blog</a><br />
        <a href="#" style="color:#000; text-decoration:none; font-size:20px">Press</a><br />
        <a href="#" style="color:#000; text-decoration:none; font-size:20px">Legal & Privacy</a><br />
        <a href="#" style="color:#000; text-decoration:none; font-size:20px">Contact</a>
    </div>
   
    </div>
    
    </div>
    
    
    
    
    <!-- demo part -->
    
   
  </form>
</div>

</body>
</html>