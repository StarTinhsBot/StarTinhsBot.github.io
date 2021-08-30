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

    <!-- VENDOR CSS -->
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
</head>

<body class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="position: relative; top: 50px;">
        <div class="panel">
            <div class="panel-heading">								<div class="logo text-center"><h3><i class="fa fa-diamond"></i> BOT AUTO THẢ TIM CỰC CHẤT <i class="fa fa-diamond"></i></h3>
								<p class="lead">Đăng ký tài khoản của bạn</p>
							</div></div>
            <div class="panel-body">
            <form class="form-auth-small" role="form" method="post">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Tên đăng nhập</label>
                                    <input type="text" class="form-control" name="username" id="username"  required="" placeholder="Tên đăng nhập">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Mật khẩu</label>
                                    <input type="password" class="form-control" name="pass" id="password" required=""  placeholder="mật khẩu">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control" name = "repass" id="repass" required="" placeholder="nhập lại mật khẩu">
                                </div>
                              
                                <input type="hidden" name="dangky">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Đăng ký</button>
                                <div class="text-center">
                                <br />
<button class="btn btn-default"><a href="//thatim.bizweb.mobi/login.php"> Quay lại đăng nhập</a></button>
                                    
                                </div>
                            </form></div>
        </div>

    </div>
        <div class="col-md-3"></div>
<script type="text/javascript">
    $('form').submit(function(e){
        $(this).find('button').attr('disabled','');
        $(this).find('button').html('<i class="fa fa-spinner faa-spin animated"></i> Đang xử lý');
        $.post('post/reg.php',$(this).serialize()).done(function(data){
            alert(data);
            if(data == 'Đăng ký thành công.'){
                window.location.href = 'login.php';
            }
            else{
                window.location = window.location;
            }
        }).fail(function(data){
            alert('Lỗi');
            window.location = window.location;
        });
        return false   
    });
</script>
</body>

</html>
