
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>HoangLong | Dashboard</title>
		<!-- DataTables -->
		<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
		
		<!-- iCheck for checkboxes and radio inputs -->
		<link rel="stylesheet" href="plugins/iCheck/all.css">
		<!-- Bootstrap time Picker -->
		<link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
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
			
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
			    <!-- Content Header (Page header) -->
			    <section class="content-header">
					<h1>
						Data Tables
						<small>advanced tables</small>
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
						<li><a href="#">Tables</a></li>
						<li class="active">Data tables</li>
					</ol>
			    </section>

			    <!-- Main content -->
			    <section class="content">
					<div class="row">
						<div class="col-xs-12">
							<div class="box">
								<div class="box-body">
									<form method="post">
										<div class="col-xs-3">
											<div class="form-group">
												<label>Multiple</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected">Alabama</option>
													<option>Alaska</option>
													<option disabled="disabled">California (disabled)</option>
													<option>Delaware</option>
													<option>Tennessee</option>
													<option>Texas</option>
													<option>Washington</option>
												</select>
											</div>
											<!-- /.form-group -->
										</div>

										<div class="col-xs-3">
											<div class="form-group">
												<label>Multiple</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected">Alabama</option>
													<option>Alaska</option>
													<option disabled="disabled">California (disabled)</option>
													<option>Delaware</option>
													<option>Tennessee</option>
													<option>Texas</option>
													<option>Washington</option>
												</select>
											</div>
											<!-- /.form-group -->
										</div>

										<div class="col-xs-3">
											<div class="form-group">
												<label>Disabled Result</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected">Alabama</option>
													<option>Alaska</option>
													<option disabled="disabled">California (disabled)</option>
													<option>Delaware</option>
													<option>Tennessee</option>
													<option>Texas</option>
													<option>Washington</option>
												</select>
											</div>
											<!-- /.form-group -->
										</div>

										<div class="col-xs-3">
											<!-- Date range -->
											<div class="form-group">
												<label>Date range:</label>

												<div class="input-group">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													<input type="text" class="form-control pull-right" id="reservation">
												</div>
												<!-- /.input group -->
											</div>
											<!-- /.form group -->
										</div>

										<div class="box-footer">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title">Data for Selected Period </h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<table id="example2" class="table table-bordered table-hover">
										<thead>
											<tr>
												<th>Date</th>
												<th>Requests</th>
												<th>Backtraffic Clicks</th>
												<th>Clicks</th>
												<th>Conversions</th>
												<th>Conversion rate	</th>
												<th>EPC</th>
												<th>Revenue</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>11/22/2017</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>
													<div class="btn-group">
														<button type="button" class="btn btn-default btn_txt">Action</button>
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li><a href="detail_item.php">Chi tiết</a></li>
															<li><a href="#">Another action</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>11/23/2017</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>
													<div class="btn-group">
														<button type="button" class="btn btn-default btn_txt">Action</button>
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li><a href="detail_item.php">Chi tiết</a></li>
															<li><a href="#">Another action</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>11/24/2017</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>
													<div class="btn-group">
														<button type="button" class="btn btn-default btn_txt">Action</button>
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li><a href="detail_item.php">Chi tiết</a></li>
															<li><a href="#">Another action</a></li>
														</ul>
													</div>
												</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<th>Date</th>
												<th>Requests</th>
												<th>Backtraffic Clicks</th>
												<th>Clicks</th>
												<th>Conversions</th>
												<th>Conversion rate	</th>
												<th>EPC</th>
												<th>Revenue</th>
											</tr>
										</tfoot>
									</table>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
						</div>
					<!-- /.col -->
					</div>
					<!-- /.row -->
			    </section>
			    <!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

			<?php include 'template/footer.php'; ?>
		</div>

		
		<?php include 'template/linkscript.php'; ?>
		<!-- DataTables -->
		<script src="plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

		<!-- Select2 -->
		<script src="plugins/select2/select2.full.min.js"></script>
		<!-- InputMask -->
		<script src="plugins/input-mask/jquery.inputmask.js"></script>
		<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
		<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
		<!-- bootstrap time picker -->
		<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
		<!-- iCheck 1.0.1 -->
		<script src="plugins/iCheck/icheck.min.js"></script>
		<!-- Page script -->
		<script>
			$(function () {
				$('#example2').DataTable({
					"paging": true,
					"lengthChange": false,
					"searching": false,
					"ordering": true,
					"info": true,
					"autoWidth": false
				});
				//Initialize Select2 Elements
				$(".select2").select2();

				//Date range picker
				$('#reservation').daterangepicker();
			});
		</script>

		
	</body>
</html>