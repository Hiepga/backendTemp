
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>AdminLTE 2 | Dashboard</title>
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
								Dashboard
								<small>Control panel</small>
							</h1>
							<ol class="breadcrumb">
								<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
								<li class="active">Dashboard</li>
							</ol>
						</section>
					<!-- /.content -->

					<!-- Main content -->
						<section class="content">
							<!-- BOX TOTAL -->
							<div class="row">
								<div class="col-lg-2 col-xs-6">
									<!-- Total Current balance -->
										<div class="small-box bg-aqua">
											<div class="inner">
												<h3>150</h3>
												<p>Current balance</p>
											</div>
											<div class="icon">
												<i class="ion ion-bag"></i>
											</div>
											<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									<!-- ./total -->
								</div>
								
								<div class="col-lg-2 col-xs-6">
									<!-- Total Paid -->
										<div class="small-box bg-green">
											<div class="inner">
												<h3>53<sup style="font-size: 20px">%</sup></h3>
												<p>Paid</p>
											</div>
											<div class="icon">
												<i class="ion ion-stats-bars"></i>
											</div>
											<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									<!-- ./total -->
								</div>

								<div class="col-lg-2 col-xs-6">
									<!-- Total earnings -->
										<div class="small-box bg-yellow">
											<div class="inner">
												<h3>44</h3>
												<p>Total earnings</p>
											</div>
											<div class="icon">
												<i class="ion ion-person-add"></i>
											</div>
											<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									<!-- ./total -->
								</div>
								
								<div class="col-lg-2 col-xs-6">
									<!-- Total Clicks -->
										<div class="small-box bg-red">
											<div class="inner">
												<h3>65</h3>
												<p>Clicks (today)</p>
											</div>
											<div class="icon">
												<i class="ion ion-pie-graph"></i>
											</div>
											<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									<!-- ./total -->
								</div>
								
								<div class="col-lg-2 col-xs-6">
									<!-- Total Conversions -->
										<div class="small-box bg-aqua">
											<div class="inner">
												<h3>65</h3>
												<p>Conversions (today)</p>
											</div>
											<div class="icon">
												<i class="ion ion-pie-graph"></i>
											</div>
											<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									<!-- ./total -->
								</div>
								
								<div class="col-lg-2 col-xs-6">
									<!-- Total Revenue -->
										<div class="small-box bg-green">
											<div class="inner">
												<h3>65</h3>
												<p>Revenue (today)</p>
											</div>
											<div class="icon">
												<i class="ion ion-pie-graph"></i>
											</div>
											<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									<!-- ./total -->
								</div>
						  	</div>
							<!-- /.row -->

							<!-- BOX CONTENT TOP-->
						  	<div class="row">
						  		<section class="col-lg-8">
						  			<!-- BOX CHART -->
										<div class="nav-tabs-custom">
											<!-- Tabs -->
											<ul class="nav nav-tabs pull-right">
												<li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
												<li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
												<li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
											</ul>
											<div class="tab-content no-padding">
												<!-- content tab -->
												<div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 250px;"></div>
												<div class="chart tab-pane" id="sales-chart" style="position: relative; height: 250px;"></div>
											</div>
										</div>
							      	<!-- /.box -->
						  		</section>

						  		<section class="col-lg-4">
						  			<!-- Top converting offers -->
										<div class="box box-success">
											<div class="box-header">
												<i class="fa fa-comments-o"></i>

												<h3 class="box-title">Top converting offers</h3>
											</div>
											<div class="box-body chat" id="chat-box">
												<?php 
													for ($x = 0; $x <= 10; $x++) {
												?>
													<!-- top item -->
													<div class="item">
														<img src="dist/img/avatar.png" alt="user image" class="online">
														<p class="message">
															<a href="#" class="name">
																GO-JEK(android)ID - Non-incent
															</a>
															0.60
														</p>
													</div>
													<!-- /.item -->
												<?php	
													}
												?>
											</div>
										</div>
									<!-- /.box (Top converting offers) -->
						  		</section>
						  	</div>
						  	<!-- .box -->

							<!-- BOX CONTENT BOTTOM -->
							<div class="row">
							    <!-- Left col -->
							    <section class="col-lg-6 connectedSortable">
							      	<!-- box tab 1 -->
								      	<div class="nav-tabs-custom">
											<ul class="nav nav-tabs pull-right">
												<li class="active"><a href="#Today" data-toggle="tab">Today</a></li>
												<li><a href="#yesterday" data-toggle="tab">Yesterday</a></li>
												<li><a href="#week" data-toggle="tab">Week</a></li>
												<li><a href="#thismonth" data-toggle="tab">This Month</a></li>
											</ul>
											<div class="tab-content no-padding">
												<!-- content tab today -->
													<div class="tab-pane active" id="today">
														<ul class="todo-list">
															<?php 
																for ($x = 0; $x <= 5; $x++) {
															?>
																<li>
																	<a href="">
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<span class="text">Design a nice theme</span>
																		<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
																	</a>
																</li>
															<?php
																}
															?>
														</ul>
													</div>
												<!-- ./content -->

												<!-- content tab yesterday -->
													<div class="tab-pane" id="yesterday">
														<ul class="todo-list">
															<?php 
																for ($x = 0; $x <= 3; $x++) {
															?>
																<li>
																	<a href="">
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<span class="text">Design a nice theme</span>
																		<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
																	</a>
																</li>
															<?php
																}
															?>
														</ul>
													</div>
												<!-- ./content -->

												<!-- content tab week -->
													<div class="tab-pane" id="week">
														<ul class="todo-list">
															<?php 
																for ($x = 0; $x <= 4; $x++) {
															?>
																<li>
																	<a href="">
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<span class="text">Design a nice theme</span>
																		<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
																	</a>
																</li>
															<?php
																}
															?>
														</ul>
													</div>
												<!-- ./content -->

												<!-- content tab this month -->
													<div class="tab-pane" id="thismonth">
														<ul class="todo-list">
															<?php 
																for ($x = 0; $x <= 3; $x++) {
															?>
																<li>
																	<a href="">
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<span class="text">Design a nice theme</span>
																		<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
																	</a>
																</li>
															<?php
																}
															?>
														</ul>
													</div>
												<!-- ./content -->
											</div>
										</div>
									<!-- ./box -->
									
									<!-- box tab 2 -->
								      	<div class="nav-tabs-custom">
											<ul class="nav nav-tabs pull-right">
												<li class="active"><a href="#Today1" data-toggle="tab">Today</a></li>
												<li><a href="#yesterday1" data-toggle="tab">Yesterday</a></li>
												<li><a href="#week1" data-toggle="tab">Week</a></li>
												<li><a href="#thismonth1" data-toggle="tab">This Month</a></li>
											</ul>
											<div class="tab-content no-padding">
												<!-- content tab today -->
													<div class="tab-pane active" id="today1">
														<ul class="todo-list">
															<?php 
																for ($x = 0; $x <= 5; $x++) {
															?>
																<li>
																	<a href="">
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<span class="text">Design a nice theme</span>
																		<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
																	</a>
																</li>
															<?php
																}
															?>
														</ul>
													</div>
												<!-- ./content -->

												<!-- content tab yesterday -->
													<div class="tab-pane" id="yesterday1">
														<ul class="todo-list">
															<?php 
																for ($x = 0; $x <= 3; $x++) {
															?>
																<li>
																	<a href="">
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<span class="text">Design a nice theme</span>
																		<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
																	</a>
																</li>
															<?php
																}
															?>
														</ul>
													</div>
												<!-- ./content -->

												<!-- content tab week -->
													<div class="tab-pane" id="week1">
														<ul class="todo-list">
															<?php 
																for ($x = 0; $x <= 4; $x++) {
															?>
																<li>
																	<a href="">
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<span class="text">Design a nice theme</span>
																		<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
																	</a>
																</li>
															<?php
																}
															?>
														</ul>
													</div>
												<!-- ./content -->

												<!-- content tab this month -->
													<div class="tab-pane" id="thismonth1">
														<ul class="todo-list">
															<?php 
																for ($x = 0; $x <= 3; $x++) {
															?>
																<li>
																	<a href="">
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<span class="text">Design a nice theme</span>
																		<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
																	</a>
																</li>
															<?php
																}
															?>
														</ul>
													</div>
												<!-- ./content -->
											</div>
										</div>
									<!-- ./box -->
							    </section>
							    <!-- /.Left col -->

							    <!-- right col -->
							    <section class="col-lg-6 connectedSortable">
							    	<!-- box tab 3 -->
								    	<div class="nav-tabs-custom">
											<ul class="nav nav-tabs pull-right">
												<li class="active"><a href="#Today3" data-toggle="tab">Today</a></li>
												<li><a href="#yesterday3" data-toggle="tab">Yesterday</a></li>
												<li><a href="#week3" data-toggle="tab">Week</a></li>
												<li><a href="#thismonth3" data-toggle="tab">This Month</a></li>
											</ul>
											<div class="tab-content no-padding">
												<!-- content tab today -->
													<div class="tab-pane active" id="today3">
														<ul class="todo-list">
															<?php 
																for ($x = 0; $x <= 5; $x++) {
															?>
																<li>
																	<a href="">
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<span class="text">Design a nice theme</span>
																		<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
																	</a>
																</li>
															<?php
																}
															?>
														</ul>
													</div>
												<!-- ./content -->

												<!-- content tab yesterday -->
													<div class="tab-pane" id="yesterday3">
														<ul class="todo-list">
															<?php 
																for ($x = 0; $x <= 3; $x++) {
															?>
																<li>
																	<a href="">
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<span class="text">Design a nice theme</span>
																		<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
																	</a>
																</li>
															<?php
																}
															?>
														</ul>
													</div>
												<!-- ./content -->

												<!-- content tab week -->
													<div class="tab-pane" id="week3">
														<ul class="todo-list">
															<?php 
																for ($x = 0; $x <= 4; $x++) {
															?>
																<li>
																	<a href="">
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<span class="text">Design a nice theme</span>
																		<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
																	</a>
																</li>
															<?php
																}
															?>
														</ul>
													</div>
												<!-- ./content -->

												<!-- content tab this month -->
													<div class="tab-pane" id="thismonth3">
														<ul class="todo-list">
															<?php 
																for ($x = 0; $x <= 3; $x++) {
															?>
																<li>
																	<a href="">
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<span class="text">Design a nice theme</span>
																		<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
																	</a>
																</li>
															<?php
																}
															?>
														</ul>
													</div>
												<!-- ./content -->
												
											</div>
										</div>
									<!-- ./box -->
									
									<!-- box tab 4 -->
								      	<div class="nav-tabs-custom">
											<ul class="nav nav-tabs pull-right">
												<li class="active"><a href="#Today4" data-toggle="tab">Today</a></li>
												<li><a href="#yesterday4" data-toggle="tab">Yesterday</a></li>
												<li><a href="#week4" data-toggle="tab">Week</a></li>
												<li><a href="#thismonth4" data-toggle="tab">This Month</a></li>
											</ul>
											<div class="tab-content no-padding">
												<!-- content tab today -->
													<div class="tab-pane active" id="today4">
														<ul class="todo-list">
															<?php 
																for ($x = 0; $x <= 5; $x++) {
															?>
																<li>
																	<a href="">
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<span class="text">Design a nice theme</span>
																		<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
																	</a>
																</li>
															<?php
																}
															?>
														</ul>
													</div>
												<!-- ./content -->

												<!-- content tab yesterday -->
													<div class="tab-pane" id="yesterday4">
														<ul class="todo-list">
															<?php 
																for ($x = 0; $x <= 3; $x++) {
															?>
																<li>
																	<a href="">
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<span class="text">Design a nice theme</span>
																		<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
																	</a>
																</li>
															<?php
																}
															?>
														</ul>
													</div>
												<!-- ./content -->

												<!-- content tab week -->
													<div class="tab-pane" id="week4">
														<ul class="todo-list">
															<?php 
																for ($x = 0; $x <= 4; $x++) {
															?>
																<li>
																	<a href="">
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<span class="text">Design a nice theme</span>
																		<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
																	</a>
																</li>
															<?php
																}
															?>
														</ul>
													</div>
												<!-- ./content -->

												<!-- content tab this month -->
													<div class="tab-pane" id="thismonth4">
														<ul class="todo-list">
															<?php 
																for ($x = 0; $x <= 3; $x++) {
															?>
																<li>
																	<a href="">
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<span class="text">Design a nice theme</span>
																		<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
																	</a>
																</li>
															<?php
																}
															?>
														</ul>
													</div>
												<!-- ./content -->
											</div>
										</div>
									<!-- ./box -->
							    </section>
							    <!-- right col -->
							</div>
							<!-- .box -->
						</section>
					<!-- /.content -->
				</div>
			<!-- End content -->
			<!-- Block Footer -->
				<?php include 'template/footer.php'; ?>
			<!-- End Block -->

			<div class="control-sidebar-bg"></div>
		</div>
	<!-- Link script -->
	<?php include 'template/linkscript.php'; ?>
	<!-- end -->
	</body>
</html>