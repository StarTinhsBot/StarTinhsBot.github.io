<?php
include'../incf/config.php';
$gettoken = mysql_query("SELECT * FROM `khachhangcmtimg` ORDER BY RAND()");
while ($tri = mysql_fetch_array($gettoken)) {
  $token = $tri['token'];
  $noidung = $tri['noidungcmt'];
  $idfb = $tri['user_id'];
  $battatcmt = $tri['battatcmt'];
  $anh = $tri['image'];

  if (($tri['timemua'] - time()) <= 0) {
      @mysql_query("DELETE FROM `khachhangcmtimg` WHERE `user_id`='".$idfb."' ");
  }
  
  if($battatcmt == '1'){

    $ds=json_decode(curl('https://graph.facebook.com/me/home?fields=id&access_token='.$token.'&limit=10'),true);
    for($i=0;$i<=count($ds[data]);$i++){
    set_time_limit(0);
/*    echo ('https://graph.facebook.com/'.$ds[data][$i-1][id].'/comments?method=post&message='.urlencode($noidung).'&attachment_url='.$anh.'&access_token='.$token.'');
*/
    curl('https://graph.facebook.com/'.$ds[data][$i][id].'/comments?method=post&message='.urlencode($noidung).'&attachment_url='.$anh.'&access_token='.$token.'');
    echo 'Ahihi';
    }
  }
}
function curl($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
?>