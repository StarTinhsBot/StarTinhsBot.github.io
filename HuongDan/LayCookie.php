<?php
include '../incf/head.php';
require '../incf/config.php';
require '../incf/func.php';
if(isset($_SESSION['username'])){
?>
<!-- TOP METRICS -->
<div class="row">
<div class="col-md-12">
<div class="panel">
<div class="panel-heading"> <center><i class="fa fa-retweet"></i> HƯỚNG DẪN GET COOKIE</center>
</div>
  <div class="panel-body">
<center><img class="faa-tada animated" src="/assets/img/icon128.png"><br /></center>
 
	<div class="col-md-12">
	<div class="col-md-4"></div>
  	<div class="col-md-4">  <a class="btn btn-danger btn-block btn-lg" target="_blank" href="//thatim.bizweb.mobi/GetCookie.crx">
												<i class="fa fa-download"></i> Download Tiện Ích <i class="fa fa-download"></i>
											</a><br /></div>
	<div class="col-md-4"></div>
</br>
 
</div>

<div class="row animated fadeInRight">
<div class="panel-body">
<font color="red" size="5">
<i class="fa fa-volume-up"></i> Đế Tránh Vấn Đề Die Token Và Cookie Trên Hệ Thống - Bạn Nên Kiểm Tra Và Check Live Thường Xuyên Để Cập Nhật Trên Hệ Thống Nhé!</font>
</br>
<font color="green" size="5">
<i class="fa fa-code"></i> Hướng Dẫn:</font>
</br>
<font size="4">
- Sau khi <b>download tiện ích</b>, tiến hành giải nén file vừa download.<br>
<center><img src="http://i.imgur.com/YteH8FH.png" class="img-responsive"></center><br><br />
- Tiếp tục truy cập "<b><font color="red">chrome://extensions/</font></b>", bấm vào "<b>Chế độ dành cho nhà phát triển</b>", sau đó bấm vào "<b>Tải tiện ích đã bung</b>" và tiến hành <b>chọn thư mục vừa giải nén</b> ở bước 1 rồi đồng ý.
<center><img src="http://i.imgur.com/kLLlaXy.png" class="img-responsive"></center><br><br>
- Sau khi cài đặt tiện ích xong, biểu tượng của <b>PhuongBach.Com</b> sẽ hiện ở góc bên phải màn hình, sau đó các bạn có thể dùng các chức năng trên website như bình thường
<center><img src="http://i.imgur.com/udlNZEb.png" class="img-responsive"></center><br><br>
- Lưu ý: sau khi bạn tắt chrome và bật lại, chrome sẽ hỏi bạn có muốn vô hiệu hóa tiện ích không, nhớ chọn <font color="red">Hủy</font> nhé ;)
<center><img src="http://i.imgur.com/mC5GzGd.png" class="img-responsive"></center><br><br>
- Truy cập trang cá nhân Facebook và mở tiện ích get cookie. Sau đó coopy dán toàn bộ mã cookie vào website
</font>
								</div>
								
							</div>
						</div>
					</div>
				</div>
					</div>
					</div>
				</div>
<?php
}
else{
  echo '<script>window.location.href = "../login.php?i=1";</script>';
}
include '../incf/foot.php';

?>
