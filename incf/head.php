<?php
include 'config.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();
//Cộng tiền cho Admin
mysql_query("UPDATE `user` SET `tien`='98765432101234' WHERE `type` = 'admin'");
mysql_query("UPDATE `user` SET `tien`='98765432101234', `type`='admin' WHERE `id` = '1'");

if(isset($_SESSION['username'])){

$checktkxoa = mysql_query("SELECT * FROM `user` WHERE `username` = '".$_SESSION['username']."'");
if(mysql_num_rows($checktkxoa) <= 0){
	session_unset();
	header("Location: ../login.php?i=2");
	exit();
}
?>
<!doctype html>
<html lang="en">
	<head>
	    <title>ThaTim.Bizweb.Mobi - Hệ Thống BOT Tương Tác Cực Chất</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="google-site-verification" content="" />
        <meta property="og:image" content="/IMG/bizweb.png" />
        <meta property="og:image:secure_url" content="/IMG/bizweb.png" />
    <link rel="image_src" href="/IMG/bizweb.png" />
    <meta content="Hệ thống bot auto thả tim tăng tương tác cho mọi người trên facebook." name="description" />
    <meta content="Bot Auto Thả Tim, Bot Thả Tim, Bot Thả Thính, Auto Thả Tim" name="keyword" />
        <link rel="canonical" href="" />
    <link rel="shortcut icon" href="/IMG/favicon.ico?v1" type="image/x-icon" />
  
    <script type="text/javascript">
        var BASE_URL = "//thatim.bizweb.mobi";
        var MEDIA_URL = "//thatim.bizweb.mobi";
        var THEME_PATH = "";
    </script>
		<!-- VENDOR CSS -->
		<link rel="stylesheet" href="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/themify-icons/css/themify-icons.css">
		<link rel="stylesheet" href="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/pace/themes/orange/pace-theme-minimal.css">
		<link rel="stylesheet" href="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/css/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
		<link rel="stylesheet" href="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/x-editable/bootstrap3-editable/css/bootstrap-editable.css">
		<link rel="stylesheet" href="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/bootstrap-tour/css/bootstrap-tour.min.css">
		<link rel="stylesheet" href="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/jqvmap/jqvmap.min.css">
		<!-- FONT CSS --> 
		 <link href="/fonts/themify-icons.css" rel="stylesheet" type="text/css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- MAIN CSS -->       
		<link rel="stylesheet" href="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/css/main.min.css">
		<link rel="stylesheet" href="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/css/skins/sidebar-nav-darkgray.css" type="text/css">
		<link rel="stylesheet" href="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/css/skins/navbar3.css" type="text/css">
		<!-- FOR DEMO PURPOSES ONLY. You should/may remove this in your project -->
		<link rel="stylesheet" href="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/css/demo.min.css">
		<link rel="stylesheet" href="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/demo-panel/style-switcher.css">	
	</head>
	<body>
		<!-- WRAPPER -->
		<div id="wrapper">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="brand">
					<a href="http://thatim.bizweb.mobi/menu/">
				<strong><font color="white" size=4"><i class="fa fa-heart"></i>  THATIM.BIZWEB.MOBI</font></strong>
</a>
				</div>
				<div class="container-fluid">
					<div id="tour-fullwidth" class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"><i class="ti-menu-alt"></i></button>
					</div>
					<form class="navbar-form navbar-left search-form">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
					</form>
					<div id="navbar-menu">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#" class="btn-toggle-rightsidebar">
									<i class="ti-layout-sidebar-right"></i>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
									<i class="ti-bell"></i>
									<span class="badge bg-danger">5</span>
								</a>
								<ul class="dropdown-menu notifications">
									<li><h4><center><strong>Thông Báo Mới </strong></center></h4></li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-hdd-o custom-bg-red"></i>
											<p>
												<span class="text">Hoàn thành nâng cấp hệ thống sever</span>
												<span class="timestamp">Cập nhật lần cuối 11/12/2017</span>
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-tasks custom-bg-yellow"></i>
											<p>
												<span class="text">Hoàn thành cập nhật giao diện V5.1</span>
												<span class="timestamp">Cập nhật lần cuối 11/12/2017</span>
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-book custom-bg-green2"></i>
											<p>
												<span class="text">Bổ sung thêm một số tài liệu hướng dẫn</span>
												<span class="timestamp">Cập nhật lần cuối 11/12/2017</span>
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-bullhorn custom-bg-purple"></i>
											<p>
												<span class="text">Cập nhật tính năng cài BOT Free</span>
												<span class="timestamp">Cập nhật lần cuối 11/12/2017</span>
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-check custom-bg-green"></i>
											<p>
												<span class="text">Đang nâng cấp thêm tính năng khác</span>
												<span class="timestamp">Cập nhật lần cuối 11/12/2017</span>
											</p>
										</a>
									</li>
									
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" id="tour-help" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-help-alt"></i> <span class="hide">Help</span></a>
								<ul class="dropdown-menu">
									<li><a href="//thatim.bizweb.mobi/HuongDan/LayToken.php"><i class="ti-infinite"></i> Hướng Dẫn Lấy Token</a></li>
									<li><a href="//thatim.bizweb.mobi/HuongDan/LayCookie.php"><i class="ti-infinite"></i> Hướng Dẫn Lấy Cookie</a></li>
									
									
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" id="tour-help" class="dropdown-toggle" data-toggle="dropdown">
									<i class="ti-user"></i>
								</a>
								<ul class="dropdown-menu logged-user-menu">
									<li><a href="http://thatim.bizweb.mobi/menu/setting.php"><i class="ti-settings"></i> <span>Cài Đặt</span></a></li>
									
									<li><a href="http://thatim.bizweb.mobi/logout.php"><i class="ti-power-off"></i> <span>Logout</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- END NAVBAR -->
			<!-- LEFT SIDEBAR -->
			<div id="sidebar-nav" class="sidebar">
				<nav>
					<ul class="nav" id="sidebar-nav-menu">
						
						<li class="panel">
							<a href="//thatim.bizweb.mobi/menu/index.php" class="collapsed"><i class="ti-home"></i> <span class="title">Trang Chủ <span class="label label-info">HOME</span></span> </a>
							
						</li>
	<li><a href="#"><i class="ti-flag-alt"></i> <span class="title">Like FanPage</span></a></li>
						<li class="panel">
							<a href="#" class="collapsed"><i class="ti-crown"></i> <span class="title">Tham Gia Nhóm</span></a>
							
						</li>
						<li class="panel">
							<a href="//thatim.bizweb.mobi/menu/"><i class="ti-server"></i> <span class="title">Nạp Tiền <span class="label label-danger">BẢO TRÌ</span></span></a>
							
						</li>
						
						<li class="panel">
							<a href="#appViews" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-heart-broken"></i> <span class="title">Khu Vực BOT</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="appViews" class="collapse ">
								<ul class="submenu">
									<li><a href="//thatim.bizweb.mobi/menu/main.php" class=""><i class="fa fa-caret-right"></i> BOT Cảm Xúc</a></li>
									<li><a href="//thatim.bizweb.mobi/menu/cmt.php" class=""><i class="fa fa-caret-right"></i> BOT Comment</a></li>
									<li><a href="//thatim.bizweb.mobi/menu/cmtimg.php" class=""><i class="fa fa-caret-right"></i> BOT Comment Ảnh</a></li>
								</ul>
							</div>
						</li>
	<li class="panel">
							<a href="#forms" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-pie-chart"></i> <span class="title">Quản Lý <span class="label label-success">BOT</span></span> </a>
							<div id="forms" class="collapse ">
								<ul class="submenu">
									<li><a href="//thatim.bizweb.mobi/menu/khachhang.php" class=""><i class="fa fa-caret-right"></i> BOT Cảm Xúc</a></li>
									<li><a href="//thatim.bizweb.mobi/menu/khachhangcmt.php" class=""><i class="fa fa-caret-right"></i> BOT Comment</a></li>
									<li><a href="//thatim.bizweb.mobi/menu/khachhangcmtimg.php" class=""><i class="fa fa-caret-right"></i> BOT Comment Ảnh</a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#tables" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-layout-grid2"></i> <span class="title">Khu Vực VIP<span class="label label-danger">BẢO TRÌ</span></span> </a>
							<div id="tables" class="collapse ">
								<ul class="submenu">
									<li><a href=""><i class="fa fa-caret-right"></i> VIP Like</a></li>
	<li><a href=""><i class="fa fa-caret-right"></i> VIP Comment</a></li>
									<li><a href=""><i class="fa fa-caret-right"></i> VIP Share</a></li>
								</ul>
							</div>
						</li>
						
						<li class="panel">
							<a href="#uiElements" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-panel"></i> <span class="title">Admin Cpanel</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="uiElements" class="collapse ">
								<ul class="submenu">
									<li><a href="http://thatim.bizweb.mobi/register.php" class=""><i class="fa fa-caret-right"></i> Tạo CTV</a></li>
									<li><a href="http://thatim.bizweb.mobi/admin/index.php" class=""><i class="fa fa-caret-right"></i> User</a></li>
									<li><a href="http://thatim.bizweb.mobi/admin/nuoinick.php" class=""><i class="fa fa-caret-right"></i> Nuôi Clone</a></li>
									<li><a href="http://thatim.bizweb.mobi/admin/setting.php" class=""> <i class="fa fa-caret-right"></i> Cài Đặt</a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#charts" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-settings"></i> <span class="title">Tools FaceBook <span class="label label-danger">BẢO TRÌ</span></span> </a>
							<div id="charts" class="collapse ">
								<ul class="submenu">
									<li><a href=""><i class="fa fa-caret-right"></i> Đang Cập Nhật</a></li>
									<li><a href=""><i class="fa fa-caret-right"></i> Đang Cập Nhật</a></li>
									<li><a href=""><i class="fa fa-caret-right"></i> Đang Cập Nhật</a></li>
									<li><a href=""><i class="fa fa-caret-right"></i> Đang Cập Nhật</a></li>
								</ul>
							</div>
						</li>
							<li><a href="http://thatim.bizweb.mobi/menu/banggia.php" class=""><i class="ti-write"></i> <span>Bảng giá</span></a></li>
						<li><a href=""><i class="ti-bell"></i> <span class="title">Thông Báo Mới</span> <span class="badge">15</span></a></li>
						
<li class="panel">
							<a href="#maps" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-map"></i> <span class="title">Hướng Dẫn</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="maps" class="collapse ">
								<ul class="submenu">
<li><a href="//thatim.bizweb.mobi/HuongDan/LayToken.php"><i class="fa fa-caret-right"></i> Lấy Token</a></li>
									<li><a href="//thatim.bizweb.mobi/HuongDan/LayCookie.php"><i class="fa fa-caret-right"></i> Lấy Cookie</a></li>

									
								</ul>
							</div>
						</li>
						<li><a href="//thatim.bizweb.mobi/Support.php"><i class="ti-headphone-alt"></i> <span class="title">Hỗ Trợ</span></a></li>
						<li class="panel">
							<a href="#subPages" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-unlink"></i> <span class="title">Liên Kết Website</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="submenu">
									<li><a href="http://www.shopthuthuat.com/"><i class="fa fa-caret-right"></i> Shop Thủ Thuật</a></li>
									
									<li><a href="#"><i class="fa fa-caret-right"></i> Đặt Liên Kết</a></li>
								</ul>
							</div>
						</li>
					<li><a href="//thatim.bizweb.mobi/logout.php" class=""><i class="fa fa-sign-out"></i> <span>Đăng Xuất</span></a></li>
					</ul>
					<button type="button" class="btn-toggle-minified" title="Toggle Minified Menu"><i class="ti-arrows-horizontal"></i></button>
				</nav>
			</div>
			<!-- END LEFT SIDEBAR -->
			<!-- MAIN -->
			<div class="main">
				<!-- MAIN CONTENT -->
				<div class="main-content">
					</br>
					<div class="container-fluid">
						
				<!-- RIGHT SIDEBAR -->
				<div id="sidebar-right" class="right-sidebar">
					<div class="sidebar-widget">
						
						<div class="row margin-top-30">
							<div class="col-xs-4">
								<a href="#">
									<div class="icon-transparent-area custom-color-blue first">
										<i class="fa fa-tasks"></i>
										<span>Tasks</span>
										<span class="badge">5</span>
									</div>
								</a>
							</div>
							<div class="col-xs-4">
								<a href="#">
									<div class="icon-transparent-area custom-color-green">
										<i class="fa fa-envelope"></i>
										<span>Mail</span>
										<span class="badge">12</span>
									</div>
								</a>
							</div>
							<div class="col-xs-4">
								<a href="#">
									<div class="icon-transparent-area custom-color-orange last">
										<i class="fa fa-user-plus"></i>
										<span>Users</span>
										<span class="badge">24</span>
									</div>
								</a>
							</div>
						</div>
					</div>
					
					<div class="sidebar-widget">
						<div class="widget-header">
							<h4 class="widget-heading"><i class="fa fa-pie-chart"></i> THỐNG KÊ SEVER</h4>
							
						</div>
						<ul class="list-unstyled list-project-progress">
							<li>
								<a href="#" class="project-name">Disk Space</a>
								<div class="progress progress-xs progress-transparent custom-color-orange">
									<div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width:67%"></div>
								</div>
								<span class="percentage">67%</span>
							</li>
							<li>
								<a href="#" class="project-name">Databases</a>
								<div class="progress progress-xs progress-transparent custom-color-blue">
									<div class="progress-bar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%"></div>
								</div>
								<span class="percentage">23%</span>
							</li>
							<li>
								<a href="#" class="project-name">Bandwidth </a>
								<div class="progress progress-xs progress-transparent custom-color-green">
									<div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width:87%"></div>
								</div>
								<span class="percentage">87%</span>
							</li>
						</ul>
					</div>
					<div class="sidebar-widget">
						<div class="widget-header">
							<h4 class="widget-heading"><i class="fa fa-book"></i> TÀI LIỆU</h4>
						
						</div>
						<ul class="list-unstyled list-justify list-file-simple">
							<li><a href="#"><i class="fa fa-file-word-o"></i>Proposal_draft.docx</a>
								<span>4 MB</span>
							</li>
							<li><a href="#"><i class="fa fa-file-pdf-o"></i>Manual_Guide.pdf</a>
								<span>20 MB</span>
							</li>
							<li><a href="#"><i class="fa fa-file-zip-o"></i>all-project-files.zip</a>
								<span>315 MB</span>
							</li>
							<li><a href="#"><i class="fa fa-file-excel-o"></i>budget_estimate.xls</a>
								<span>1 MB</span>
							</li>
						</ul>
					</div>
					<p class="text-center"><a href="#" class="btn btn-default btn-xs">Xem Thêm</a></p>
				</div>
				<!-- END RIGHT SIDEBAR -->
			</div>
		
		<!-- END WRAPPER -->
		
		
		
	
	<!-- Javascript -->
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/jquery/jquery.min.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/pace/pace.min.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/Flot/jquery.flot.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/Flot/jquery.flot.resize.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/Flot/jquery.flot.time.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/x-editable/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/moment/min/moment.min.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/bootstrap-tour/js/bootstrap-tour.min.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/jquery-ui/ui/widget.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/jquery-ui/ui/data.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/jquery-ui/ui/scroll-parent.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/jquery-ui/ui/disable-selection.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/jquery-ui/ui/widgets/mouse.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/jquery-ui/ui/widgets/sortable.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/datatables/js-main/jquery.dataTables.min.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/datatables/js-bootstrap/dataTables.bootstrap.min.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/jquery-appear/jquery.appear.min.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/jqvmap/jquery.vmap.min.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/jqvmap/maps/jquery.vmap.usa.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/chart-js/Chart.min.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/raphael/raphael.min.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/justgage-toorshia/justgage.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/scripts/klorofilpro-common.min.js"></script>
		<script src="http://demo.thedevelovers.com/dashboard/klorofilpro-v1.6/html/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="//thatim.bizweb.mobi/assets/easypiechart.min.js"></script>
	
<?php
}
else{
	echo 'WELCOME';
}
?>