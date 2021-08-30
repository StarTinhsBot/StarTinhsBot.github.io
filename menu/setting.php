<?php
session_start();
if(isset($_SESSION['username'])){
include '../incf/head.php';
if(isset($_POST['change'])){
    $user = mysql_fetch_array(mysql_query("SELECT * FROM `user` WHERE username = '".$_SESSION['username']."' "));
    $passold = $_POST['passold'];
    $passnew = $_POST['passnew'];
    $repassnew = $_POST['repassnew'];
    if(empty($passold) || empty($passold) || empty($repassnew)){
      echo '<script>alert("Điền đầy đủ các trường.");</script><meta http-equiv="refresh" content="0">';
      die();
    }
    $passoldmd5 = md5($passold);
    if($passoldmd5 != $user['password']){
      echo '<script>alert("Mật khẩu cũ không đúng.");</script><meta http-equiv="refresh" content="0">';
      die();
    }
    if($passnew != $repassnew){
      echo '<script>alert("Mật khẩu không giống nhau");</script><meta http-equiv="refresh" content="0">';
      die();
    }
    if($passold == $passnew){
      echo '<script>alert("Mật khẩu mới không được giống mật khẩu cũ");</script><meta http-equiv="refresh" content="0">';
      die();

    }
    //Mình thích thì mình thêm thôi ^^
    if($user['username'] != $_SESSION['username']){
      echo '<script>alert("Chuyện lồn gì đang xảy ra");</script><meta http-equiv="refresh" content="0">';
      mysql_query("DELETE FROM `user` WHERE username = '".$_SESSION['username']."'");
      session_unset();
      die();
    }
    $pass= md5($repassnew);
    mysql_query("UPDATE `user` SET `password`='".$pass."' WHERE `username` = '".$_SESSION['username']."'");
    echo '<script>alert("Đổi mật khẩu thàng công! Đăng nhập lại để tiếp tục");</script><meta http-equiv="refresh" content="0">';
    session_unset();

}
else{

?>
<div class="col-md-12">
  <!-- BASIC TABLE -->

  <div class="panel">
    <div class="panel-heading">
      <h3 class="panel-title">
        Thay đổi mật khẩu
      </h3>
    </div>
    <div class="panel-body">
        <form action="" method="POST">
          <div class="form-group">
            <label for="passold">Mật khẩu cũ:</label>
            <input type="text" class="form-control" required="" name="passold" id="passold">
          </div>
          <div class="form-group">
            <label for="passnew">Mật khẩu mới:</label>
            <input type="password" class="form-control" required="" name="passnew" id="passnew">
          </div>
          <div class="form-group">
            <label for="repassnew">Nhập lại mật khẩu mới:</label>
            <input type="password" class="form-control" name="repassnew" id="repassnew">
          </div>
          <button class="btn btn-block btn-info" type="submit" required="" name="change">Đổi mật khẩu</button>
        </form>
    </div>
  </div>
  <!-- END BASIC TABLE -->
</div>
<?php 
}
include '../incf/foot.php';
}
else{
  echo '<meta http-equiv="refresh" content="0; url=https://vietfb.me">';
}
?>
