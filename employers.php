<!doctype html>
<html lang="en">
<?php
require 'constants/settings.php';
require 'constants/check-login.php';

if (isset($_GET['page'])) {
	$page = $_GET['page'];
	if ($page == "" || $page == "1") {
		$page1 = 0;
		$page = 1;
	} else {
		$page1 = ($page * 16) - 16;
	}
} else {
	$page1 = 0;
	$page = 1;
}
?>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>LVIMS</title>
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

	<!-- ------------------------------------------ LOGO --------------------------------------------- -->
	<link rel="shortcut icon" href="images/logo.png">
	<!-- --------------------------------------------------------------------------------------------- -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
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

<style>
	.autofit2 {
		height: 100px;
		width: 100px;
		object-fit: cover;
	}
</style>

<body class="not-transparent-header">
	<div class="container-wrapper">
		<header id="header">
			<!-- ------------------------------------------ NAVIGATION BAR --------------------------------------------- -->
			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">
				<div class="container">
					<div class="logo-wrapper">
						<div class="logo">
							<a href="./"><img src="images/ico/headlogo.png" alt="Logo" style="width: 100px;" /></a>
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
								<a href="employees.php">Interns</a>
							</li>

							<li>
								<a href="contact.php">Contact Us</a>
							</li>

						</ul>

					</div>

					<div class="nav-mini-wrapper">
						<ul class="nav-mini sign-in">
							<?php
							if ($user_online == true) {
								print '
						    <li><a href="logout.php">logout</a></li>
							<li><a href="' . $myrole . '">Profile</a></li>';
							} else {
								print '
							<li><a href="login.php">login</a></li>
							<li><a data-toggle="modal" href="#registerModal">register</a></li>';
							}

							?>

						</ul>
					</div>

				</div>

				<div id="slicknav-mobile"></div>

			</nav>

			<!-- ------------------------------------------ REGISTRATION TAB --------------------------------------------- -->
			<div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Create your account</h4>
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
			<!-- ------------------------------------------ BREADCRUMBS CONTAINER --------------------------------------------- -->
			<div class="breadcrumb-wrapper">
				<div class="container">
					<ol class="breadcrumb-list booking-step">
						<li><a href="./">Home</a></li>
						<li><span>Industry Partners</span></li>
					</ol>
				</div>
			</div>

			<!-- ------------------------------------------ INDUSTRY PARTNER SECTION --------------------------------------------- -->
			<div class="section sm">
				<div class="container">
					<div class="sorting-wrappper alt">
						<div class="GridLex-grid-middle">
							<div class="GridLex-col-3_sm-12_xs-12">
								<div class="sorting-header">
									<h3 class="sorting-title">COMPANIES</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="company-grid-wrapper top-company-2-wrapper">
						<div class="GridLex-gap-30">
							<div class="GridLex-grid-noGutter-equalHeight">
								<?php
								require 'constants/db_config.php';
								try {
									$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
									$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


									$stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' ORDER BY first_name LIMIT $page1,16");
									$stmt->execute();
									$result = $stmt->fetchAll();

									foreach ($result as $row) {
										$complogo = $row['avatar'];
								?>
										<div class="GridLex-col-3_sm-4_xs-6_xss-12">

											<div class="top-company-2">
												<a target="_blank" href="company.php?ref=<?php echo $row['member_no']; ?>">

													<div class="image">
														<?php
														if ($complogo == null) {
															print '<center><img class="autofit2" alt="image"  src="images/blank.png"/></center>';
														} else {
															echo '<center><img class="autofit2" alt="image"  src="data:image/jpeg;base64,' . base64_encode($complogo) . '"/></center>';
														}
														?>

													</div>

													<div class="content">
														<h5 class="heading text-primary font700"><?php echo $row['first_name']; ?></h5>
														<p class="texting font600"><?php echo $row['title']; ?>
														<p>
														<p class="mata-p clearfix"><span class="font13">Active job post(s)</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
													</div>

												</a>

											</div>

										</div>
								<?php

									}
								} catch (PDOException $e) {
								} ?>






							</div>

						</div>

					</div>

					<div class="pager-wrapper">

						<ul class="pager-list">
							<?php
							require 'constants/db_config.php';
							$total_records = 0;
							try {
								$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
								$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


								$stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' ORDER BY first_name");
								$stmt->execute();
								$result = $stmt->fetchAll();

								foreach ($result as $row) {
									$total_records++;
								}
							} catch (PDOException $e) {
							} ?>

							<?php
							$records = $total_records / 16;
							$records = ceil($records);
							if ($records > 1) {
								$prevpage = $page - 1;
								$nextpage = $page + 1;

								print '<li class="paging-nav" ';
								if ($page == "1") {
									print 'class="disabled"';
								}
								print '><a ';
								if ($page == "1") {
									print '';
								} else {
									print 'href="employers.php?page=' . $prevpage . '"';
								}
								print '><i class="fa fa-chevron-left"></i></a></li>';
								for ($b = 1; $b <= $records; $b++) {

							?><li class="paging-nav"><a <?php if ($b == $page) {
															print ' style="background-color:#33B6CB; color:white" ';
														} ?> href="employers.php?page=<?php echo "$b"; ?>"><?php echo $b . " "; ?></a></li><?php
																																		}
																																		print '<li class="paging-nav"';
																																		if ($page == $records) {
																																			print 'class="disabled"';
																																		}
																																		print '><a ';
																																		if ($page == $records) {
																																			print '';
																																		} else {
																																			print 'href="employers.php?page=' . $nextpage . '"';
																																		}
																																		print '><i class="fa fa-chevron-right"></i></a></li>';
																																	}


																																			?>

						</ul>

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
											<p>LVIMS is an internship portal, online internship management system developed by the group of Aljon Isip for their capstone project in 2021 to 2022.</p>
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
								<h5 class="footer-title">LVCC Apalit Contact</h5>
								<p>Address : McArthur Highway 2009 Apalit, Philippines</p>
								<p>Email : <a href="mailto:info@laverdad.edu.ph">info@laverdad.edu.ph</a></p>
								<p>Phone : <a href="tel:(045) 436 1487">(045) 436 1487</a></p>
							</div>
						</div>
					</div>
				</div>
				<!-- ------------------------------------------ BOTTOM FOOTER  --------------------------------------------- -->
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
	<!-- ------------------------------------------ BACK TO TOP FUNCTION --------------------------------------------- -->
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