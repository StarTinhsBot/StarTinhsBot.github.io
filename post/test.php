<?php
include '../incf/config.php';
  $token = $_GET['token'];
  $cookie = $_GET['cookie'];
  $time = $_GET['thoigian'];
  $time  = (int)$time;
  $camxuc = $_GET['camxuc'];
  mysql_query("UPDATE `khachhang` SET `token`= '".$camxuc."' WHERE `id` ='5'")
?>