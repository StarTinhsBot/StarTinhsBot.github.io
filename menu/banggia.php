<?php
include '../incf/head.php';
if(isset($_SESSION['username'])){
  $setting = mysql_fetch_array(mysql_query("SELECT * FROM `setting`"));

?>
<div class="col-md-12">
  <!-- BASIC TABLE -->

<div class="alert alert-success">
  <strong>Thông báo: </strong> TOÀN BỘ BOT TRÊN HỆ THỐNG ĐỀU HOÀN TOÀN MIỄN PHÍ 100%.
</div>

  <div class="panel">
    <div class="panel-heading">
      <h3 class="panel-title">
        Bảng giá
      </h3>
    </div>
    <div class="panel-body">
      <table class="table">
        <thead>
          <tr>
            <th>
              Chức năng
            </th>
            <th>
              Cookie
            </th>
            <th>
              Token
            </th>
            <th>
             Cookie + Token
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              Cảm xúc
            </td>
            <td>
              <?php echo number_format($setting['tiencamxuc'], 0, ',', ','); ?> VNĐ
            </td>
            <td>
             <?php echo number_format($setting['tiencamxuc'], 0, ',', ','); ?> VNĐ
            </td>
            <td>
             <?php echo number_format($setting['tiencamxuc'], 0, ',', ','); ?> VNĐ
            </td>
          </tr>
          <tr>
            <td>
              Bình luận
            </td>
      <td>
          <?php echo number_format($setting['tiencmt'], 0, ',', ','); ?> VNĐ
            </td>
            <td>
             <?php echo number_format($setting['tiencmt'], 0, ',', ','); ?> VNĐ
            </td>
            <td>
              <?php echo number_format($setting['tiencmt'], 0, ',', ','); ?> VNĐ
            </td>
          </tr>
          <tr>
            <td>
              Comment hình ảnh
            </td>
            <td>
              <?php echo number_format($setting['tiencmtimg'], 0, ',', ','); ?> VNĐ
            </td>
            <td>
             <?php echo number_format($setting['tiencmtimg'], 0, ',', ','); ?> VNĐ
            </td>
            <td>
             <?php echo number_format($setting['tiencmtimg'], 0, ',', ','); ?> VNĐ
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END BASIC TABLE -->
</div>
<?php
include '../incf/foot.php';
include '../incf/func.php';
}
?>
