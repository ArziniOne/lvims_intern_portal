<!doctype html>
<html lang="en">
<?php
include 'constants/settings.php';
include 'constants/check-login.php';
?>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Register</title>
	<meta name="description" content="LA VERDAD INTERNSHIP MANAGEMENT SYSTEM" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="Aljon Isip">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
	<meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="500" />
	<meta property="og:image:height" content="300" />
	<meta property="og:image:alt" content="LVIMS" />
	<meta property="og:description" content="LA VERDAD INTERNSHIP MANAGEMENT SYSTEM" />

	<link rel="shortcut icon" href="images/ico/logo.png">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">

	<link rel="stylesheet" href="icons/linearicons/style.css">
	<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="icons/rivolicons/style.css">
	<link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

	<link href="css/style.css" rel="stylesheet">

</head>


<body class="not-transparent-header">
	<div class="container-wrapper">
		<header id="header">
			<!-- ------------------------------------------ NAVIGATION BAR --------------------------------------------- -->
			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">

					<div class="logo-wrapper">
						<div class="logo">
							<a href="./"><img src="images/ico/headlogo.png" alt="Logo" style="width:100px;" /></a>
						</div>
					</div>

					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">

						<ul class="nav navbar-nav" id="responsive-menu">

							<li>

								<a href="./">Home</a>

							</li>

							<li>
								<a href="job-list.php">Internship Programs</a>

							</li>

							<li>
								<a href="employers.php">Industry Partners</a>
							</li>

							<li>
								<a href="employees.php">Interns	</a>
							</li>

							<li>
								<a href="contact.php">Contact Us</a>
							</li>

						</ul>

					</div>

					<div class="nav-mini-wrapper">
						<ul class="nav-mini sign-in">
							<li><a href="login.php">login</a></li>
							<li><a data-toggle="modal" href="#registerModal">register</a></li>
						</ul>
					</div>

				</div>

				<div id="slicknav-mobile"></div>

			</nav>
			<!-- ------------------------------------------ REGISTRATION PROMPT --------------------------------------------- -->
			<div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Create your account for free</h4>
				</div>

				<div class="modal-body">

					<div class="row gap-20">

						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">Register as Industry Partner</a>
						</div>
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employee" class="btn btn-facebook btn-block mb-5-xs">Register as Intern</a>
						</div>

					</div>

				</div>

				<div class="modal-footer text-center">
					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				</div>

			</div>
		</header>

		<div class="main-wrapper">
			<!-- ------------------------------------------ BREADCRUMBS --------------------------------------------- -->
			<div class="breadcrumb-wrapper">
				<div class="container">
					<ol class="breadcrumb-list">
						<li><a href="./">Home</a></li>
						<li><span>Register</span></li>
					</ol>

				</div>

			</div>

			<!-- ------------------------------------------ LOGIN CONTAINER --------------------------------------------- -->
			<div class="login-container-wrapper">
				<div class="container">

					<div class="row">

						<div class="col-md-10 col-md-offset-1">

							<div class="row">

								<div class="col-sm-6 col-sm-offset-3">

									<?php

									if (isset($_GET['p'])) {
										$position = $_GET['p'];
										if ($position == "Employee") {
											include 'constants/draw-employee.php';
										} else {
										}
										if ($position == "Employer") {
											include 'constants/draw-employer.php';
										} else {
										}
									} else {
									}

									?>


								</div>

							</div>

						</div>

					</div>

				</div>

			</div>
			<!-- ------------------------------------------ FOOTER SECTION --------------------------------------------- -->
			<footer class="footer-wrapper">
				<!-- ------------------------------------------ UPPER FOOTER --------------------------------------------- -->
				<div class="main-footer">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-9">
								<div class="row">

									<div class="col-sm-6 col-md-4">

										<div class="footer-about-us">
											<h5 class="footer-title">About LVIMS</h5>
											<p>LVIMS is a job portal, online internship management system developed by the group of Aljon Isip for their capstone project in 2021 to 2022.</p>

										</div>

									</div>

									<div class="col-sm-6 col-md-5 mt-30-xs">
										<h5 class="footer-title">Quick Links</h5>
										<ul class="footer-menu clearfix">
											<li><a href="./">Home</a></li>
											<li><a href="job-list.php">Internship Programs</a></li>
											<li><a href="employers.php">Industry Partners</a></li>
											<li><a href="employees.php">Interns</a></li>
											<li><a href="contact.php">Contact Us</a></li>
											<li><a href="#">Go to top</a></li>

										</ul>

									</div>

								</div>

							</div>

							<div class="col-sm-12 col-md-3 mt-30-sm">

								<h5 class="footer-title">LVCC Contact</h5>

								<p>Address : McArthur Highway 2009 Apalit, Philippines</p>
								<p>Email : <a href="mailto:info@laverdad.edu.ph">info@laverdad.edu.ph</a></p>
								<p>Phone : <a href="tel:(045) 436 1487">(045) 436 1487</a></p>


							</div>


						</div>

					</div>

				</div>
				<!-- ------------------------------------------ BOTTOM FOOTER --------------------------------------------- -->
				<div class="bottom-footer">

					<div class="container">

						<div class="row">

							<div class="col-sm-4 col-md-4">

								<p class="copy-right">&#169; Copyright <?php echo date('Y'); ?> LVIMS</p>

							</div>

							<div class="col-sm-4 col-md-4">

								<ul class="bottom-footer-menu">
									<li><a>Developed by Aljon Isip</a></li>
								</ul>

							</div>

							<div class="col-sm-4 col-md-4">
								<ul class="bottom-footer-menu for-social">
									<li><a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
									<li><a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
									<li><a href="<?php echo "$ig"; ?>"><i class="ri ri-instagram" data-toggle="tooltip" data-placement="top" title="instagram"></i></a></li>
								</ul>
							</div>

						</div>

					</div>

				</div>
			</footer>
		</div>
	</div>
	<script type="text/javascript">
		function val() {
			if (frm.password.value == "") {
				alert("Enter the Password.");
				frm.password.focus();
				return false;
			}
			if ((frm.password.value).length < 8) {
				alert("Password should be minimum 8 characters.");
				frm.password.focus();
				return false;
			}

			if ((frm.password.value).length > 20) {
				alert("Password should be maximum 20 characters.");
				frm.password.focus();
				return false;
			}

			if (frm.confirmpassword.value == "") {
				alert("Enter the Confirmation Password.");
				return false;
			}
			if (frm.confirmpassword.value != frm.password.value) {
				alert("Password confirmation does not match.");
				return false;
			}

			return true;
		}
	</script>

	<div id="back-to-top">
		<a href="#"><i class="ion-ios-arrow-up"></i></a>
	</div>

	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
	<script type="text/javascript" src="js/bootstrap-modal.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
	<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
	<script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
	<script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-select.js"></script>
	<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
	<script type="text/javascript" src="js/handlebars.min.js"></script>
	<script type="text/javascript" src="js/jquery.countimator.js"></script>
	<script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/easy-ticker.js"></script>
	<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
	<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
	<script type="text/javascript" src="js/customs.js"></script>


</body>

</html>