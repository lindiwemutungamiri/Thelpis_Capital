<?php
if(!isset($_SESSION['admin'])){}
require "manageBlogConfig.php";

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccure-html.dreamguystech.com/template/doctor-add-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 17:04:34 GMT -->

<head>
    <meta charset="utf-8">
    <title>Add Blog - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Breadcrumb -->
        <div class="breadcrumb-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12 col-12">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Manage Blogs</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Manage Blogs</h2>

                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                        <!-- Profile Sidebar -->
                        <div class="profile-sidebar">
                            <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>
                                        <li>
                                            <a href="manageBlogs.php">
                                                <i class="fas fa-calendar-check"></i>
                                                <span>Manage Blogs</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="academyNana.php">
                                                <i class="fas fa-columns"></i>
                                                <span>View Blogs</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- /Profile Sidebar -->

                    </div>
                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="doc-review review-listing custom-edit-service">

                            <!-- ----------------------------------- SPECIAL ------------------------------- -->
                            <div class="row mb-5">
                                <div class="col-auto">
                                    <a class="btn btn-primary btn-sm" href="doctor-add-blog.html"><i class="fas fa-plus mr-1"></i> Add Blog</a>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Blog Title</th>
                                        <th scope="col">Edit Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($error)){
                                        echo "<h5>'$error'</h5>";
                                    }else{
                                        $count = 1;
                                        while($row = mysqli_fetch_assoc($exec)){
                                            echo <<<EOT
                                                <tr>
                                                    <th scope =row>$count</th>
                                                    <td>$row[title]</td>
                                                    <td><a href = deleteBlog.php?id=$row[id]><i class="fas fa-trash"></i></a> &amp <a href = editBlog.php?id=$row[id]><i class="fas fa-pencil-alt"></i></a>
                                                </tr>
                                            EOT;
                                            $count++;
                                        }
                                    }
                                    
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Page Content -->

    </div>
    <!-- /Model -->

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <!-- Sticky Sidebar JS -->
    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

</body>

<!-- Mirrored from doccure-html.dreamguystech.com/template/doctor-add-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 17:04:34 GMT -->

</html>