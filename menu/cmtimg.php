<?php
include '../incf/head.php';
require '../incf/config.php';
require '../incf/func.php';
$setting = setting();
if(isset($_SESSION['username'])){
?>
  <div id="thongbao" class="col-md-12"></div>
<div class="col-md-12">
  <div class="panel">
  <div class="panel-heading">
     <center><strong><i class="fa fa-plus"></i> THÊM KHÁCH HÀNG</strong></center> 
<div class="right">
    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
</div> 
  </div>
  <div class="panel-body">   
<form role="form" method="post" class="form-horizontal">
          <div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-success" type="button"><i class="fa fa-retweet"></i> Access_Token:</button>
											</span>
										  <input type="text" class="form-control" name="token" placeholder="Dán Token vào đây...">
										</div></br>

        <div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-success" type="button"><i class="fa fa-clock-o"></i> Thời gian (tháng):</button>
											</span>
										 <input type="number" class="form-control" name="thoigian" placeholder="Nhập số tháng sử dụng...">
										</div></br>	
            <div class="input-group">
               
											<span class="input-group-btn">
												<button class="btn btn-success" type="button"><i class="fa fa-fw fa-exchange"></i> Bật/Tắt Comment:</button></span>
        <select class="form-control" name="battatcmt">
              <option value="0">Tắt Comment</option>
              <option value="1">Bật Comment</option>
        </select>
            </div>
          </br>
       <div class="input-group">
               
											<span class="input-group-btn">
												<button class="btn btn-success" type="button"><i class="fa fa-fw fa-comment"></i> Nội Dung Comment:</button></span>
                            <input type="text" class="form-control" name="noidungcmt" id="comment" placeholder="Nội dung bạn muốn comment..."  required>
                        </div>
                    <br>
<div class="input-group">
               
											<span class="input-group-btn">
												<button class="btn btn-success" type="button"><i class="fa fa-fw fa-comment"></i> Link ảnh comment:</button></span>
                           <input type="url" class="form-control" name="anh" placeholder="Dán link ảnh vào đây..."required>
                        </div>
                    <br>
      

          <div class="form-group text-center">
            <input type="hidden" name="action" value="themkhachang">
            <button type="submit" class="btn btn-danger">
              Thêm khách hàng
            </button>
          </div>
        </form>
        </div>
        </div>

</div>
<?php $infouser = thongtinuser($_SESSION['username']); ?>

<div class="col-md-12">
<div class="panel">
    <div class="panel-heading"><i class="fa fa-line-chart"></i> Thống kê hiện có <?php
      //Lấy ra số người dùng mà đã thêm 
      $select = mysql_query("SELECT * FROM `khachhangcmtimg` WHERE useradd = '".$_SESSION['username']."'");
      $tonguser = mysql_num_rows($select);
      echo '<span class="badge">'.$tonguser.'</span> người dùng mà bạn đã thêm.';
      $giatri = mysql_fetch_array($select);
      ?><div class="right">
    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
</div> </div>
    <div class="panel-body"><div class="table-responsive">   

              <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Còn lại</th>
        <th>Trạng thái</th>
      </tr>
    </thead>
    <tbody>
<?php
//Lấy thông tin khách hàng
$member = mysql_query("SELECT * FROM `khachhangcmtimg` WHERE useradd = '".$_SESSION['username']."' ORDER BY id DESC LIMIT 10"); 
//Lấy cảm xúc
while ($jfsad = mysql_fetch_array($member)){
  if($jfsad['battatcmt'] == '1'){
    $btcmt = 'ĐÃ BẬT';
  }
  else{
    $bt = 'ĐÃ TẮT';
  }
  echo '<tr>';
  echo '<td>'.$jfsad['user_id'].'</td>';
  echo '<td>'.$jfsad['name'].'</td>';
  $songayh = $jfsad['timemua'] - time();
  echo '<td>'.ham_chuyen_doi($songayh).'</td>';
  echo '<td>'.$btcmt.'</td>';
  echo '</tr>';
}

?>
    </tbody>
  </table> </div>
    </div>
</div>
</div>
<script type="text/javascript">   
  $('form').submit(function(e){
        var tienco = <?php echo $infouser['tien'];?>;
        var tien = <?php echo $setting['tiencmtimg']; ?>;
        var phithem = 0;
        var thang = $("input[name='thoigian']").val();
        if(thang <= 0){
              alert('Số tháng ko hơp lệ');
              return false
           }
        //$(this).find('button').attr('disabled','');
        $(this).find('button').html('<i class="fa fa-spinner faa-spin animated"></i> Đang xử lý');
        $.post('../post/cmtimg.php',$(this).serialize()).done(function(data){
           alert(data);
           

           $("#sl").html(thang);
           $("#tienmua").html((thang * tien).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' VNĐ');
           $("#phithem").html(phithem.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' VNĐ');
           
           $("#thanhtien").html((thang * tien + phithem).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' VNĐ');
           if(tienco < (thang * tien + phithem)){
            $("#thongbao").html('<div class="alert alert-warning alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Trạng thái: </strong> Số tiền trong tài khoản của bạn không đủ để thực hiện quá trình thanh toán.</div>');
           }
           else{
            $("#thongbao").html('<div class="alert alert-info alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Trạng thái: </strong> Có thể thanh toán, quá trình thanh toán có thể thực hiện.</div>');
           }
          $("form").find('button').html('Thêm khách hàng');
          //$("form").find('button').attr('','disabled');
           //window.location = window.location;  
           
        }).fail(function(data){
            alert('Lỗi');
            window.location = window.location;
        });
        return false   
    });
</script>
<?php
}
else{
  echo '<script>window.location.href = "../login.php?i=1";</script>';
}
include '../incf/foot.php';

?>