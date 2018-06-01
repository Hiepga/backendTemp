<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>HoangLong | Registration Page</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.7 -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="plugins/iCheck/square/blue.css">

		<!-- Style custom -->
		<link rel="stylesheet" href="dist/css/style.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Google Font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>
	<body onload="init();" class="hold-transition register-page">
		<div id="canvas-wrapper" class="bg_video">
			<canvas id="demo-canvas"></canvas>
		</div>
		<div class="register-box">
			<div class="register-logo">
				<a href=""><b>Hoang</b>Long</a>
			</div>

			<div class="register-box-body">
				<p class="login-box-msg">Register a new membership</p>

				<!-- Form Register -->
					<form action="../../index.html" method="post">
						<!-- box input name -->
						<div class="form-group has-feedback">
							<input type="text" class="form-control" placeholder="Full name">
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						</div>
						<!-- ./box -->

						<!-- box input email -->
						<div class="form-group has-feedback">
							<input type="email" class="form-control" placeholder="Email">
							<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						</div>
						<!-- ./box -->

						<!-- box input pass -->
						<div class="form-group has-feedback">
							<input type="password" class="form-control" placeholder="Password">
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>
						<!-- ./box -->

						<!-- box input re pass -->
						<div class="form-group has-feedback">
							<input type="password" class="form-control" placeholder="Retype password">
							<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
						</div>
						<!-- ./box -->

						<div class="row">
							<div class="col-xs-8">
								<div class="checkbox icheck">
								<label>
									<input type="checkbox"> I agree to the <a href="#">terms</a>
								</label>
								</div>
							</div>
							<!-- /.col -->
							<div class="col-xs-4">
								<button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
							</div>
						</div>
					</form>
				<!-- ./form -->
				
				<a href="login.html" class="text-center">I already have a membership</a>
			</div>
			<!-- /.form-box -->
		</div>
		<!-- /.register-box -->
		<script src="dist/canvas/canvasbg.js"></script>
		<!-- jQuery 3.1.1 -->
		<script src="plugins/jQuery/jquery-3.1.1.min.js"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- iCheck -->
		<script src="plugins/iCheck/icheck.min.js"></script>
		<script>
			jQuery(document).ready(function () {
				CanvasBG.init({
				  Loc: {
				      x: window.innerWidth / 2.1,
				      y: window.innerHeight / 4.2
				  }
				});
			});
			$(function () {
				$('input').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%' // optional
				});
			});
		</script>
	</body>
	</html>