
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>HoangLong | Dashboard</title>
		<!-- DataTables -->
		<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

		<?php include 'template/linkcss.php'; ?>
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<?php 
				// Block Header
				include 'template/header.php'; 
				// End Block

				// Block Sidebar
				include 'template/sidebar.php';
				// End Block
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
								<div class="box-header">
									<h3 class="box-title">Hover Data Table</h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<table id="example2" class="table table-bordered table-hover table_data">
										<thead>
											<tr>
												<th>Rendering engine</th>
												<th>Browser</th>
												<th>Platform(s)</th>
												<th>Engine version</th>
												<th>Function</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Trident</td>
												<td>Internet
												Explorer 4.0
												</td>
												<td>Win 95+</td>
												<td> 4</td>
												<td>
													<div class="btn-group">
														<button type="button" class="btn btn-default btn_txt">Action</button>
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li><a href="detail.php">Chi tiết</a></li>
															<li><a href="#">Another action</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>Trident</td>
												<td>Internet
												Explorer 5.0
												</td>
												<td>Win 95+</td>
												<td>5</td>
												<td>
													<div class="btn-group">
														<button type="button" class="btn btn-default btn_txt">Action</button>
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li><a href="detail.php">Chi tiết</a></li>
															<li><a href="#">Another action</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>Trident</td>
												<td>Internet
												Explorer 5.5
												</td>
												<td>Win 95+</td>
												<td>5.5</td>
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
												<th>Rendering engine</th>
												<th>Browser</th>
												<th>Platform(s)</th>
												<th>Engine version</th>
												<th>CSS grade</th>
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

			<!-- Block Footer -->
			<?php include 'template/footer.php'; ?>
			<!-- End Block -->
		</div>
		
		<!-- Link script -->
			<?php include 'template/linkscript.php'; ?>
			<!-- DataTables -->
			<script src="plugins/datatables/jquery.dataTables.min.js"></script>
			<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
			<!-- page script -->
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
				});
			</script>
		<!-- end -->

		
	</body>
</html>