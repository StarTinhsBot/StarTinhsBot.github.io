<?php
include 'incf/head.php';
require 'incf/config.php';
require 'incf/func.php';
if(isset($_SESSION['username'])){
?>
<!-- TOP METRICS -->
					<div class="container-fluid">
						<div class="panel panel-profile">
							<div class="clearfix">
								<!-- LEFT COLUMN -->
								<div class="profile-left">
									<!-- PROFILE HEADER -->
									<div class="profile-header">
										<div class="overlay"></div>
										<div class="profile-main">
											<img src="//plus24h.com/resized/images/logo.png?w=90&h=90" class="img-circle" alt="Avatar">
											<h3 class="name">Thọ Đại Tỷ</h3>
											<span class="online-status status-available">Administrator</span>
										</div>
										<div class="profile-stat">
											<div class="row">
												<div class="col-md-4 stat-item">
													<strong>+2356</strong> <i class='ti-user'></i>
													
												</div>
												<div class="col-md-4 stat-item">
													<strong>+15.215</strong>
													<i class='ti-rss-alt'></i>
												</div>
												<div class="col-md-4 stat-item">
													<strong>+2174</strong>
													<i class='ti-heart'></i>
												</div>
											</div>
										</div>
									</div>
									<!-- END PROFILE HEADER -->
									<!-- PROFILE DETAIL -->
									<div class="profile-detail">
										<div class="profile-info">
											<h4 class="heading">Thông Tin Cá Nhân</h4>
											<ul class="list-unstyled list-justify">
												<li>Birthdate
													<span>24-12-19xx</span>
												</li>
												<li>Phone
													<span>(84) 163.789.7164</span>
												</li>
												<li>Email
													<span>Support@Bizweb.com</span>
												</li>
												<li>Website
													<span><a href="https://www.Bizweb.Mobi">Bizweb.Mobi</a></span>
												</li>
											</ul>
										</div>
										<div class="profile-info">
											<h4 class="heading">Mạng Xã Hội</h4>
											<ul class="list-inline social-icons">
												<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
											</ul>
										</div>
										<div class="profile-info">
											<h4 class="heading">Giới Thiệu</h4>
											<p>ThaTim.Bizweb.Mobi là hệ thống BOT hoàn toàn miễn phí giúp tăng khả năng tương tác với mọi người trên Facebook.</p>
										</div>
										<div class="text-center"><a href="#" class="btn btn-primary">Liên Hệ Ngay</a></div>
									</div>
									<!-- END PROFILE DETAIL -->
								</div>
								<!-- END LEFT COLUMN -->
								<!-- RIGHT COLUMN -->
								<div class="profile-right">
									<h4 class="heading">Lĩnh Vực Yêu Thích</h4>
									<!-- AWARDS -->
									<div class="awards">
										<div class="row">
											<div class="col-md-3 col-sm-6">
												<div class="award-item">
													<div class="hexagon">
														<span class="ti-html5 award-icon"></span>
													</div>
													<span>Blogger</span>
												</div>
											</div>
											<div class="col-md-3 col-sm-6">
												<div class="award-item">
													<div class="hexagon">
														<span class="ti-palette award-icon"></span>
													</div>
													<span>Photoshop</span>
												</div>
											</div>
											<div class="col-md-3 col-sm-6">
												<div class="award-item">
													<div class="hexagon">
														<span class="ti-facebook award-icon"></span>
													</div>
													<span>Facebook</span>
												</div>
											</div>
											<div class="col-md-3 col-sm-6">
												<div class="award-item">
													<div class="hexagon">
														<span class="ti-youtube award-icon"></span>
													</div>
													<span>Youtube</span>
												</div>
											</div>
										</div>
										<div class="text-center"><a href="#" class="btn btn-default">Xem thêm</a></div>
									</div>
									<!-- END AWARDS -->
									<!-- TABBED CONTENT -->
									<div class="custom-tabs-line tabs-line-bottom left-aligned">
										<ul class="nav" role="tablist">
											<li class=""><a href="#tab-bottom-left1" role="tab" data-toggle="tab" aria-expanded="false">Hoạt Động Mới</a></li>
											<li class="active"><a href="#tab-bottom-left2" role="tab" data-toggle="tab" aria-expanded="true">Dự Án Website <span class="badge">7</span></a></li>
										</ul>
									</div>
									<div class="tab-content">
										<div class="tab-pane fade" id="tab-bottom-left1">
											<ul class="list-unstyled activity-timeline">
												<li>
													<i class="fa fa-comment activity-icon"></i>
													<p>Phản hồi bình luận của khách hàng 
														<span class="timestamp">2 minutes ago</span>
													</p>
												</li>
												<li>
													<i class="fa fa-cloud-upload activity-icon"></i>
													<p>Tải lên 3 tệp cho dự án
														<span class="timestamp">7 hours ago</span>
													</p>
												</li>
												<li>
													<i class="fa fa-plus activity-icon"></i>
													<p>Tuyển thêm 3 CTV và 5 Đại Lý
														<span class="timestamp">Yesterday</span>
													</p>
												</li>
												<li>
													<i class="fa fa-check activity-icon"></i>
													<p>Đã hoàn thành 70% dự án
														<span class="timestamp">1 day ago</span>
													</p>
												</li>
											</ul>
											<div class="margin-top-30 text-center"><a href="#" class="btn btn-default">Xem thêm</a></div>
										</div>
										<div class="tab-pane fade active in" id="tab-bottom-left2">
											<div class="table-responsive">
												<table class="table project-table">
													<thead>
														<tr>
															<th>Dự Án</th>
															<th>Tiến Độ</th>
															<th>Quản Lý</th>
															<th>Trạng Thái</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><a href="#">DichVu72.Com</a></td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
																		<span>60%</span>
																	</div>
																</div>
															</td>
															<td>
																<img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle"> <a href="#">Thọ Đại Tỷ</a></td>
															<td>
																<span class="label label-warning">Close</span>
															</td>
														</tr>
														<tr>
															<td><a href="#">AutoTheoDoi.Com</a></td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
																		<span>33% </span>
																	</div>
																</div>
															</td>
															<td>
																<img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"> <a href="#">Thọ Đại Tỷ</a></td>
															<td>
																<span class="label label-warning">Close</span>
															</td>
														</tr>
														<tr>
															<td><a href="#">HayLike.Work</a></td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
																		<span>68% </span>
																	</div>
																</div>
															</td>
															<td>
																<img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"> <a href="#">Thọ Đại Tỷ</a></td>
															<td>
																<span class="label label-success">Loading</span>
															</td>
														</tr>
														<tr>
															<td><a href="#">ThaTim.Bizweb.Mobi</a></td>
															<td>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
																		<span>75% </span>
																	</div>
																</div>
															</td>
															<td>
																<img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle"> <a href="#">Thọ Đại Tỷ</a></td>
															<td>
																<span class="label label-success">Loading</span>
															</td>
														</tr>
														<tr>
															<td><a href="#">ShopThuThuat.Com</a></td>
															<td>
																<div class="progress">
																	<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
																		<span>100% </span>
																	</div>
																</div>
															</td>
															<td>
																<img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"> <a href="#">Thọ Đại Tỷ</a></td>
															<td>
																<span class="label label-danger">Xong</span>
															</td>
														</tr>
														<tr>
															<td><a href="#">Bizweb.Mobi</a></td>
															<td>
																<div class="progress">
																	<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
																		<span>100% </span>
																	</div>
																</div>
															</td>
															<td>
																<img src="assets/img/user5.png" alt="Avatar" class="avatar img-circle"> <a href="#">Thọ Đại Tỷ</a></td>
															<td>
																<span class="label label-danger">Xong</span>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!-- END TABBED CONTENT -->
								</div>
								<!-- END RIGHT COLUMN -->
							</div>
						</div>
					</div>
<?php
}
else{
  echo '<script>window.location.href = "../login.php?i=1";</script>';
}
include 'incf/foot.php';

?>
