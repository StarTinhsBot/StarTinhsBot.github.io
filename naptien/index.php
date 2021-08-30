<?php
include '../incf/head.php';
 if(isset($_SESSION['username'])){
?>
<div class="row">
<div class="col-md-12">
 <div class="alert alert-info">
 <li>Có thể nạp tiền trực tiếp bằng thẻ cào</li>
</div>
</div>
<div class="col-md-6">
    <div class="panel">
    <div class="panel-heading">Nạp tiền bằng thẻ cào</div>
      <div class="panel-body">
<form class="form-horizontal form-bk" role="form" method="post">  <!-- form begin-->
<div class="form-group">
    <label for="txtpin" class="col-lg-2 control-label">Loại thẻ</label>
    <div class="col-lg-10">
      <select class="form-control" name="chonmang">
          <option value="VIETEL">Viettel</option>
          <option value="MOBI">Mobifone</option>
          <option value="VINA">Vinaphone</option>
          <option value="GATE">Gate</option>
          <option value="VTC">VTC</option>
        </select>
    </div>
  </div>
  <div class="form-group">
    <label for="txtpin" class="col-lg-2 control-label">Mã thẻ</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="txtpin" name="txtpin" placeholder="Mã thẻ" data-toggle="tooltip" data-title="Mã số sau lớp bạc mỏng"/>
    </div>
  </div>
  <div class="form-group">
    <label for="txtseri" class="col-lg-2 control-label">Số seri</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="txtseri" name="txtseri" placeholder="Số seri" data-toggle="tooltip" data-title="Mã seri nằm sau thẻ">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
  
   <button type="submit" class="btn btn-info" name="napthe">Nạp thẻ</button>
    </div>
  </div>
</div>  
 <hr>
</form>

</div>
</div><!-- .col-md-6 -->

<div class="col-md-6">
  <div class="panel">
    <div class="panel-heading">Nạp tiền bằng ngân hàng</div>
    <div class="panel-body">

    </div>
  </div>
</div>
</div> <!-- .col-md-6 -->

</div> <!-- .row -->
</div>        
    <!-- jQuery -->
    <script src="../assets/jquery.js"></script>
<!--Start of Tawk.to Script-->
</script>
<!--End of Tawk.to Script-->
    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/bootstrap.min.js"></script>
    <script>

    //Submit form
     $('form').submit(function(e){
        $(this).find('button').attr('disabled','');
        $.post('/naptien/napthe.php',$(this).serialize()).done(function(data){
            //console.log(data);
            alert(data);
            window.location = window.location;
        }).fail(function(data){
            alert('Lỗi');
            window.location = window.location;
        });
        return false
        
    });

    $('#logout').click(function(){
        $.post('logout.php',{action:'thoat'}).done(function(data){
            alert(data);
            window.location = window.location;
        }).fail(function(data){
            alert('Lỗi');
            window.location = window.location;
        });
        return false
    });


    </script>
<?php
include '../incf/foot.php';
}
else{
  echo 'Quay lại và đăng nhập tài khoản của bạn trước khi thực hiện nạp tiền.';
}
?>