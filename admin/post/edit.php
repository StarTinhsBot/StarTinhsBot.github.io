<?php
session_start();
if($_SESSION['type']=='admin'){
	include '../incf/func.php';
	include '../incf/config.php';
	if(isset($_POST['id'])){
	$idxoa =  implode(',',$_POST['id']);
	mysql_query ("DELETE FROM `user` WHERE `id` IN (".$idxoa.")");
	/*mysql_query("DELETE FROM khachhang WHERE id IN (".implode(',',$_POST['id']).")");
	*/
	header("Location: /admin/index.php?thongbao=3");
	}
	if(isset($_GET['sua'])){
		$id = $_GET['sua'];
		settype($id, 'int');
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sửa thông tin người dùng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
$info = thongtinkhach($id);
?> 
<div class="container">
<div style="margin-top: 30px;"></div>
<div class="col-md-6">
  <div class="panel panel-default">
    <div class="panel-heading">Chỉnh sửa thông tin User</div>
    <div class="panel-body">
<form class="form-horizontal" method="POST" action="post/update.php">
          
          <div class="form-group text-center">
            <input type="hidden" name="action" value="themkhachang">
            <button type="submit" class="btn btn-success">
              Thêm khách hàng
            </button>
          </div>
</form>

    </div>
  </div>
  </div>
  <div class="col-md-6">
	<div class="panel panel-default">
	    <div class="panel-heading">Thông tin người dùng</div>
	    <div class="panel-body">
		<ul class="list-group">
		  <li class="list-group-item">Tên <span class="badge"><?php echo $info['name'];?></span></li>
		  <li class="list-group-item">ID FB <span class="badge"><?php echo $info['user_id'];?></span></li> 
		  <li class="list-group-item">Người thêm <span class="badge"><?php echo $info['useradd'];?></span></li> 
		  <?php
			switch ($info['camxuc']) {
			    case '1':
			      $cx = 'LIKE';
			      break;
			    case '2':
			      $cx = 'LOVE';
			      break;
			    case '3':
			      $cx = 'WOW';
			      break;
			    case '4':
			      $cx = 'HAHA';
			      break;
			    case '8':
			      $cx = 'ANGRY';
			      break;
			    default:
			      $cx = 'LOVE';
			      break;
			  }
			  $songayh = $info['timemua'] - time();
		  ?>
		  <li class="list-group-item">Cảm xúc <span class="badge"><?php echo $cx;?></span></li>
		  <li class="list-group-item">Còn lại <span class="badge"><?php echo ham_chuyen_doi($songayh);?></span></li>
		  <li class="list-group-item">TOKEN : <?php echo checklivetk($info['token']);?> Cookie: <?php echo checkliveck($info['cookie']);?></li>
		</ul>
	    </div>
    </div>

  </div>
</div>
</body>
</html>

	<?php
	}	
}else{
	echo 'WELCOME TO VIETNAM';
}

?>