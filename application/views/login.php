<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Material Admin - Login</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/theme-default/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->

		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


		<style>
			.adminButton{
				height: 300px;
				width: 400px;
				background-color: black;
				font-size: 30px;
				color: white;
				font-weight: bold;
			}

			.guestButton{
				height: 300px;
				width: 400px;
				background-color: black;
				font-size: 30px;
				color: white;
				font-weight: bold;
				color:teal;
			}

			.buttons{
				border-radius: 20px;
			}

			.icons{
				font-size: 150px;
				margin-top: 50px;
			}

			.backBtn{
				background-color:  black;
				color:white;

			}
		</style>
	</head>
	<body class="menubar-hoverable header-fixed ">
<!-- BEGIN LOGIN SECTION -->
		<section class="section-account">
			<div class="img-backdrop" style="background-image: url('<?= base_url() ?>assets/img/img16.jpg')"></div>
			<div class="spacer"></div>
			<div class="card contain-sm style-transparent" id="adminLogin" style="display:none">
				<div class="card-body" id="login">
					<div class="row">
						<div class="col-sm-12">
								<br/>
								<span class="text-lg text-bold text-primary">SPUP RESEARCH LOGIN</span>
								<br/><br/>
								<form class="form" action="" method="post">
									<?= validation_errors("<p>") ?>
									<div class="form-group">
										<input type="text" class="form-control" name="username" autocomplete="off">
										<label for="username">Username</label>
									</div>
									<div class="form-group">
										<input type="password" class="form-control" name="password" autocomplete="off">
										<label for="password">Password</label>
									</div>
									<br/>
									<div class="row">
										<div class="col-xs-6 text-left">
										</div><!--end .col -->
										<div class="col-xs-6 text-right">
											<button class="btn btn-dark btn-raised backBtn" style="margin-right: 10px" type="button">Back</button>
											<button class="btn btn-primary btn-raised" type="submit">Login</button>
										</div><!--end .col -->
									</div><!--end .row -->
								</form>
							</div><!--end .col -->
						<!--end .col -->
					</div><!--end .row -->
				</div><!--end .card-body -->
			</div><!--end .card -->		


			<!-- Options -->
			<div id="options">
				<div class="card contain-sm style-transparent" id="choose">
					<div class="card-body text-center">
						<div class="row">
							<div class="col-sm-6" id="admin_button">
								<div class="adminButton buttons">
									<i class="fa fa-user-md icons" aria-hidden="true"></i><br>
									ADMIN
								</div>
							</div>
							
							
							<div class="col-sm-6" id="guest_button">
								<div class="guestButton buttons">
									<i class="fa fa-graduation-cap icons" aria-hidden="true"></i><br>
									GUEST
								</div>
							</div>
						</div><!--end .row -->
					</div><!--end .card-body -->
				</div><!--end .card -->		
			</div>
			<!-- Options -->
		</section>
		<!-- End of login section -->



<!-- BEGIN JAVASCRIPT -->
<!-- <script src="<?= base_url() ?> assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="<?= base_url() ?> assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="<?= base_url() ?> assets/js/libs/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url() ?> assets/js/libs/spin.js/spin.min.js"></script>
<script src="<?= base_url() ?> assets/js/libs/autosize/jquery.autosize.min.js"></script>
<script src="<?= base_url() ?> assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="<?= base_url() ?> assets/js/core/source/App.js"></script>
<script src="<?= base_url() ?> assets/js/core/source/AppNavigation.js"></script>
<script src="<?= base_url() ?> assets/js/core/source/AppOffcanvas.js"></script>
<script src="<?= base_url() ?> assets/js/core/source/AppCard.js"></script>
<script src="<?= base_url() ?> assets/js/core/source/AppForm.js"></script>
<script src="<?= base_url() ?> assets/js/core/source/AppNavSearch.js"></script>
<script src="<?= base_url() ?> assets/js/core/source/AppVendor.js"></script>
<script src="<?= base_url() ?> assets/js/core/demo/Demo.js"></script> -->
<!-- END JAVASCRIPT -->

</body>
</html>
<?php $guestLogin = base_url() . "Login/guestLogin" ?>
<?php $dashboard = base_url() . "Guest" ?>
<script>
	$(document).ready(function(){
		$('#admin_button').click(function(){
			$('#options').hide();
			$('#adminLogin').fadeIn();
		});

		$('.backBtn').click(function(){
			$('#adminLogin').hide();
			$('#options').fadeIn();
		});

		// if guest button was pressed
		$('#guest_button').click(function(){
			$.post("<?= $guestLogin ?>", function(){
				window.location.href = "<?= $dashboard ?>";
			});
		});
	});
</script>
