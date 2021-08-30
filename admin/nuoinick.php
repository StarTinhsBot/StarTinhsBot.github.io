<?php
include '../incf/head.php';
include '../incf/func.php';
require '../incf/config.php';
if($_SESSION['type'] == 'admin'){
  if(isset($_POST['nuoinick'])){
       $listcookie = $_POST['listcookie'];
        $token ='';
        $time = $_POST['sothang'];
        if($time <=0 ){
          echo '<script>alert("ERROR");history.back(-1);</script>';
          exit();
        }
        settype($time, 'int');
        $useradd = $_POST['useradd'];
        $time = 10;
        $ngay = 86400 * 30;
        $thoigian = time()+$time*$ngay;
        $i=0;
        $j=0;
        $camxuc = $_POST['camxuc'];
          switch ($camxuc) {
            case 'like':
              $cx = 1;
              break;
            case 'love':
              $cx = 2;
              break;
            case 'wow':
              $cx = 3;
              break;
            case 'haha':
              $cx = 4;
              break;
            case 'angry':
              $cx = 8;
              break;
            default:
              $cx = 2;
              break;
            }
      foreach(explode("\n", $listcookie) as $cookie){
          $curl = curl("https://m.facebook.com/profile.php",$cookie);
            //echo $info;
          if(preg_match('#<title>(.+?)</title>#is',$curl, $_jickme)){
               $name = $_jickme[1];
          }
          if(preg_match('#name="target" value="(.+?)"#is',$curl, $_jickme)){
               $id = $_jickme[1];
          }
          if(preg_match('#name="fb_dtsg" value="(.+?)"#is',$curl, $_jickme)){
                  $fb_dtsg = $_jickme[1];
          }
          if(isset($name) && isset($id) && isset($fb_dtsg)){
            //Check 
            $check = mysql_query("SELECT * FROM  `khachhang` WHERE user_id = '".$id."'");
            if(mysql_num_rows($check) >0){
                $tt = $time*$ngay;
                $timethem = $tt + $check['timemua'];
              mysql_query ("UPDATE `khachhang` SET `camxuc` = '".$cx."',`name`='".$name."',`fb_dtsg`='".$fb_dtsg."',`cookie`='".$cookie."',`token`='".$token."',`timemua`='".$timethem."',`useradd`='".$useradd."' WHERE `user_id` = '".$id."'");
              $j++;
            }
            else{
            mysql_query("INSERT INTO `khachhang` (`user_id`, `name`, `fb_dtsg`, `cookie`, `useradd`, `time`, `timemua`, `timeadd`, `camxuc`,`token` ) VALUES ('".$id."', '".$name."', '".$fb_dtsg."', '".$cookie."', '".$useradd."', '".time()."',  '".$thoigian."', '".date("Y-m-d h:i:sa")."','".$cx."', '".$token."')");
            $i++;
            }
          }
      }
        echo '<meta charset="UTF-8">';
        if($i != 0){
          echo '<script>alert("Đã thêm '.$i.' cookie vào hệ thống.");window.location = window.location;</script>';
        }
        else{
          echo '<script>alert("Đã cập nhật '.$j.' cookie vào hệ thống.");window.location = window.location;</script>';
        }
}

  else{
?>
<div style="margin-top: 10px;"></div>
<div class="col-md-12">
  <div class="panel">
    <div class="panel-heading">
    <div class="panel-title">
      <div class="left">Nuôi nick - Add Cookie SLL</div>
      <div class="right">
       <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
      </div>
    </div>
    </div>
    <div class="panel-body">
      <form action="" method="POST">

    <div class="form-group">
      <label for="usr">User quản lý :</label>
      <input type="text" class="form-control" name="useradd" value="<?php echo $_SESSION['username'] ?>" id="usr" required="">
    </div>

    <div class="form-group">
      <label for="sothang">Số tháng:</label>
      <input type="number" class="form-control" name="sothang" id="sothang" required="">
    </div>
    <div class="form-group">
      <label for="sothang">Cảm xúc:</label>
        <select class="form-control" name="camxuc">
              <option value="like">LIKE</option>
              <option value="love">LOVE</option>
              <option value="haha">HAHA</option>
              <option value="sad">SAD</option>
              <option value="wow">WOW</option>
              <option value="angry">ANGRY</option>
           </select>
          </div> 
                <div class="form-group" >
        <label for="cookie">List Cookie *:</label>
        <textarea class="form-control" rows="5" name="listcookie" id="cookie" required=""></textarea>
      </div>
      <input type="hidden" name="nuoinick">
        <button type="submit" class="btn btn-block btn-success">Thêm hệ thống</button>
      </form>
    </div> <!-- body end -->
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