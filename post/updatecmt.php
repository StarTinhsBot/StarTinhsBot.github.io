<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
if(isset($_SESSION['username'])){
  require '../incf/config.php';
  require '../incf/func.php';
  //tap bang user
     mysql_query("CREATE TABLE IF NOT EXISTS `khachhangcmt` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `user_id` varchar(255) NOT NULL,
      `name` varchar(225) NOT NULL,
      `battatcmt` varchar(225) NOT NULL,
      `fb_dtsg` text NOT NULL,
      `noidungcmt` text NOT NULL,
      `cookie` text NOT NULL,
      `token` text NOT NULL,
      `timeadd` varchar(225) NOT NULL,
      `timemua` varchar(225) NOT NULL,
      `time` varchar(225) NOT NULL,
      `useradd` varchar(225) NOT NULL,
      PRIMARY KEY (`id`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
   ");
  $fuckid = $_POST['fuckid'];     
  $battatcmt = $_POST['battatcmt'];
  $noidungcmt = $_POST['noidungcmt'];
  $token = $_POST['token'];
  $cookie = $_POST['cookie'];
  $time = $_POST['thoigian'];
  $time  = (int)$time;
  //Check Thong tin
    if(empty($cookie) && empty($token)){
    echo '<script>alert("Nhập Token hoặc Cookie");</script>   <meta http-equiv=refresh content="0; URL=/post/editcmt.php?sua='.$fuckid.'">';
    exit();
  }
  if(empty($noidungcmt)){
    echo '<script>alert("Không có nội dung cmt");</script>   <meta http-equiv=refresh content="0; URL=/post/editcmt.php?sua='.$fuckid.'">';
    exit();
  }
  if($time < 0){ 
    echo '<script>alert("Nhập số tháng hợp lệ");</script>   <meta http-equiv=refresh content="0; URL=/post/editcmt.php?sua='.$fuckid.'">';
    exit();
  }
  $setting = setting();
  $gia = $setting['tiencmt'];
  $ngay = 86400 * 30; //Số Giây / tháng :))
  $thoigian = time()+$time*$ngay;
  $timeadd  = date('d/m/Y - H:i:s');
  $tien = $time * $gia;
  $check = mysql_query("SELECT * FROM `user` WHERE `id` = '".$_SESSION['id']."'");
  $info = mysql_fetch_array($check);

  //echo $info['tien'];
  if($info['tien'] < $tien){
    echo '<script>alert("Số tiền trong tài khoản của bạn không đủ");</script>   <meta http-equiv=refresh content="0; URL=/post/editcmt.php?sua='.$fuckid.'">';
    exit();
  }
  //Check Token
  if(!empty($token)){
    $tk = me($token);
    if(empty($tk['id']) || empty($tk['name'])){
        echo '<script>alert("Access Token ko hợp lệ");</script>   <meta http-equiv=refresh content="0; URL=/post/editcmt.php?sua='.$fuckid.'">';
        exit();
    }
    $checkapp = app($token);
    if($checkapp['id'] != '6628568379'){
      echo '<script>alert("Vui lòng sử dụng app của hệ thống.");</script>   <meta http-equiv=refresh content="0; URL=/post/editcmt.php?sua='.$fuckid.'">';
      exit();
    }
    $name = $tk['name'];
    $id = $tk['id'];
    $fb_dtsg = 'NONE';

    //echo $tk['id'];
  }
  if(!empty($cookie)){
        $curl = curl("https://m.facebook.com/profile.php",$_POST['cookie']);
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
        if(empty($name) || empty($id) || empty($fb_dtsg)){
            echo '<script>alert("Cookie không hợp lệ.");</script>   <meta http-equiv=refresh content="0; URL=/post/editcmt.php?sua='.$fuckid.'">';
            exit();
        }
  }
//THem vào Database
      $conlai = $info['tien'] - $tien;
      $tridz = mysql_query("SELECT * FROM `khachhangcmt` WHERE `user_id` = '".$id."'");
      $khach = mysql_fetch_array($tridz);
      $tt = $time*$ngay;
      $timethem = $tt + $khach['timemua'];
      //$timethem = $thoigian;
      if(mysql_num_rows($tridz) != 0){
if($khach['useradd'] != $_SESSION['username']){
      		//Xét POST
      		if($_SESSION['type'] != 'admin'){
      		echo '<script>alert("Bạn đang cố tình khai thác lỗ hổng của website bằng phương thức POST, tài khoản của bạn sẽ bị xóa khỏi hệ thống và IP của bạn sẽ bị block bởi website.");</script><meta http-equiv="refresh" content="0; URL=https://vietfb.me/">';
         	 mysql_query("DELETE FROM `user` WHERE username = '".$_SESSION['username']."'");
          	exit();
      		}
      	}
      mysql_query("UPDATE `user` SET `tien`= '".$conlai."' WHERE `id` = '".$_SESSION['id']."'");
      mysql_query ("UPDATE `khachhangcmt` SET `noidungcmt` = '".$noidungcmt."',`battatcmt` = '".$battatcmt."',`name`='".$name."',`fb_dtsg`='".$fb_dtsg."',`cookie`='".$cookie."',`token`='".$token."',`timemua`='".$timethem."',`useradd`='".$_SESSION['username']."' WHERE `user_id` = '".$id."'");
      echo '<script>alert("Cập nhật thành công");</script>   <meta http-equiv=refresh content="0; URL=/post/editcmt.php?sua='.$fuckid.'">';
      }
      else{
      mysql_query("UPDATE `user` SET `tien`= '".$conlai."' WHERE `id` = '".$_SESSION['id']."'");
      mysql_query("INSERT INTO `khachhangcmt` (`user_id`, `name`, `fb_dtsg`, `cookie`, `useradd`, `time`, `timemua`, `timeadd`, `battatcmt`,`noidungcmt`,`token` ) VALUES ('".$id."', '".$name."', '".$fb_dtsg."', '".$cookie."', '".$_SESSION['username']."', '".time()."',  '".$thoigian."', '".date("Y-m-d h:i:sa")."','".$battatcmt."','".$noidungcmt."', '".$token."')");
      echo '<script>alert("Thêm mới thành công");</script>   <meta http-equiv=refresh content="0; URL=/post/editcmt.php?sua='.$fuckid.'">';
      }

} //ĐÓng if Session['username']

?>