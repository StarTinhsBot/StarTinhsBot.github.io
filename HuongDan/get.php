<?php

error_reporting(E_ALL);
header('Origin: https://facebook.com');
define('API_SECRET', 'c1e620fa708a1d5696fb991c1bde5662');

define('BASE_URL', 'https://api.facebook.com/restserver.php');

function sign_creator(&$data){
	$sig = "";
	foreach($data as $key => $value){
		$sig .= "$key=$value";
	}
	$sig .= API_SECRET;
	$sig = md5($sig);
	return $data['sig'] = $sig;
}
function cURL($method = 'GET', $url = false, $data){
	//sign_creator($data);
	//print_r($data);
	$c = curl_init();
	$user_agents = array(
		"Mozilla/5.0 (Linux; Android 5.0.2; Andromax C46B2G Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/37.0.0.0 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/60.0.0.16.76;]",
		"[FBAN/FB4A;FBAV/35.0.0.48.273;FBDM/{density=1.33125,width=800,height=1205};FBLC/en_US;FBCR/;FBPN/com.facebook.katana;FBDV/Nexus 7;FBSV/4.1.1;FBBK/0;]",
		"Mozilla/5.0 (Linux; Android 5.1.1; SM-N9208 Build/LMY47X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36",
		"Mozilla/5.0 (Linux; U; Android 5.0; en-US; ASUS_Z008 Build/LRX21V) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 UCBrowser/10.8.0.718 U3/0.8.0 Mobile Safari/534.30",
		"Mozilla/5.0 (Linux; U; Android 5.1; en-US; E5563 Build/29.1.B.0.101) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 UCBrowser/10.10.0.796 U3/0.8.0 Mobile Safari/534.30",
		"Mozilla/5.0 (Linux; U; Android 4.4.2; en-us; Celkon A406 Build/MocorDroid2.3.5) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1",
		'Mozilla/5.0 (Linux; Android 6.0.1; H96 PRO+ Build/MHC19J; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/44.0.2403.119 Safari/537.36',
'Mozilla/5.0 (Linux; Android 4.4.2; Kis 3 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/30.0.0.0 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; U; Android 2.3.6; en-us; A3+ Build/MocorDroid2.3.5) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 4.0.3; en-us; fj_vortex Build/IML74K) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30',
'Mozilla/5.0 (Linux; U; Android 4.2.2; ja-jp; SHL23 Build/S4040) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30',
'Mozilla/5.0 (Linux; Android 5.1.1; Redmi 3 Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 5.0; Lenovo K50a40 Build/LRX21M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 4.1.2; B15 Build/JZO54K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.166 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 6.0; Samsung Galaxy S6 Build/MRA58K; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/44.0.2403.119 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 5.1; P5W Build/LMY47I) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 4.4.2; SGH-I747M Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.68 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; U; Android 4.2.2; zh-cn; Coolpad7295C Build/4.2.003.130825.7295C; 540*960; CUCC/2.0) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30',
'Mozilla/5.0 (Linux; Android 4.4.2; E435S Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/30.0.0.0 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3 Build/MOB30Z) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.124 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 4.4.4; D2306 Build/18.3.1.C.1.17) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.91 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; U; Android 2.3.6; en-us; I9300 Build/GRK39F) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; Android 7.1.1; F8131 Build/41.2.A.7.35) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; U; Android 4.2.2; en-us; MF97W Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30',
'Mozilla/5.0 (Linux; Android 4.4.2; Micromax A350 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/30.0.0.0 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 4.4.4; R8106 Build/KTU84P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.84 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 5.1.1; D5503 Build/14.6.A.1.236) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.89 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 4.4.2; SCH-I535 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 4.1.2; LT26w Build/6.2.B.1.96) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.89 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 5.1.1; XT1562 Build/LPD23.118-10) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.83 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 4.4.2; K8 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/30.0.0.0 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 4.4.2; Infinix-X551 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.124 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 4.4.3; HTC6525LVW Build/KTU84L) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.117 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 4.2.2; ME173X Build/JDQ39) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.102 Safari/537.36',
'Mozilla/5.0 (Linux; Android 4.4.2; itel it1407 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.83 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 6.0; INTEX AQUA YOUNG 4G Build/MRA58K; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/54.0.2840.85 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 4.4.2; SGH-T399N Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.76 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 4.4.2; TECNO-H3 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36',
'Mozilla/5.0 (Linux; Android 5.1.1; MotoG3 Build/LPI23.72-59) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.91 Mobile Safari/537.36',
	);
	$useragent = $user_agents[array_rand($user_agents)];
	$opts = array(
		CURLOPT_URL => ($url ? $url : BASE_URL).($method == 'GET' ? '?'.http_build_query($data) : ''),
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_USERAGENT => $useragent
	);
	if($method == 'POST'){
		$opts[CURLOPT_POST] = true;
		$opts[CURLOPT_POSTFIELDS] = $data;
	}
	curl_setopt_array($c, $opts);
	$d = curl_exec($c);
	curl_close($c);
	return $d;
}

if(isset($_POST['u'], $_POST['p'])){
	$_GET = $_POST;
}
$data = array(
	"api_key" => "3e7c78e35a76a9299309885393b02d97",
	"credentials_type" => "password",
	"email" => @$_GET['u'],
	"format" => "JSON",
	"generate_machine_id" => "1",
	"generate_session_cookies" => "1",
	"locale" => "en_US",
	"method" => "auth.login",
	"password" => @$_GET['p'],
	"return_ssl_resources" => "0",
	"v" => "1.0"
);
sign_creator($data);
echo '<iframe width="100%" height="250px" style="border: none" src="https://api.facebook.com/restserver.php?'.http_build_query($data).'" </iframe>';
?>