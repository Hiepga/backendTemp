<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 2 | Dashboard</title>
	<!-- Select2 -->
		<link rel="stylesheet" href="plugins/select2/select2.min.css">
	<?php include 'template/linkcss.php'; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php
			include 'template/header.php';

			include 'template/sidebar.php';
		?>
	  	
	  	<div class="content-wrapper">
		    <!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					User Profile
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li><a href="#">Examples</a></li>
					<li class="active">User profile</li>
				</ol>
			</section>

		    <!-- Main content -->
		    <section class="content">
			    <div class="row">
			        <div class="col-md-3">
						<!-- Profile Image -->
						<div class="box box-primary">
							<div class="box-body box-profile">
								<img class="profile-user-img img-responsive img-circle" src="dist/img/avatar.png" alt="User profile picture">
								<h3 class="profile-username text-center">Nina Mcintire</h3>
								<p class="text-muted text-center">Software Engineer</p>
								<ul class="list-group list-group-unbordered">
									<li class="list-group-item">
										<b>Followers</b> <a class="pull-right">1,322</a>
									</li>
									<li class="list-group-item">
										<b>Following</b> <a class="pull-right">543</a>
									</li>
									<li class="list-group-item">
										<b>Friends</b> <a class="pull-right">13,287</a>
									</li>
								</ul>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->
		        	</div>
					<!-- /.col -->
					<div class="col-md-9">
						<div class="nav-tabs-custom">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#account" data-toggle="tab">Account info</a></li>
								<li><a href="#change_pass" data-toggle="tab">Change password</a></li>
								<li><a href="#payment_info" data-toggle="tab">Payment info</a></li>
								<li><a href="#postback" data-toggle="tab">Postback URL</a></li>
								<li><a href="#notication" data-toggle="tab">Notification</a></li>
							</ul>
			           		<div class="tab-content">
				              	<div class="active tab-pane" id="account">
									<form class="form-horizontal">
										<div class="form-group">
											<label for="inputName" class="col-sm-3 control-label">Name</label>
											<div class="col-sm-9">
												<input type="email" class="form-control" id="inputName" placeholder="Name">
											</div>
										</div>
										<div class="form-group">
											<label for="inputEmail" class="col-sm-3 control-label">Email</label>
											<div class="col-sm-9">
												<input type="email" class="form-control" id="inputEmail" placeholder="Email">
											</div>
										</div>
										<div class="form-group">
											<label for="inputName" class="col-sm-3 control-label">Skype</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputName" placeholder="Name">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
												<button type="submit" class="btn btn-danger">Submit</button>
											</div>
										</div>
									</form>
				              	</div>
			              		<!-- /.tab-pane -->
								<div class="tab-pane" id="change_pass">
									<form class="form-horizontal">
										<div class="form-group">
											<label for="inputName" class="col-sm-3 control-label">Current Password</label>
											<div class="col-sm-9">
												<input type="password" class="form-control" id="" placeholder="Name">
											</div>
										</div>
										<div class="form-group">
											<label for="inputEmail" class="col-sm-3 control-label">New Password</label>
											<div class="col-sm-9">
												<input type="password" class="form-control" id="" placeholder="Email">
											</div>
										</div>
										<div class="form-group">
											<label for="inputName" class="col-sm-3 control-label">Confirm Password</label>
											<div class="col-sm-9">
												<input type="password" class="form-control" id="" placeholder="Name">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
												<button type="submit" class="btn btn-danger">Submit</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->

								<div class="tab-pane" id="payment_info">
									<form class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-3 control-label">Payment Default</label>
											<div class="col-sm-9">
												<select class="form-control select2 ">
													<option selected="selected">Paypal</option>
													<option>Webmoney</option>
													<option>Payoneer</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="inputEmail" class="col-sm-3 control-label">Paypal</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputEmail" placeholder="Paypal">
											</div>
										</div>
										<div class="form-group">
											<label for="inputName" class="col-sm-3 control-label">Webmoney</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputName" placeholder="Webmoney">
											</div>
										</div>
										<div class="form-group">
											<label for="inputExperience" class="col-sm-3 control-label">Payoneer</label>
											<div class="col-sm-9">
												<textarea class="form-control" id="inputExperience" placeholder="Payoneer"></textarea>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
												<button type="submit" class="btn btn-danger">Submit</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->

								<!-- /.tab-pane -->
								<div class="tab-pane" id="postback">
									<form class="form-horizontal">
										<div class="form-group">
											<label for="inputName" class="col-sm-3 control-label">Postback Url</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="" placeholder="Name">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
												<button type="submit" class="btn btn-danger">Submit</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->

								<!-- /.tab-pane -->
								<div class="tab-pane" id="notication">
									<form class="form-horizontal">
										<div class="form-group">
											<label for="inputName" class="col-sm-3 control-label">Current Password</label>
											<div class="col-sm-9">
												<input type="password" class="form-control" id="" placeholder="Name">
											</div>
										</div>
										<div class="form-group">
											<label for="inputEmail" class="col-sm-3 control-label">New Password</label>
											<div class="col-sm-9">
												<input type="password" class="form-control" id="" placeholder="Email">
											</div>
										</div>
										<div class="form-group">
											<label for="inputName" class="col-sm-3 control-label">Confirm Password</label>
											<div class="col-sm-9">
												<input type="password" class="form-control" id="" placeholder="Name">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
												<button type="submit" class="btn btn-danger">Submit</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
							</div>
			            <!-- /.tab-content -->
			          	</div>
			        <!-- /.nav-tabs-custom -->
			        </div>
		        <!-- /.col -->
		      	</div>
		      	<!-- /.row -->
		    </section>
		    <!-- /.content -->
		</div>
		  <!-- /.content-wrapper -->
	</div>
	<?php include 'template/linkscript.php';  ?>
	<!-- Select2 -->
		<script src="plugins/select2/select2.full.min.js"></script>

		<script>
			$(function () {
				//Initialize Select2 Elements
				$(".select2").select2();	
			});
		</script>
</body>
</html>