<?php
if(!isset($_SESSION['admin'])){}
require "database_connect.php";
$fetch = "SELECT * FROM data WHERE id = '$_GET[id]' LIMIT 1";
$error;
$exec = mysqli_query($conn, $fetch);
if (!$exec) {
	$error = "Database failed";
}
$numRows = mysqli_num_rows($exec);
if ($numRows > 0) {
	while ($row = mysqli_fetch_assoc($exec)) {
		$id = $row['id'];
		$body = $row['content'];
		$title = $row['title'];
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccure-html.dreamguystech.com/template/doctor-add-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 17:04:34 GMT -->

<head>
	<meta charset="utf-8">
	<title>Edit Blog - <?php echo $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

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
								<li class="breadcrumb-item active" aria-current="page">Add Blog</li>
							</ol>
						</nav>
						<h2 class="breadcrumb-title">Edit Blog</h2>

					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->

		<!-- Page Content -->
		<div class="content">
			<div class="container-fluid">
				<?php if (isset($errors[0])) {
					$error = <<<EOT
									<div class = "alert alert-danger" role = "alert">
										$errors[0]
									</div>
								EOT;
					echo $error;
				}
				?>
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
							<!-- <div class="row mb-5">
									<div class="col-auto">
										<a class="btn btn-primary btn-sm" href="doctor-add-blog.html"><i class="fas fa-plus mr-1"></i> Add Blog</a>
									</div>
								</div> -->

							<!-- Add Blog -->
							<div class="card">
								<div class="card-body">
									<h3 class="pb-3">Edit Blog</h3>

									<form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service" action="editBlogConfig.php">
										<input type="hidden" name="csrf_token_name" value="0146f123a4c7ae94253b39bca6bd5a5e">

										<div class="service-fields mb-3">
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<label>Blog Title <span class="text-danger">*</span></label>
														<input type="hidden" name="id" id="service_id" value="<?php echo $id; ?>">
														<input class="form-control" name="title" value="<?php echo $title ?>" type="text" name="service_title" id="service_title" placeholder="Bitcoin - The Future Or The Present" required>
													</div>
												</div>
											</div>
										</div>
										<div class="service-fields mb-3">
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<label>Content <span class="text-danger">*</span></label>
														<textarea id="about" value="<?php echo $body ?>" class="form-control service-desc" name="body" required></textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="submit-section">
											<button class="btn btn-primary submit-btn" name="formUpdate" type="submit" value="submit">Submit</button>
										</div>
									</form>

								</div>
							</div>
							<!-- /Add Blog -->

						</div>
					</div>
					<?php if (isset($error)) {
						$error = <<<EOT
										<div class = "alert alert-danger" role = "alert">
											$error
										</div>
									EOT;
						echo $error;
					}
					?>
					<?php
					if (isset($_GET['info'])) {
						$string = <<<EOT
											<div class="alert alert-success" role = "alert">
												POST HAS BEEN SUCCESSFUL
											</div>
										EOT;
						echo $string;
					}
					?>

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