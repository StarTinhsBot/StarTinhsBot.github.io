<?php
include '../incf/head.php';
include '../incf/func.php';
require '../incf/config.php';
if($_SESSION['type'] == 'admin'){
  if(isset($_POST['setting'])){
    mysql_query("CREATE TABLE IF NOT EXISTS `setting` (
        `tiencamxuc` varchar(255) NOT NULL,
        `tienthuong` varchar(225) NOT NULL,
        `tiencmt` varchar(225) NOT NULL,
        `tiencmtimg` varchar(225) NOT NULL
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
     ");
    $tiencamxuc   =   $_POST['giacamxuc'];
    $tiencmt      =   $_POST['tiencmt'];
    $tienthuong   =   $_POST['tienthuong'];
    $tiencmtimg   =   $_POST['giahinhanh'];
    $check = mysql_query("SELECT * FROM setting");
    if(mysql_num_rows($check) == 0){
      mysql_query("INSERT INTO `setting`(`tiencamxuc`, `tienthuong`, `tiencmt`, `tiencmtimg`) VALUES ('".$tiencamxuc."','".$tienthuong."','".$tiencmt."','".$tiencmtimg."')");
      echo '<script>alert("Thêm mới thành công !");window.location = window.location;</script>';
    }
    else{
      mysql_query("UPDATE `setting` SET `tiencamxuc`='".$tiencamxuc."',`tienthuong`='".$tienthuong."',`tiencmt`='".$tiencmt."',`tiencmtimg`='".$tiencmtimg."' ");
      echo '<script>alert("Cập nhật thành công !");window.location = window.location;</script>';
    }

  }
  else{
?>
<?php
$check = mysql_query("SELECT * FROM setting");
$setting = setting();
  if(mysql_num_rows($check) == 0){
    $camxuc = 0;
    $cmt = 0;
    $cmtimg = 0;
    $tienthuong = 0;
  }
  else{
     $camxuc = $setting['tiencamxuc'];
     $cmt    = $setting['tiencmt'];
     $cmtimg = $setting['tiencmtimg'];
     $tienthuong = $setting['tienthuong'];
  }
?>
<form action="" method="POST">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">Cài đặt</div>
      <div class="panel-body">
          <div class="form-group">
            <label for="giatien">Giá tiền(Cảm xúc):</label>
            <input type="number" class="form-control" id="giatien" value="<?php echo $camxuc; ?>" name="giacamxuc">
          </div>
          <div class="form-group">
            <label for="giatienbluan">Giá tiền(Bình luận):</label>
            <input type="number" class="form-control" name="tiencmt" value="<?php echo $cmt; ?>" id="giatienbluan">
          </div>

          <div class="form-group">
            <label for="cmtimages">Giá tiền(Cmt hình ảnh):</label>
            <input type="number" class="form-control" name="giahinhanh" value="<?php echo $cmtimg; ?>" id="cmtimages">
          </div>

          <div class="form-group">
            <label for="tienthuong">Tiền thưởng(tiền có khi user đăng ký):</label>
            <input type="number" class="form-control" name="tienthuong" value="<?php echo $tienthuong; ?>" id="tienthuong">
          </div>
    <button type="submit" name="setting" class="btn btn-success btn-block">Cập nhật</button>
</form>
      </div>
    </div>
  </div>
<?php
  }
}
else{
echo '<div class="alert alert-danger">
  <strong>Xin lỗi: </strong> Bạn không đủ quyền để xem trang này. Vui lòng quay lại trang CTV.
</div>';
}
include '../incf/foot.php';
?>