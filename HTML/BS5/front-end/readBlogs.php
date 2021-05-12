<?php require "readBlogConfig.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Academy | <?php echo $title ?></title>

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
                <li><a href="https://paxful.com/" target="_blank">Instant Buy & Sell</a></li>
                <li><a href="about.html"><i class="ti-arrow-circle-right me-10"></i>About Us</a></li>
                <li class="megamenu">
                    <a href="#">User Pages</a>
                    <div class="megamenu-content">
                        <div class="row">
                            <div class="col-lg-3 col-3">
                                <ul class="list-group">
                                    <li>
                                        <h4 class="menu-title">User Pages</h4>
                                    </li>
                                    <li><a href="faqs.html"><i class="ti-arrow-circle-right me-10"></i>FAQs</a></li>
                                    <li><a href="membership.html"><i class="ti-arrow-circle-right me-10"></i>Membership</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-3">
                                <ul class="list-group">
                                    <li>
                                        <h4 class="menu-title">Academy</h4>
                                    </li>
                                    <li><a href="academy.html"><i class="ti-arrow-circle-right me-10"></i>Academy</a></li>
                                    <li><a href="loginPage.php"><i class="ti-arrow-circle-right me-10"></i>Login</a></li>
                                    <li><a href="register_login.html"><i class="ti-arrow-circle-right me-10"></i>Register & Login</a></li>
                                    <li><a href="forgot_pass.html"><i class="ti-arrow-circle-right me-10"></i>Forgot Password</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="blog_grid_2.html">Blog</a>
                </li>
                <li>
                    <a href="contact_us.html">Contact</a>
                </li>
            </ul>
            <ul class="attributes">
                <li class="d-md-block d-none"><a href="registerPage.php" class="px-10 pt-15 pb-10">
                        <div class="btn btn-primary py-5">Register Now</div>
                    </a></li>
                <li><a href="#" class="toggle-search-fullscreen"><span class="ti-search"></span></a></li>

            </ul>

            <div class="wrap-search-fullscreen">
                <div class="container">
                    <button class="close-search"><span class="ti-close"></span></button>
                    <input type="text" placeholder="Search..." />
                </div>
            </div>
        </nav>
    </header>

    <!---page Title --->
    <section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="page-title text-white"><?php echo $title ?></h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="index3.html" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Academy</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-5">
        <p class = "mt-5 border-left border-dark pl-3"><?php echo $body; ?></p>
    </div>
</body>

</html>