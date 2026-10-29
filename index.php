<?php
    //Mulai Sesion
    session_start();
    if (isset($_SESSION["ses_username"])==""){
		header("location: member.php");
    
    }else{
      $data_id = $_SESSION["ses_id"];
      $data_nama = $_SESSION["ses_nama"];
      $data_user = $_SESSION["ses_username"];
      $data_level = $_SESSION["ses_level"];
    }

	include "inc/koneksi.php";
	include "inc/rupiah.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Visa.Net - Tagihan Bulanan</title>
	<link rel="icon" href="dist/img/logov.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/select2.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

	<!-- Google Font: Inter / Clean White Theme Styling -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		<style>
		body, .content-wrapper, .main-header, .main-sidebar, .main-footer {
			font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;
		}
		.skin-blue-light .main-header .logo {
			background: linear-gradient(135deg, #ffffff, #e0f2fe);
			color: #1e40af;
			border-bottom: 1px solid #dbeafe;
			border-right: 1px solid #dbeafe;
			font-weight: bold;
		}
		.skin-blue-light .main-header .navbar {
			background: linear-gradient(90deg, #2563eb, #3b82f6);
			border-bottom: none;
		}
		.skin-blue-light .main-header .navbar .sidebar-toggle {
			color: #ffffff;
		}
		.skin-blue-light .main-header .navbar .sidebar-toggle:hover {
			background: rgba(255, 255, 255, 0.2);
		}
		.navbar-custom-menu .navbar-nav > li > a {
			color: #ffffff !important;
		}
		.skin-blue-light .main-sidebar {
			background-color: #ffffff;
			border-right: 1px solid #e2e8f0;
		}
		.skin-blue-light .sidebar-menu > li > a {
			color: #374151;
			font-weight: 600;
			border-left: 3px solid transparent;
			transition: all 0.2s ease;
		}
		.skin-blue-light .sidebar-menu > li:hover > a,
		.skin-blue-light .sidebar-menu > li.active > a {
			color: #2563eb;
			background: #eff6ff;
			border-left-color: #2563eb;
		}
		.skin-blue-light .sidebar-menu > li.active > a > i {
			color: #2563eb;
		}
		.user-panel {
			background: #f8fafc;
			padding: 15px 10px;
			border-bottom: 1px solid #e2e8f0;
			margin-bottom: 5px;
		}
		.user-panel > .info > p {
			color: #1e293b;
			font-weight: 700;
		}
		.content-wrapper {
			background-color: #f1f5f9;
		}
		.main-footer {
			background-color: #ffffff;
			border-top: 1px solid #e2e8f0;
			color: #64748b;
			padding: 15px;
		}
	</style>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="hold-transition skin-blue-light sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="index.php" class="logo">
				<span class="logo-lg">
					<b>VISA.NET</b>
				</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown messages-menu">
							<a class="dropdown-toggle">
								<span>
									<b>
										APLIKASI TAGIHAN VISA.NET
									</b>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<!-- =============================================== -->

		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				</<b>
				<div class="user-panel">
					<div class="pull-left image">
						<img src="dist/img/logov.png" class="" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>
							<?php echo $data_nama; ?>
						</p>
						<span class="label label-warning">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>
				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<HR/>

					<!-- Level  -->
					<?php
          if ($data_level=="Administrator"){
        ?>

					<li class="treeview">
						<a href="?page=admin">
							<i class="fa fa-dashboard"></i>
							<span>Dashboard</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>

					<li class="header">OLAH DATA</li>

					<li class="treeview">
						<a href="?page=data-paket">
							<i class="fa fa-send"></i>
							<span>Data Paket</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>


					<li class="treeview">
						<a href="?page=data-pelanggan">
							<i class="fa fa-users"></i>
							<span>Data Pelanggan</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>

					<li class="header">TAGIHAN & PEMBAYARAN</li>

					<li class="treeview">
						<a href="?page=buat-tagihan">
							<i class="fa fa-edit"></i>
							<span>Buat Tagihan</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>

					<li class="treeview">
						<a href="?page=buka-tagihan">
							<i class="fa fa-table"></i>
							<span>Data Tagihan</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>

					<li class="treeview">
						<a href="?page=lunas-tagihan">
							<i class="fa fa-money"></i>
							<span>Pembayaran Lunas</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>


					<li class="header">OTHER</li>

					<li class="treeview">
						<a href="?page=data_pengguna">
							<i class="fa fa-user"></i>
							<span>Pengguna Sistem</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>

					<?php
					} 
					?>

					<li>
						<a href="logout.php" onclick="return confirm('Anda yakin keluar dari aplikasi ?')">
							<i class="fa fa-sign-out"></i>
							<span>Logout</span>
							<span class="pull-right-container"></span>
						</a>
					</li>


			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<!-- Main content -->
			<section class="content">
				<?php 
      if(isset($_GET['page'])){
          $hal = $_GET['page'];
  
          switch ($hal) {
              //Klik Halaman Home Pengguna
              case 'admin':
                  include "home/admin.php";
                  break;
        
              //Pengguna
              case 'data_pengguna':
                  include "admin/pengguna/data_pengguna.php";
                  break;
              case 'add_pengguna':
                  include "admin/pengguna/add_pengguna.php";
                  break;
              case 'edit_pengguna':
                  include "admin/pengguna/edit_pengguna.php";
                  break;
              case 'del_pengguna':
                  include "admin/pengguna/del_pengguna.php";
				  break;

			//Pengguna
              case 'data-paket':
                  include "admin/paket/data_paket.php";
                  break;
              case 'add-paket':
                  include "admin/paket/add_paket.php";
                  break;
              case 'edit-paket':
                  include "admin/paket/edit_paket.php";
                  break;
              case 'del-paket':
                  include "admin/paket/del_paket.php";
				  break;

			//Pengguna
              case 'data-pelanggan':
                  include "admin/pelanggan/data_pelanggan.php";
                  break;
              case 'add-pelanggan':
                  include "admin/pelanggan/add_pelanggan.php";
                  break;
              case 'edit-pelanggan':
                  include "admin/pelanggan/edit_pelanggan.php";
                  break;
              case 'del-pelanggan':
                  include "admin/pelanggan/del_pelanggan.php";
				  break;

			//Pengguna
              case 'data-tagihan':
                  include "admin/tagihan/data_tagihan.php";
                  break;
              case 'buat-tagihan':
                  include "admin/tagihan/buat_tagihan.php";
				  break;
			case 'buka-tagihan':
                  include "admin/tagihan/buka_tagihan.php";
				  break;
			case 'bayar-tagihan':
                  include "admin/tagihan/bayar_tagihan.php";
				  break;
			case 'lunas-tagihan':
                  include "admin/tagihan/lunas_tagihan.php";
                  break;
			
            

              //default
              default:
				  echo "<center><br><br><br><br><br><br><br><br><br>
				  <h1> Halaman tidak ditemukan !</h1></center>";
                  break;    
          }
      }else{
        // Auto Halaman Home Pengguna
          if($data_level=="Administrator"){
              include "home/admin.php";
              }
            }
    		?>



			</section>
			<!-- /.content -->
		</div>

		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="pull-right hidden-xs" id="live-clock">
				<!-- Waktu akan ditampilkan di sini -->
			</div>
			<strong>Copyright &copy; 2024 VISA.NET </strong>
		</footer>
		
		<script>
			function updateClock() {
				const now = new Date();
				const date = now.toLocaleDateString('id-ID', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
				const time = now.toLocaleTimeString('id-ID');
				document.getElementById('live-clock').innerHTML = date + ' | ' + time;
			}
			setInterval(updateClock, 1000);
			updateClock();
		</script>
		<div class="control-sidebar-bg"></div>

		<!-- ./wrapper -->

		<!-- jQuery 2.2.3 -->
		<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
		<!-- Bootstrap 3.3.6 -->
		<script src="bootstrap/js/bootstrap.min.js"></script>

		<script src="plugins/select2/select2.full.min.js"></script>
		<!-- DataTables -->
		<script src="plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

		<!-- AdminLTE App -->
		<script src="dist/js/app.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="dist/js/demo.js"></script>
		<!-- page script -->


		<script>
			$(function() {
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

		<script>
			$(function() {
				//Initialize Select2 Elements
				$(".select2").select2();
			});
		</script>
</body>

</html>