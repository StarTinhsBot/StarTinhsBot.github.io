<?php
session_start();
if(!$_SESSION['username']){
  echo '<meta http-equiv=refresh content="1; URL=//thatim.bizweb.mobi/login.php?i=3">';
  exit();
}
if(isset($_SESSION['username'])){
include '../incf/head.php';
    include '../incf/func.php';
    include '../incf/config.php';
    if(isset($_POST['id'])){
    $idxoa =  implode(',',$_POST['id']);
    settype($idxoa, 'int');
    $check = mysql_fetch_array(mysql_query("SELECT * FROM `khachhang` WHERE id = '".$idxoa."' "));
      if($check['useradd'] = $_SESSION['username']){
          mysql_query ("DELETE FROM `khachhang` WHERE `id` IN (".$idxoa.")");
          /*mysql_query("DELETE FROM khachhang WHERE id IN (".implode(',',$_POST['id']).")");
          */
          header("Location: /menu/khachhang.php?thongbao=3");
      }
    }
    if(isset($_GET['sua'])){
        $id = $_GET['sua'];
        settype($id, 'int');
        $checkedit = mysql_fetch_array(mysql_query("SELECT * FROM `khachhang` WHERE id = '".$id."' "));
        if($checkedit['useradd'] != $_SESSION['username']){
          if($_SESSION['type'] == 'admin'){
            echo '<script>alert("Người thêm '.$checkedit['useradd'].', cân nhắc trước khi sửa");</script>';
          }else{
          echo '<script>alert("Khách hàng này không do bạn quản lý, chúng tôi đã lưu bạn vào danh sách đen của hệ thống! Khi vi phạm quá 3 lần tài khoản của bạn sẽ bị xóa bởi hệ thống! Nếu bạn thấy do nhầm lẫn vui lòng liên hệ với Admin để được xóa khỏi danh sách đen.");</script><meta http-equiv="refresh" content="0">
';
          session_unset();
          exit();

          }

        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sửa thông tin người dùng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<?php 
$info = thongtinkhach($id);
?> 
<div class="row">

<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading"><center><i class="fa fa-cog"></i> Chỉnh sửa thông tin User</center></div>
    <div class="panel-body">
<form class="form-horizontal" method="POST" action="/post/update.php">
         	<div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-success" type="button"><i class="fa fa-user"></i> Name:</button>
											</span>
           <input type="text" class="form-control" disabled value="<?php echo $info['name'];?>">
            </div>
          </br>
          <input type="hidden" class="form-control" name="fuckid" value="<?php echo $info['id'];?>">
          <div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-success" type="button"><i class="fa fa-pie-chart"></i> Cookie:</button>
											</span>
              <input type="text" class="form-control" value="<?php echo $info['cookie'];?>" name="cookie" placeholder="Dán Cookie vào đây...">
            </div>
          </br>
         	<div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-success" type="button"><i class="fa fa-retweet"></i> Access_Token:</button>
											</span>
              <input type="text" class="form-control" value="<?php echo $info['token'];?>" name="token" placeholder="Dán Token vào đây...">
            </div>
          </br>

         <div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-success" type="button"><i class="fa fa-clock-o"></i> Thời gian (tháng):</button>
											</span>
        <input type="number" class="form-control" name="thoigian" placeholder="Số tháng">
            </div>
            
          </br>
            <div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-success" type="button"><i class="fa fa-heart"></i> Cảm xúc:</button>
											</span>
        <select class="form-control" name="camxuc">
              <option value="like">LIKE</option>
              <option value="love">LOVE</option>
              <option value="haha">HAHA</option>
              <option value="sad">SAD</option>
              <option value="wow">WOW</option>
              <option value="angry">ANGRY</option>
           </select>
            </div>
          </br>
          <div class="form-group text-center">
            <input type="hidden" name="action" value="themkhachang">
            <a href="/menu/khachhang.php" class="btn btn-default">
              Quay lại
            </a>
            <button type="submit" class="btn btn-danger">
              Thêm khách hàng
            </button>
          </div>
</form>

    </div>
  </div>
  </div>
  <div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading"><center><i class="fa fa-exchange"></i> Thông Tin Người Dùng</center></div>
        <div class="panel-body">
        <ul class="list-group">
          <li class="list-group-item">Tên Facebook:<span class="badge"><?php echo $info['name'];?></span></li>
          <li class="list-group-item">UID Facebook:<span class="badge"><?php echo $info['user_id'];?></span></li> 
          <li class="list-group-item">Người thêm: <span class="badge"><?php echo $info['useradd'];?></span></li> 
          <?php
            switch ($info['camxuc']) {
                case '1':
                  $cx = 'LIKE';
                  break;
                case '2':
                  $cx = 'LOVE';
                  break;
                case '3':
                  $cx = 'WOW';
                  break;
                case '4':
                  $cx = 'HAHA';
                  break;
                case '8':
                  $cx = 'ANGRY';
                  break;
                default:
                  $cx = 'LOVE';
                  break;
              }
              $songayh = $info['timemua'] - time();
          ?>
          <li class="list-group-item">Cảm xúc: <span class="badge"><?php echo $cx;?></span></li>
          <li class="list-group-item">Còn lại: <span class="badge"><?php echo ham_chuyen_doi($songayh);?></span></li>
          <center><li class="list-group-item">Token: <?php echo checklivetk($info['token']);?> Cookie: <?php echo checkliveck($info['cookie']);?></li></center>
        </ul>
        </div>
    </div>

  </div></div>
</div>

		<div class="clearfix"></div>
<style>
/* CSS Footer */
#footer-wrappers{
 position:relative;
 overflow:hidden;
 padding-bottom:20px;
 background:#333333;
 width: 100%;
 height: 45px;}
#footerfix{font-weight:400;height:18px;}
#credit{color:#dddddd;font-size:15px;margin:20 auto;background:#333333;padding-top:2px}
.cpleft{margin-top:0px;text-align:center;margin-right:10px}
.footer{font-weight:400;padding-bottom:.2em}

</style>
		<footer id='footer-wrappers'>
<div id='footerfix'>
<div id='credit'>
<div class='cpleft'>
  <strong> &nbsp Copyright &#169; 2017 ThaTim.Bizweb.Mobi</a>
</strong>
</div>
</div>
</div>
</footer>
</body>
</html>

    <?php
    }   
}else{
    echo 'WELCOME TO VIETNAM';
}

?>