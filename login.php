<?php
if(isset($_GET['i'])){
	$i = $_GET['i'];
	settype($i,'int');
	if($i == 1){
		echo '<script>alert("Đăng nhập để tiếp tục");</script>';
	}
	if($i == 2){
		echo '<script>alert("Đăng nhập lại để tiếp tục");</script>';
	}
	if($i == 3){
		echo '<script>alert("Đăng xuất thành công");</script>';
	}
}
session_start();
if(isset($_SESSION['username'])){
	header("Location: menu");
}
else{
?>
<!doctype html>
<html lang="vi" class="fullscreen-bg">

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
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	
	<script type="text/javascript" src="assets/vendor/jquery/jquery.js"></script>
	<script src="//www.google.com/recaptcha/api.js?hl=vi"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><h3><i class="fa fa-diamond"></i> BOT AUTO THẢ TIM CỰC CHẤT <i class="fa fa-diamond"></i></h3></div>
								<p class="lead">Đăng nhập tài khoản của bạn</p>
							</div>
							<form class="form-auth-small" action="index.php">
								<div class="form-group">
									<label for="signin-username"  class="control-label sr-only">Tên đăng nhập</label>
									<input type="text" class="form-control" name="username" id="signin-username" placeholder="Tên đăng nhập" required="">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Mật khẩu</label>
									<input type="password" name="password" class="form-control" id="signin-password"  placeholder="mật khẩu" required="">
								</div>
<!--      <div class="g-recaptcha" data-sitekey="6Lf11ycUAAAAAPBDFNpHELGl8yBGeK3uYeEqFLt6"></div> -->



								<input type="hidden" name="dangnhap">
								<button type="submit" class="btn btn-primary btn-lg btn-block">Đăng nhập</button>
								
									<button class="btn btn-default"><a href="//thatim.bizweb.mobi/register.php"> Đăng ký tài khoản</a></button>
								
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<center><h1 class="heading"><i class="fa fa-diamond"></i> CHÀO MỪNG QUÝ KHÁCH ĐẾN VỚI THATIM.BIZWEB.MOBI <i class="fa fa-diamond"></i></h1></center>
							
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
  
  


<script type="text/javascript">
	$('form').submit(function(e){
        $(this).find('button').attr('disabled','');
        $(this).find('button').html('<i class="fa fa-spinner faa-spin animated"></i> Đang xử lý');
        $.post('post/login.php',$(this).serialize()).done(function(data){
           alert(data);
           window.location = window.location;
        }).fail(function(data){
            alert('Lỗi');
            window.location = window.location;
        });
        return false   
    });
</script>

</body>

</html>
<?php	
}
?>