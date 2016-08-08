<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('component/head');?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <?php $this->load->view('component/main-header');?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php $this->load->view('component/main-sidebar');?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Form Data Baru
        <small>Cabang & Karyawan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li><a href="#">Forms</a></li> -->
        <li class="active">Form Data Baru</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Cabang Baru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="<?php echo base_url()."index.php/forms/databaru/insertCabang"?>" name="form-cabang-baru" role="form-cabang-baru">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Cabang</label>
                  <input name="cabang" class="form-control" id="NamaCabang" placeholder="Masukan Kota Cabang" required data-validation-required-message="Mohon masukan nama cabang">
                </div>
                <div class="form-group">
                  <label>Nama Pimpinan Cabang</label>
                  <input name="pim_cabang" class="form-control" id="NamaCabang" placeholder="Masukan Kota Cabang" required data-validation-required-message="Mohon masukan nama pimpinan cabang">
                </div>
                <div class="form-group">
                  <label>Alamat Cabang</label>
                  <textarea name="alamat_cabang" class="form-control" rows="5" placeholder="Masukan Alamat Cabang" required data-validation-required-message="Mohon masukan alamat cabang"></textarea>
                </div>
                <div class="form-group">
                  <label>Telepon Cabang</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <input name="telepon_cabang" type="tel" class="form-control">
                  </div>
                <!-- /.input group -->
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="reset" class="btn btn-default pull-left">Reset</button>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Karyawan Baru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="<?php echo base_url()."index.php/forms/databaru/insertKaryawan"?>" name="form-data-baru" role="form-data-baru">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Karyawan</label>
                  <input name="nama_karyawan" type="text" class="form-control" id="inputName" placeholder="Nama Lengkap Karyawan">
                </div>
                <div class="form-group">
                  <label>Cabang Karyawan</label>
                  <select name="cabang_karyawan" class="form-control select2" style="width: 100%;">
                    <?php $this->load->view('component/list_cabang');?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat Karyawan</label>
                  <textarea name="alamat_karyawan" class="form-control" rows="3" placeholder="Masukan Alamat Karyawan" required data-validation-required-message="Mohon masukan alamat karyawan"></textarea>
                </div>
                <div class="form-group">
                  <label>Telepon Karyawan</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <input name="telepon_karyawan" type="text" class="form-control">
                  </div>
                <!-- /.input group -->
                </div>
                <div class="form-group">
                <div class="row">
                  <div class="col-lg-6">
                  <label>
                    Tim Karyawan
                  </label>
                  <div class="input-group">
                    <!-- <div class="checkbox"> -->
                      <span>
                        <input type="radio" name="tim_karyawan" value="A" class="minimal" checked>
                        A
                      </span>
                    <!-- </div> -->
                    <!-- <div class="checkbox"> -->
                      <span>
                        <input type="radio" name="tim_karyawan" value="B" class="minimal">
                        B
                      </span>
                    <!-- </div> -->
                    <!-- <div class="checkbox"> -->
                      <span>
                        <input type="radio" name="tim_karyawan" value="C" class="minimal">
                        C
                      </span>
                    <!-- </div> -->
                  </div>
                  <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                  <label>Divisi</label>
                    <div class="radio">
                      <label>
                        <input type="radio" name="divisi" id="radDiv" value="Penjualan" class="minimal" checked>
                        Penjualan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="divisi" id="radDiv" value="Tagihan" class="minimal">
                        Tagihan
                      </label>
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
              </div>
              <!-- /.row -->
              </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default pull-left">Reset</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php $this->load->view('component/footer');?>
  </footer>

  <!-- Control Sidebar -->
    <?php $this->load->view('component/control-sidebar');?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<?php //$this->load->view('component/add-ons');?>
<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>

</body>
</html>
