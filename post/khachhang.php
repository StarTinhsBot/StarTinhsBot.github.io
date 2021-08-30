<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
if(isset($_SESSION['username'])){
  require '../incf/config.php';
  require '../incf/func.php';
  $setting = setting();
  //tap bang user
     mysql_query("CREATE TABLE IF NOT EXISTS `khachhang` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `user_id` varchar(255) NOT NULL,
      `camxuc` varchar(21) NOT NULL,
      `name` varchar(225) NOT NULL,
      `fb_dtsg` text NOT NULL,
      `cookie` text NOT NULL,
      `token` text NOT NULL,
      `timeadd` varchar(225) NOT NULL,
      `timemua` varchar(225) NOT NULL,
      `time` varchar(225) NOT NULL,
      `useradd` varchar(225) NOT NULL,
      PRIMARY KEY (`id`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
   ");
  $token = $_REQUEST['token'];
  $cookie = $_REQUEST['cookie'];
  $time = $_REQUEST['thoigian'];
  $time  = (int)$time;
  $camxuc = $_REQUEST['camxuc'];
  //Check Thong tin
    if(empty($cookie) && empty($token)){
    echo 'Nhập Token hoặc Cookie';
    exit();
  }
  if(empty($time)){
    echo 'Để trống tháng kìa';
    exit();
  }
  if($time <= 0){ 
    echo 'Nhập số tháng hợp lệ';
    exit();
  }
  $gia = $setting['tiencamxuc'];
  $ngay = 86400 * 30; //Số Giây / tháng :))
  $thoigian = time()+$time*$ngay;
  $timeadd  = date('d/m/Y - H:i:s');
  $tien = $time * $gia;
  $check = mysql_query("SELECT * FROM `user` WHERE `id` = '".$_SESSION['id']."'");
  $info = mysql_fetch_array($check);
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
  //echo $info['tien'];
  if($info['tien'] < $tien){
    echo 'Số tiền trong tài khoản của bạn không đủ';
    exit();
  }
  //Check Token
  if(!empty($token)){
    $tk = me($token);
    if(empty($tk['id']) || empty($tk['name'])){
        echo 'Access Token ko hợp lệ';
        exit();
    }
    $checkapp = app($token);
    if($checkapp['id'] != '6628568379'){
      echo 'Vui lòng sử dụng app của hệ thống.';
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
            echo 'Cookie không hợp lệ.';
            exit();
        }
  }
//THem vào Database
      $conlai = $info['tien'] - $tien;
      $tridz = mysql_query("SELECT * FROM `khachhang` WHERE `user_id` = '".$id."'");
      $khach = mysql_fetch_array($tridz);
      $tt = $time*$ngay;
      $timethem = $tt + $khach['timemua'];
      //$timethem = $thoigian;
      if(mysql_num_rows($tridz) != 0){
      mysql_query("UPDATE `user` SET `tien`= '".$conlai."' WHERE `id` = '".$_SESSION['id']."'");
      mysql_query ("UPDATE `khachhang` SET `camxuc` = '".$cx."',`name`='".$name."',`fb_dtsg`='".$fb_dtsg."',`cookie`='".$cookie."',`token`='".$token."',`timemua`='".$timethem."',`useradd`='".$_SESSION['username']."' WHERE `user_id` = '".$id."'");
      echo 'Cập nhật thành công';
      }
      else{
      mysql_query("UPDATE `user` SET `tien`= '".$conlai."' WHERE `id` = '".$_SESSION['id']."'");
      mysql_query("INSERT INTO `khachhang` (`user_id`, `name`, `fb_dtsg`, `cookie`, `useradd`, `time`, `timemua`, `timeadd`, `camxuc`,`token` ) VALUES ('".$id."', '".$name."', '".$fb_dtsg."', '".$cookie."', '".$_SESSION['username']."', '".time()."',  '".$thoigian."', '".date("Y-m-d h:i:sa")."','".$cx."', '".$token."')");
      echo 'Thêm mới thành công';
      }

} //ĐÓng if Session['username']

?>