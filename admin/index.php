<?php
include '../incf/head.php';
include '../incf/func.php';
require '../incf/config.php';
//Xoa 
if(isset($_POST['id'])){
  if($_SESSION['type'] != 'admin'){
    die();
  }
  $idxoa =  implode(',',$_POST['id']);
  mysql_query ("DELETE FROM `user` WHERE `id` IN (".$idxoa.")");
  /*mysql_query("DELETE FROM khachhang WHERE id IN (".implode(',',$_POST['id']).")");
  */
  echo '<script>alert("Xoá thành công! ");</script>';
  }
//Sửa
if(isset($_GET['sua'])){
      if($_SESSION['type'] != 'admin'){
        die();
      }
    $username = $_GET['sua'];
    //settype($id, 'int');
    $info = thongtinuser($username);
    //Xử lý sửa 
    if(isset($_POST['tridzai'])){
      $tien = $_POST['tien'];
      $type = $_POST['quyen'];
      mysql_query("UPDATE `user` SET `tien`= '".$tien."',`type`= '".$type."' WHERE `username` = '".$username."'");
      echo '<script>alert("User '.$username.' đã được cập nhật thành công !");</script>';
    }
?>
<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">Chỉnh sửa thông tin User</div>
    <div class="panel-body">
<form class="form-horizontal" method="POST" action="">
           <div class="form-group">
            <label class="col-sm-4 control-label">
              Username:  
            </label>
            <div class="col-sm-7">
           <input type="text" class="form-control" disabled value="<?php echo $info['username'];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">
              Tiền 
            </label>
            <div class="col-sm-7">
              <input type="text" class="form-control" value="<?php echo $info['tien'];?>" name="tien">
            </div>
          </div>
          <input type="hidden" class="form-control" name="tridzai">
          <div class="form-group">
            <label class="col-sm-4 control-label">
              Quyền 
            </label>
            <div class="col-sm-7">
              <select class="form-control" name="quyen" id="quyen">
        <option value="ctv">CTV</option>
        <option value="admin">ADMIN</option>
      </select>
            </div>
          </div>     
          <div class="form-group text-center">

            <a class="btn btn-info" href="index.php">
              Quay lại
            </a>
            <button type="su
            bmit" class="btn btn-success">
              Thêm khách hàng
            </button>
          </div>
</form>

    </div>
  </div>
<?php
    exit();
}
if(isset($_SESSION['type'])){
	$type = $_SESSION['type'];
if($type == 'ctv'){
		echo '<div class="alert alert-danger">
  <strong>Xin lỗi: </strong> Bạn không đủ quyền để xem trang này. Vui lòng quay lại trang CTV.
</div>';
	}
	else{
?>
<div class="col-md-12">
  <div class="panel">
    <div class="panel-heading">
    <div class="panel-title">
      <div class="left">Quản lý thành viên <span class="label label-info"><?php echo $thongke =
      mysql_num_rows(mysql_query("SELECT * FROM user"));
       ?></span></div>
      <div class="right">
       <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
      </div>
    </div>
    </div>
    <div class="panel-body">
    <form method="post" action="">
      <table class="table">
        <thead>
          <tr>
            <th>
              <input class="checkitem" type="checkbox" id="check_all" />
            </th>
            <th>
              Username
            </th>
            <th>
              Password(MD5)
            </th>
            <th>
            Tiền
            </th>
            <th>
            Thời gian đăng ký
            </th>
            <th>
             Hành động
            </th>
          </tr>
        </thead>
        <tbody>
        <?php 

$sokhachhang = mysql_query("SELECT * FROM `user` ");

$tongkh = mysql_num_rows($sokhachhang);
$sotrang = ceil($tongkh / 5);

if(isset($_GET['trang'])){
  settype($_GET['trang'], 'int');
  if($_GET['trang'] > $sotrang){
    $trang = $sotrang -1;
  }
  if($_GET['trang'] <= 0){
    $trang = 1;
  }
  else{
    $trang = $_GET['trang'];
  }
  
}
else{
          $trang = 1;
}
$from = ($trang - 1) * 5;
$sqr = mysql_query("SELECT * FROM `user` LIMIT ".$from.",5");
          while ($tri = mysql_fetch_array($sqr)) {
        ?>
          <tr>
            <td>
              <input class="checkitem" type="checkbox" name="id[]" value="<?php echo $tri['id'] ?>" />
            </td>
            <td>
              <?php echo $tri['username'];?>
            </td>
            <td>
              <?php echo $tri['password']; ?>
            </td>
            <td>
              <?php echo number_format($tri['tien'], 0, ',', ','); ?> VNĐ
            </td>
            <td>
              <?php echo $tri['ngaytao'];?>
            </td>
            <td>
              <a href="index.php?sua=<?php echo $tri['username']; ?>"> <span class="label label-info">Sửa</span></a>
            </td>
          </tr>
        <?php
          }
        ?>        
        </tbody>
      </table>
      <button class="btn btn-danger" type="submit" value="delete_all" name="submit"><i class="lnr lnr-trash"></i> <span> XÓA</span></button>
      </form>
<!--       <div action="" style="text-align: center; position: relative; top: 1px;" method="get"> Trang <input style="width: 36px;height: 36px; display: inline;" type="number" name="trang" value=""></div> -->
      <?php 
      $trangtruoc = $trang - 1;
      $trangsau = $trang + 1;
      ?>
<ul class="pager">
  <li class="previous"><a href="?trang=<?php if($trangtruoc <= 0) {echo 1;}else{echo $trangtruoc;}?>">Trước</a></li>
<!--   
 -->  <li class="next"><a href="?trang=<?php if($trangsau > $sotrang) {echo $sotrang;}else{echo $trangsau;}?>">Sau</a></li>
</ul>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(function(){
        /* Check/bỏ chek hết tất cả các records */
        $(document).on('change','#check_all', function(ev){
            $('.checkitem').prop('checked', this.checked).trigger('change');
        });
        /* Check/bỏ chek từng records */
        $(document).on('change','.checkitem', function(ev){
            var _dem = 0;
            var _checked = 1;
            /* Duyệt tất cả các checkitem */
            $('.checkitem').each(function(){
                if($(this).is(':checked')){
                    _dem ++;
                }else{
                    _checked = 0;
                }
            });
            $('#check_all').prop('checked', _checked);
            if(_dem > 0){
                // Hiện nút xóa chọn
                $('button[name=submmit]').show();
            }else{
                // Ẩn nút xóa chọn
                $('button[name=submmit]').hide();
            }
        });
    });
</script>


<!-- <div class="row">
	<div class="col-md-12">
		<div class="panel">
			<div class="panel-heading">
				<h3>Quản lý</h3>
			</div>
			<div class="panel-body">
				<form action="post/setting.php" method="POST">
					<div class="form-group">
					  <label for="cxgia">Giá cảm xúc \ tháng:</label>
					  <input type="number" class="form-control" id="cxgia" value="50000" placeholder="Giá cảm xúc">
					</div>
					<div class="form-group">
					  <label for="cmtgia">Giá bình \ tháng:</label>
					  <input type="number" class="form-control" id="cmtgia" value="50000" placeholder="Giá cảm xúc">
					</div>
		 			<hr>

<button type="submit" class="btn btn-info btn-block">Cập nhật</button>
				</form>
			</div> . panel body -->
<!-- 		</div>
	</div> 
</div>  -->
<?php
	}
include '../incf/foot.php';
}
?>