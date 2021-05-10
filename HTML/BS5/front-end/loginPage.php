<?php

require "login.php"

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Login | Thelpis Capital</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">
     
  </head>

<body class="theme-warning">
	
	
	<header>
		<nav hidden class="nav-white nav-transparent dark-overlay">
			<div class="nav-header">
				<a href="index3.html" class="brand">
					<li>Thelpis Capital</li>
				</a>
				<button class="toggle-bar">
					<span class="ti-menu"></span>
				</button>	
			</div>								
			<ul class="menu">				
		
						<li><a href="index3.html">Home </a></li>		
						<li><a href="currency_converter.html">Currency Converter</a></li>
						<li><a href="live_coin.html">Live Coin Chart</a></li>
						<li>
							<a onclick="addElement();">Buy &amp; Sell</a>
							<div id="confirm">
								<div class="message" style="text-align: center; padding-top: 50px; font-size: 16px;">You are about to be redirected to Paxful.</div><br>
								<button class="yes"><a href="https://paxful.com" class="px-10 pt-15 pb-10" target="_blank"><div class="btn btn-primary py-5">Yes, redirect</div></a></button>
								<button class="yes"><a href="index3.html" class="px-10 pt-15 pb-10"><div class="btn btn-primary py-5">Stay on Page</div></a></button>
							</div>
						</li>
				<li class="megamenu">
					<a href="#">User Pages</a>
					<div class="megamenu-content">
						<div class="row">
							<div class="col-lg-3 col-3">
								<ul class="list-group">
									<li><h4 class="menu-title">User Pages</h4></li>
									<li><a href="faqs.html"><i class="ti-arrow-circle-right me-10"></i>FAQs</a></li>
									<li><a href="membership.html"><i class="ti-arrow-circle-right me-10"></i>Membership</a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-3">
								<ul class="list-group">
									<li><h4 class="menu-title">Academy</h4></li>
									<li><a href="academy.html"><i class="ti-arrow-circle-right me-10"></i>Academy</a></li>
									<li><a href="loginPage.php"><i class="ti-arrow-circle-right me-10"></i>Login</a></li>
									<li><a href="registerPage.php"><i class="ti-arrow-circle-right me-10"></i>Register</a></li>
									<!--<li><a href="forgot_pass.html"><i class="ti-arrow-circle-right me-10"></i>Forgot Password</a></li> -->
								</ul>
							</div>
								
						</div>
					</div>
				</li>	
				<!-- <li>
					<a href="blog_grid_2.html">Blog</a>
				</li>
				<li>
					<a href="contact_us.html">Contact</a>
				</li> -->
				<li><a href="about.html"><i class="ti-arrow-circle-right me-10"></i>About Us</a></li>

			</ul>
			<!--<ul class="attributes">
				<li class="d-md-block d-none"><a href="registerPage.php" class="px-10 pt-15 pb-10"><div class="btn btn-primary py-5">Register Now</div></a></li>
				<li><a href="#" class="toggle-search-fullscreen"><span class="ti-search"></span></a></li>
				
			</ul>-->

			<div class="wrap-search-fullscreen">
				<div class="container">
					<button class="close-search"><span class="ti-close"></span></button>
					<input type="text" placeholder="Search..." />
				</div>
			</div>
		</nav>
	</header>
	<!---page Title -->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Login</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Login</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->
	
	<section class="py-50">
		<div class="container">
			<div class="row justify-content-center g-0">
				<div class="col-lg-5 col-md-5 col-12">
					<div class="box box-body">
						<div class="content-top-agile pb-0 pt-20">
							<h2 class="text-primary">Let's Get Started</h2>
							<p class="mb-0">Sign in to continue to CryptoCurrency.</p>							
						</div>
						<div class="p-40">
							<form action="loginPage.php" method="POST">
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
										<input name = "userMail" type="email" class="form-control ps-15 bg-transparent" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
										<input name = "userPass" type="password" class="form-control ps-15 bg-transparent" placeholder="Password">
									</div>
								</div>
								  <div class="row">
									<div class="col-6">
									  <div class="checkbox ms-5">
										<input type="checkbox" id="basic_checkbox_1">
										<label for="basic_checkbox_1" class="form-label">Remember Me</label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-6">
									 <div class="fog-pwd text-end">
										<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot password?</a><br>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" name = "loginSubmit" class="btn btn-info w-p100 mt-15">SIGN IN</button>
									  <h5></h5>
									  <h5 style="text-decoration: underline; color: red;"><?php echo $errors; ?></h5>
									</div>
									<!-- /.col -->
								  </div>
							</form>	
							<div class="text-center">
								<p class="mt-15 mb-0">Don't have an account? <a href="registerPage.php" class="text-warning ms-5">Register</a></p>
							</div>	
						</div>
					</div>								

					<div class="text-center">
					  <p class="mt-20">- Login With -</p>
					  <p class="d-flex gap-items-2 mb-0 justify-content-center">
						  <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
						  <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
						  <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
						</p>	
					</div>
				</div>
			</div>
		</div>
	</section>	
	<!--<section class="bg-light py-30">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-9 col-12">
					<div class="text-md-start text-center">
						<h2><strong> CryptoCurrency: </strong> fully responsive template in the market</h2>
						<p class="mb-0">Exclusive multi-purpose lightweight responsive with powerful features.</p>
					</div>
				</div>
				<div class="col-md-3 col-12">					
					 <div class="text-md-end text-center mt-30 mt-md-0">
						<a class="btn btn-primary" href="#">Purchase Now</a> 
					 </div>
				</div>
			</div>
		</div>
	</section>-->
	
	<footer class="footer_three">
		<div class="footer-top bg-dark3 pt-50">
            <div class="container">
                <div class="row">
					<div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title">About</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
							<p class="text-capitalize mb-20">Bringing the crypto world closer to home, ensuring you're included in this market.<br><br>Help us help you. Register today.</p>
                        </div>
                    </div>											
					<div class="col-lg-3 col-12">
						<div class="widget">
							<h4 class="footer-title">Contact Info</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
							<ul class="list list-unstyled mb-30">
								<li> <i class="fa fa-map-marker"></i> 1 University Drive, Berekuso<br>Eastern Region, Ghana</li>
								<li> <i class="fa fa-phone"></i> <span>+233550861693 </span><br><span>+233550487456 </span></li>
								<li> <i class="fa fa-envelope"></i> <span>thelpishelpdesk@gmail.com </span></li>
							</ul>
						</div>
					</div>					
					<div class="col-12 col-lg-3">
                        <div class="widget footer_widget clearfix">
                            <h4 class="footer-title">Our Gallery</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
                            <ul class="list-unstyled">
								<li><a href="index3.html">Home</a></li>
								<li><a href="blog_grid_2.html">Blog</a></li>
								<li><a href="contact_us.html">Contact</a></li>
							</ul>
                        </div>
                    </div>
					<div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title">Accept Card Payments</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
							<ul class="payment-icon list-unstyled d-flex gap-items-1">
								<li class="ps-0">
									<a href="javascript:;"><i class="fa fa-cc-amex" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;"><i class="fa fa-cc-visa" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a>
								</li>
							</ul>
                            <h4 class="footer-title mt-20">Newsletter</h4>
							<hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto w-60">
                            <div class="mb-20">
								<form class="" action="" method="post">
									<div class="input-group">
										<input name="email" required="required" class="form-control" placeholder="Your Email Address" type="email">
										<button name="submit" value="Submit" type="submit" class="btn btn-primary"> <i class="fa fa-envelope"></i> </button>
									</div>
								</form>
							</div>
                        </div>
                    </div>
                </div>				
            </div>
        </div>		
		<div class="footer-bottom bg-dark3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-12 text-md-start text-center"> © 2021 <span class="text-white"> Thelpis Capital</span>  All Rights Reserved.</div>
					<div class="col-md-6 mt-md-0 mt-20">
						<div class="social-icons">
							<ul class="list-unstyled d-flex gap-items-1 justify-content-md-end justify-content-center">
								<li><a href="https://facebook.com/thelpis" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
                </div>
            </div>
        </div>
	</footer>
	
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>	
	<!-- Corenav Master JavaScript -->
    <script src="corenav-master/coreNavigation-1.1.3.js"></script>
    <script src="js/nav.js"></script>
	<script src="../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
	
	<!-- CryptoCurrency front end -->
	<script src="js/template.js"></script>
	
	
	
</body>
</html>
