<?php
session_start();
if ( !isset($_SESSION['username']) ) {
    header('location:../login.php?errMsg=Silahkan Login Dahulu!'); 
}
else 
{ 
    $username = $_SESSION['username']; 
}
include '../controllers/connect.php';
$query = mysql_query("SELECT * FROM tbl_master_admin WHERE username = '$username'");
$data = mysql_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin HolyDiskon | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b><b>H</b><b>D</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin </b><b>H</b>oly<b>D</b>iskon</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <?php echo "<span class='hidden-xs'>Welcome, ".$data['username']."</span>";?>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

               <?php 
               		//include '../controllers/connect.php';
					//$query = "SELECT * FROM tbl_master_admin";
					//$execute = mysql_query($query) or trigger_error(mysql_error().$query);
        			//$data= mysql_fetch_array($execute);
            	 
               			echo "<p>".$data['nama_admin']."</p>";
       
               		
                ?>
              </li>

              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <a href='../index.php'><button type='button' class='btn btn-default btn-flat'><span class='fa fa-globe'></span> Go to Homepage</button></a>
                  </div>
    
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../controllers/doLogout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <?php echo "<p>".$data['nama_admin']."</p>";?>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="" method="GET" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="input_cari" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="result" value="Keyword" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">DASHBOARD</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-hdd-o"></i> <span>Manage Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.php" class="active"><i class="fa fa-user"></i> List User</a></li>
            <li class="active"><a href="list_merchant.php"><i class="fa fa-shopping-cart"></i> List Merchant</a></li>
            <li class="active"><a href="list_coupon.php"><i class="fa fa-ticket"></i> List Coupon</a></li>
          </ul>
        </li>
    </section>
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bullhorn"></i> <span>Manage Promo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="list_promo.php" class="active"><i class="fa fa-tag"></i> List Promo</a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">	
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>List User</small>
      </h1>
  <div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Table for Users</h3>
   </div>
     <div class="box-header">
     	<a href="insert_admin.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</button></a>
     </div>
   <!-- /.box-header -->
	<div class="box-body">
	  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
		  <div class="row">
			  <div class="col-sm-6">
				  	<div class="dataTables_length" id="example1_length">
					  	<label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
						  <option value="10">10</option>
						  <option value="25">25</option>
						  <option value="50">50</option>
						  <option value="100">100</option>
						  </select> entries
						</label>
	  				</div>
	  			</div>
		  	   <div class="col-sm-6">
		  			<div class="dataTables_filter">
              <!-- search form -->
              <form action="" method="GET">
                <div class="input-group">
                  <input type="text" name="input_cari" class="form-control" placeholder="Search...">
                      <span class="input-group-btn">
                        <button type="submit" name="result" value="Keyword" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                      </span>
                </div>
              </form>
	 		   </div>
	  	   </div>

	<div class="row">
	  	<div class="col-sm-12">
	  		<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
	    		<thead>
	    			<tr role="row">

		    			<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" style="width: 77px;" aria-sort="ascending">No</th>


	    				<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" style="width: 77px;" aria-sort="ascending">User ID</th>

	    				<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 101px;">Nama</th>

	    				<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 86px;">Email
	    				</th>

	    				<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 86px;">Username
	    				</th>

	    				<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 64px;">Password
	    				</th>

	    				<th colspan="2">Action
	    				</th>

	    			</tr>
        		</thead>

        		<?php 

            $input_cari = @$_GET['input_cari'];
            $cari = @$_GET['result'];


        if($cari)
         {

            // jika kotak pencarian tidak sama dengan kosong
            if($input_cari != "") 
            {
                // query mysql untuk mencari berdasarkan nama
                $sql = mysql_query("SELECT * FROM tbl_master_admin WHERE nama_admin like '%$input_cari%'") or die (mysql_error());   
            } 
            else 
            {
              $sql = mysql_query("SELECT * FROM tbl_master_admin") or die (mysql_error());
            }
          }

        else 
          {
            $sql = mysql_query("SELECT * FROM tbl_master_admin") or die (mysql_error());
          }

         // mengecek data
         $cek = mysql_num_rows($sql);
         // jika data kurang dari 1
         if($cek < 1) 
          {

        ?>
         <tr> <!--muncul peringata bahwa data tidak di temukan-->
          <td colspan="10" align="center" style="padding:10px; color: rgb(255,0,0);"><b>Data Tidak Ditemukan!</b></td>
         </tr>
      <?php
          } 
          
          else 
          {

            


        	//include '../controllers/connect.php';
					//$query = "SELECT * FROM tbl_master_admin";
					//$execute = mysql_query($query) or trigger_error(mysql_error().$query);
        			$no=1;
        			while ($data= mysql_fetch_array($sql))
        			{	
        			
        				
        				if ($no%2 == 0) 
        				{
        					echo "<tr role='row' class='even'>";
        				}
        				else
        				{
        					echo "<tr role='row' class='odd'>";
        				}
	        					echo "<td>$no</td>";
	        					echo "<td>$data[adminID]</td>";
	        					echo "<td>$data[nama_admin]</td>";
	        					echo "<td>$data[email]</td>";
	        					echo "<td>$data[username]</td>";
	        					echo "<td>$data[password]</td>";
	        					echo "<td><a href='update_admin.php?adminID=".$data['adminID']."'><button type='button' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-edit'></span> Update&nbsp&nbsp</button></a>
					                  <a href='controllers/doDeleteAdmin.php?adminID=".$data['adminID']."' onclick='return konfirmasi()'><button type='button' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span> Delete</button></a></td>";
					            echo "</tr>";

				            $no++;//tambah nomor
        					
        					/*echo"
				            <tbody>
				                  <td>".$no."</td>
				                  <td>".$data['adminID']."</td>
				                  <td>".$data['nama_admin']."</td>
				                  <td>".$data['username']."</td>
				                  <td>".$data['password']."</td>
				                  <td><a href='update_admin.php?adminID=".$data['adminID']."'><button type='button' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-edit'></span> Update&nbsp&nbsp</button></a>
				                  <a href='doDelete.php?adminID=".$data['adminID']."' onclick='return konfirmasi()'><button type='button' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span> Delete</button></a></td>
				                </tr>
				            </tbody>";*/
	           		}
              }
        		?>
       		</table>
       </div>
    </div>
    
    <div class="row">
       <div class="col-sm-5">
       		<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
       		</div>
       </div>
       
       <div class="col-sm-7">
       		<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
			       <ul class="pagination">
			       		<li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
			       		</li>
			       		<li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
			       		</li>
			       		<li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
			       		</li>
			       		<li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>
			       		</li>
			       		<li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a>
			       		</li>
			       		<li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a>
			       		</li>
			       		<li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a>
			       		</li>
			       		<li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>
			       		</li>
		       		</ul>
       			</div>
       		</div>
    	</div>
  	</div>
</div>
      
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
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
<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 if (tanya == true) return true;
 else return false;
 }</script>
</body>
</html>


