<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('component/head');?>
  <script>
    function validate(){

      if(!document.getElementById("password").value==document.getElementById("re_password").value)alert("Passwords do no match");
      return document.getElementById("password").value==document.getElementById("re_password").value;
      return false;
    }
  </script>
</head>
<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="<?php echo base_url()."index.php/main"?>" class="logo-lg"><b>CIPTA</b>KaryaAbadi</a>
    </div>

    <div class="register-box-body">
      <p class="register-box-msg">Register a new admin</p>

      <form onSubmit="return validate()" action="<?php echo base_url()."index.php/admin/register/process"?>" method="POST">
        <div class="form-group has-feedback">
          <input name="username" type="text" class="form-control" placeholder="Username" required data-validation-required-message="Please enter username.">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input name="email" type="email" class="form-control" placeholder="Email" required data-validation-required-message="Please enter email.">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input name="password" type="password" class="form-control" placeholder="Password" id="password" required data-validation-required-message="Please enter password.">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input name="re_password" type="password" class="form-control" placeholder="Retype password" id="re_password" required data-validation-required-message="Please enter password.">
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
        <label>Cabang Admin</label>
          <select name="company" class="form-control select2" style="width: 100%;">
            <?php $this->load->view('component/list_cabang');?>
          </select>
        </div>


        <div class="row form-group">
        <!-- <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div> -->
        <!-- /.col -->
        <!-- <div class="col-xs-4"> -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
      </div> -->
      <!-- <span>Sudah Terdaftar? </span> -->
      <!--<a href="<?php //echo base_url()."index.php/admin/login";?>" class="text-center"> Login</a>-->
    </div>
    <!-- /.form-box -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery 2.2.3 -->
  <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="../../plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
    });
  </script>
</body>
</html>
