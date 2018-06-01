
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HoangLong | Dashboard</title>
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/select2.min.css">
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
              General Form Elements
              <small>Preview</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Forms</a></li>
              <li class="active">General Elements</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
          <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Create Offer</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Offer name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Affiliate network</label>
                    <div class="row">
                      <div class="col-xs-6">
                        <select class="form-control select2" multiple="multiple" data-placeholder="Select a State">
                          <option>Alabama</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                       <div class="col-md-6">
                          <a href="">Create</a>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">URL</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Country</label>
                    <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Group</label>
                     <div class="row">
                      <div class="col-xs-6">
                        <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                          <option>Alabama</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                          <a href="">Create group</a>
                      </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Payout type</label>
                    <div class="row">
                      <div class="col-xs-3">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">
                            CPA (Cost per Action)
                          </label>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">
                            CPC (Cost per Click)
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Payout</label>
                    <div class="row">
                      <div class="col-xs-6">
                        <div class="input-group">
                          <input type="text" class="form-control">
                          <div class="input-group-btn">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action
                            <span class="fa fa-caret-down"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="#">USD</a></li>
                              <li><a href="#">EUR</a></li>
                            </ul>
                          </div>
                          <!-- /btn-group -->
                        </div>
                      </div>
                      <div class="col-xs-1">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">
                            Auto
                          </label>
                        </div>
                      </div>
                      <div class="col-xs-1">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">
                            Upsell
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Note</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>

                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->

          </div>
          <!--/.col (left) -->
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
    <!-- Select2 -->
    <script src="plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
      });
    </script>
  </body>
</html>
