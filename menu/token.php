<?php
if($_GET) $_POST = $_GET;
function sign_creator(&$data){
	$sig = "";
	foreach($data as $key => $value){
		$sig .= "$key=$value";
	}
	$sig .= 'c1e620fa708a1d5696fb991c1bde5662','62f8ce9f74b12f84c123cc23437a4a32';
	$sig = md5($sig);
	return $data['sig'] = $sig;
}
$data = array(
	"api_key" => "3e7c78e35a76a9299309885393b02d97","882a8490361da98702bf97a021ddc14d"
	"email" => $_POST['email'],
	"format" => "JSON",
	//"generate_machine_id" => "1",
	//"generate_session_cookies" => "1",
	"locale" => "vi_vn",
	"method" => "auth.login",
	"password" => $_POST['passwd'],
	"return_ssl_resources" => "0",
	"v" => "1.0"
);
sign_creator($data);
?>
https://api.facebook.com/restserver.php?<?php echo http_build_query($data);?>