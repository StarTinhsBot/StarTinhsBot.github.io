<?php
include '../incf/head.php';
require '../incf/config.php';
include '../incf/func.php';
if(isset($_SESSION['username'])){
  if(isset($_GET['thongbao'])){
  settype($_GET['thongbao'], 'int');
  if($_GET['thongbao'] == 3){
    echo '<script>alert("Xóa thành công!");</script>';
  }
}
?>
<div class="col-md-12">
  <div class="panel">
    <div class="panel-heading">
 <h4><center><strong><i class="fa fa-cog"></i> Quản Lý BOT Comment Hình Ảnh</strong></center> </h4></div>
    <div class="panel-body">
    <form method="post" action="/post/editcmtimg.php">
      <table class="table">
        <thead>
          <tr>
            <th>
              <input class="checkitem" type="checkbox" id="check_all" />
            </th>
            <th>
              UID FACEBOOK	
            </th>
            <th>
              HỌ TÊN
            </th>
            <th>
             TOKEN
            </th>

            <th>
             COOKIE
            </th>

            <th>
             HÀNH ĐỘNG
            </th>
          </tr>
        </thead>
        <tbody>
        <?php 

if($_SESSION['type'] == 'admin'){
    $sokhachhang = mysql_query("SELECT * FROM `khachhangcmtimg`");
}
else{
  $sokhachhang = mysql_query("SELECT * FROM `khachhangcmtimg` WHERE useradd = '".$_SESSION['username']."'");
}

$tongkh = mysql_num_rows($sokhachhang);
$sotrang = ceil($tongkh / 20);

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
$from = ($trang - 1) * 20;
if($_SESSION['type'] == 'admin'){
$sqr = mysql_query("SELECT * FROM `khachhangcmtimg` LIMIT ".$from.",20");
}
else{
  $sqr = mysql_query("SELECT * FROM `khachhangcmtimg` WHERE useradd = '".$_SESSION['username']."' LIMIT ".$from.",20");
}
          while ($tri = mysql_fetch_array($sqr)) {
        ?>
          <tr>
            <td>
              <input class="checkitem" type="checkbox" name="id[]" value="<?php echo $tri['id'] ?>" />
            </td>
            <td>
              <?php echo $tri['user_id'];?>
            </td>
            <td>
              <?php echo $tri['name'];?>
            </td>
            <td>
              <?php echo checklivetkcmt($tri['token']);?>
            </td>
            <td>
              <?php echo checkliveckcmt($tri['cookie']);?>
            </td>
            <td>
              <a href="/post/editcmtimg.php?sua=<?php echo $tri['id']; ?>"> <span class="label label-info">Sửa</span></a>
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

<!-- <div class="col-md-12">
  <div class="panel">
  <div class="panel-heading">
      Chỉnh sửa
<div class="right">
    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
</div> 
  </div>
  <div class="panel-body">
    
      <div class="form-group">
        <label>Họ và tên:</label>
          <input class="form-control" type="text" disabled>
      </div>

      <div class="form-group">
        <label>Thêm tháng:</label>
        <input type="text" class="form-control" placeholder="Tháng thêm...">
      </div>

      <div class="form-group">
        <label>Cảm xúc:</label>
        <select class="form-control">
          <option>LIKE</option>
          <option>LOVE</option>
          <option>HAHA</option>
          <option>ANGRY</option>
          <option>WOW</option>
        </select>
      </div>

      <div class="form-group">
        <label >Cookie:</label>
        <textarea class="form-control" rows="5"></textarea>
      </div>

      <div class="form-group">
        <label >Access_token:</label>
        <textarea class="form-control" rows="5"></textarea>
      </div>
      <button type="button" class="btn btn-primary btn-block">Cập nhật</button>
  </div>
  </div>

</div> -->

<?php
include '../incf/foot.php';
}
?>
