<?php
if(isset($_POST['dangky'])){
	session_start();	
		require '../incf/config.php';

		//Tạo bảng
		mysql_query("CREATE TABLE IF NOT EXISTS `user` (
	      `id` int(11) NOT NULL AUTO_INCREMENT,
	      `username` varchar(255) NOT NULL,
	      `password` varchar(225) NOT NULL,
	      `tien` varchar(225) NOT NULL,
	      `ip` text,
	      `ngaytao` varchar(225) NOT NULL,
	      `type` varchar(225) NOT NULL,

	      PRIMARY KEY (`id`)
	      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
	   ");
		$setting = setting();
		$tienthuong = $setting['tienthuong'];
		$user = $_POST['username'];
		$pass = $_POST['pass'];
      
         //Kiểm tra xem IP có phải là từ Share Internet  
		if (!empty($_SERVER['HTTP_CLIENT_IP']))     
		  {  
			$ip_address = $_SERVER['HTTP_CLIENT_IP'];  
		  }  
		//Kiểm tra xem IP có phải là từ Proxy  
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))    
		  {  
			$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];  
		  }  
		//Kiểm tra xem IP có phải là từ Remote Address  
		else  
		  {  
			$ip_address = $_SERVER['REMOTE_ADDR'];  
		  }  
       
		$repass = $_POST['repass'];
		//Xét để trống user pass repass
		if(empty($user) || empty($pass) || empty($repass)){
			echo 'Không được để trống.';
			exit();
		}
		//Check Username
	    if(strlen($user) > 20 || strlen($user) < 5){
	       echo 'Tên tài khoản phải nhỏ hơn 20 và lớn hơn 5';
	        exit();
	    }
		if (!preg_match("/^[a-zA-Z0-9]*$/",$user)) {
			echo 'Tên tài khoản không chứa số hoặc ký tự đặc biệt';
			exit();
		}
		if (preg_match('/\s/',$username)){
			echo 'Tên tài khoản không được chứa cách';
			exit();
		}
		//Check Password
		if($pass != $repass) {
			echo 'Mật khẩu nhập lại không giống';
			exit();
		}
		if(strlen($pass) > 100 || strlen($pass) < 3){
			echo 'Đặt mật khẩu an toàn cho tài khoản';
			exit();
		}   
	    //Block IP
	     /* $ipcheck = mysql_query ("SELECT * FROM `user` WHERE `ip` = '".$ip_address."'");
	    if(mysql_num_rows($ipcheck) > 3) {
	    	echo 'Tối đa 3 IP được đăng ký';
			exit();
	    } */
	    $usercheck = mysql_query("SELECT * FROM `user` WHERE `username` = '".$user."'");
		if(mysql_num_rows($usercheck) > 0){
			echo 'Tên đăng nhập đã tồn tại';
			exit();
		}

		$passmd5 = md5($pass);
		//Thêm vào Database

		mysql_query("INSERT INTO `user` (`username`, `password`, `tien`, `ngaytao`, `type`, `ip`) VALUES ('".$user."', '".$passmd5."', '".$tienthuong."', '".date('h:i: sa - Y/m/d')."', 'ctv', '".$ip_address."')");
		echo 'Đăng ký thành công.';
		
	}

function setting(){
  return mysql_fetch_array(mysql_query("SELECT * FROM `setting`"));
}
?>
