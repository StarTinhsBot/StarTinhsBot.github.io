<?php
function ham_chuyen_doi($so_giay){  
    $dt1 = new DateTime("@0");  
    $dt2 = new DateTime("@$so_giay");  
    return $dt1->diff($dt2)->format('%a ngày, %h giờ, %i phút và %s giây');  
} 
function thongtinkhach($id){
  return mysql_fetch_array(mysql_query("SELECT * FROM `khachhang` WHERE id = '".$id."' "));
}
function setting(){
  return mysql_fetch_array(mysql_query("SELECT * FROM `setting`"));
}
function thongtinkhachcmt($id){
  return mysql_fetch_array(mysql_query("SELECT * FROM `khachhangcmt` WHERE id = '".$id."' "));
}
function thongtinkhachcmtimg($id){
  return mysql_fetch_array(mysql_query("SELECT * FROM `khachhangcmtimg` WHERE id = '".$id."' "));
}
function checklivetkcmt($token){
  $fucker = json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
  if(isset($fucker['id'])){
    $tt = '<span class="label label-success">LIVE</span>';
  }
  else{
    if(empty($token)){
      $tt = '<span class="label label-warning">NOT TOKEN</span>';
    }
    else{
      $tt = '<span class="label label-warning">DIE</span>';
    }
  }
  return $tt;
}
function checkliveckcmt($cookie){
        $curl = curl("https://m.facebook.com/profile.php",$cookie);
        if(preg_match('#<title>(.+?)</title>#is',$curl, $_jickme)){
          $name = $_jickme[1];
        }
        if(preg_match('#name="target" value="(.+?)"#is',$curl, $_jickme)){
            $id = $_jickme[1];
        }
        if(preg_match('#name="fb_dtsg" value="(.+?)"#is',$curl, $_jickme)){
            $fb_dtsg = $_jickme[1];
        }
        if(isset($name) && isset($id) && isset($fb_dtsg) ){
          $ck =    '<span class="label label-success">LIVE</span>';
        }
        else{
          if(empty($cookie)){
            $ck = '<span class="label label-warning">NOT COOKIE</span>';
          }
          else{
            $ck = '<span class="label label-warning">DIE</span>';
          }
        }
       return $ck;
}

function checklivetk($token){
  $fucker = json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
  if(isset($fucker['id'])){
    $tt = '<span class="label label-success">LIVE</span>';
  }
  else{
    if(empty($token)){
      $tt = '<span class="label label-warning">NOT TOKEN</span>';
    }
    else{
      $tt = '<span class="label label-warning">DIE</span>';
    }
  }
  return $tt;
}
function checkliveck($cookie){
        $curl = curl("https://m.facebook.com/profile.php",$cookie);
        if(preg_match('#<title>(.+?)</title>#is',$curl, $_jickme)){
          $name = $_jickme[1];
        }
        if(preg_match('#name="target" value="(.+?)"#is',$curl, $_jickme)){
            $id = $_jickme[1];
        }
        if(preg_match('#name="fb_dtsg" value="(.+?)"#is',$curl, $_jickme)){
            $fb_dtsg = $_jickme[1];
        }
        if(isset($name) && isset($id) && isset($fb_dtsg) ){
          $ck =    '<span class="label label-success">LIVE</span>';
        }
        else{
          if(empty($cookie)){
            $ck = '<span class="label label-warning">NOT COOKIE</span>';
          }
          else{
            $ck = '<span class="label label-warning">DIE</span>';
          }
        }
       return $ck;
}
function thongtinuser($username){
  return mysql_fetch_array(mysql_query("SELECT * FROM `user` WHERE username = '".$username."' "));
}
function me($token){
return json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
}
function app($ahihi){
return json_decode(auto('https://graph.facebook.com/app/?access_token='.$ahihi), true);
}
function auto($url) {
   $ch = curl_init();
   curl_setopt_array($ch, array(
      CURLOPT_CONNECTTIMEOUT => 5,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL            => $url,
      )
   );
   $result = curl_exec($ch);
   curl_close($ch);
   return $result;
}
function cURL($url, $biencookie, $fields = false){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIE, $biencookie);
if($fields){
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
}
curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Series 60; Opera Mini/6.5.27309/34.1445; U; en) Presto/2.8.119 Version/11.10');
return curl_exec($ch);
curl_close($ch);
}
function get($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
}
function post_data($site,$data,$cookie){
    $datapost = curl_init();
    $headers = array("Expect:");
    curl_setopt($datapost, CURLOPT_URL, $site);
    curl_setopt($datapost, CURLOPT_TIMEOUT, 40000);
    curl_setopt($datapost, CURLOPT_HEADER, TRUE);

    curl_setopt($datapost, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($datapost, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($datapost, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
    curl_setopt($datapost, CURLOPT_POST, TRUE);
    curl_setopt($datapost, CURLOPT_POSTFIELDS, $data);
    curl_setopt($datapost, CURLOPT_COOKIE,$cookie);
    ob_start();
    return curl_exec ($datapost);
    ob_end_clean();
    curl_close ($datapost);
    unset($datapost); 
} 
?>