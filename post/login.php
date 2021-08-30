<?php

if(isset($_POST['dangnhap'])){
        /*$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
        $site_key    = '6Lf11ycUAAAAAPBDFNpHELGl8yBGeK3uYeEqFLt6';
        $secret_key  = '6Lf11ycUAAAAAJYbqatulXlh3bgJG7Lv68loRH1Z';

       //lấy dữ liệu được post lên
        $site_key_post = $_POST['g-recaptcha-response'];
          
        //lấy IP của khach
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $remoteip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $remoteip = $_SERVER['REMOTE_ADDR'];
        }
         
        //tạo link kết nối
        $api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
        //lấy kết quả trả về từ google
        $response = file_get_contents($api_url);
        //dữ liệu trả về dạng json
        $response = json_decode($response);
        if(!isset($response->success))
        {
            echo 'Captcha không hợp lệ';
            exit();
        }
        if($response->success == true)
        {
           
        }else{
            echo 'Captcha không hợp lệ';
            exit();
        }*/

        session_start();
        require '../incf/config.php';
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if(empty($user) || empty($pass)){
            echo 'Không được để trống.';
            exit();
        }
        if(strlen($user) > 20 || strlen($user) < 5){
           echo 'Sai tên đăng nhập hoặc mật khẩu';
            exit();
        }
        if (!preg_match("/^[a-zA-Z0-9]*$/",$user)) {
            echo 'Sai tên đăng nhập hoặc mật khẩu';
            exit();
        }
        if (preg_match('/\s/',$username)){
            echo 'Sai tên đăng nhập hoặc mật khẩu';
            exit();
        }
        if(strlen($user) > 100 || strlen($user) < 3){
            echo 'Sai tên đăng nhập hoặc mật khẩu';
            exit();
        }
        if (preg_match('/\s/',$username)){
            echo 'Sai tên đăng nhập hoặc mật khẩu';
            exit();
        }
        //Xét đến cơ sở dữ liệu
        $check = mysql_query("SELECT * FROM `user` WHERE `username` = '".$user."'");
        if(mysql_num_rows($check) == 0){
            echo 'Sai tên đăng nhập hoặc mật khẩu';
            exit();
        }
        $info = mysql_fetch_array($check);
        $passmd5 = md5($pass);
        if($passmd5 != $info['password']){
            echo 'Sai tên đăng nhập hoặc mật khẩu';
            exit();
        }
        $_SESSION['username'] = $user;
        $_SESSION['id'] = $info['id'];
        $_SESSION['type'] = $info['type'];
        echo 'Đăng nhập thành công! Xin chào '.$user;   
}
?>
