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
        Form Laporan Transaksi
        <small>Penjualan & Tagihan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Form Laporan Transaksi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <!-- column Penjualan -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Penjualan </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="<?php echo base_url()."index.php/forms/transaksi/processPenjualan"?>" name="form-transaksi-baru" role="form-transaksi-baru">
              <div class="box-body">
                

                <label>Cabang Karyawan</label>
                <div class="form-group">
                  
                  <select name="cabang_karyawan" class="form-control select2" style="width: 100%;">
                    <?php $this->load->view('component/list_cabang');?>
                  </select>
                </div>

                <label>Karyawan</label>
                <div class="form-group">
                  
                  <select name="karyawan" id="karyawan" required data-validation-required-message="Pilih karyawan" class="form-control select2" style="width: 100%;">
                    <?php $this->load->view('component/list_karyawan');?>
                  </select>
                  <span class="help-block">sesuaikan ID karyawan dengan nama karyawan</span>
                </div>

                <div class="form-group">
                  <label>Tanggal</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input name="date" type="date" required data-validation-required-message="Pilih tanggal" class="form-control" type="date" id="myDate" value=<?php echo date("Y-m-d");?> min=<?php echo date("Y-m-d");?>>
                  </div>
                <!-- /.input group -->
                </div>

                  <div class="row">
                    <div class="col-md-4">
                      <label>Jumlah Demo</label>  
                      <div class="form-group input-group">
                        <input  name="demo" required data-validation-required-message="Masukan demo"min="0" type="number" class="form-control">
                        <span class="input-group-addon"><small>demo</small></span>
                      </div>

                    </div>
                    <div class="col-md-4">
                      <label>Unit Tunai</label>
                        <div class="form-group input-group">
                          <input name="tunai_unit" required data-validation-required-message="Masukan jumlah unit" min="0" type="number" class="form-control">
                          <span class="input-group-addon"><small>Tunai</small></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                      <!--input jumlah unit angsuran-->  
                      <label>Unit Angsuran</label>
                        <div class="form-group input-group">
                          <input name="angsuran_unit" required data-validation-required-message="Masukan jumlah unit" min="0" type="number" class="form-control">
                         <span class="input-group-addon"><small>Angsuran</small></span>
                        </div>
                    </div>
                  </div>
                

                  <div class="row">
                    <div class="col-lg-6">
                      <label>Rupiah Tunai</label>
                        <div class="form-group input-group">
                          <span class="input-group-addon"><small>Rp</small>.</span>
                          <input name="tunai_rupiah" required data-validation-required-message="Masukan jumlah uang" step="1000" min="0" type="number" class="form-control">
                          <span class="input-group-addon"><small>.00</small></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                      <!--input jumlah rupiah angsuran-->   
                      <label>Rupiah Angsuran</label>
                        <div class="form-group input-group">
                          <span class="input-group-addon"><small>Rp</small>.</span>
                          <input name="angsuran_rupiah" required data-validation-required-message="Masukan jumlah uang" step="1000" min="0" type="number" class="form-control">
                          <span class="input-group-addon"><small>.00</small></span>
                        </div>      
                    </div>
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
        <!--/.col (right) -->

      <!-- column Tagihan-->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Tagihan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                        <form method="POST" action="<?php echo base_url()."index.php/forms/transaksi/processTagihan"?>" name="form-transaksi-baru" role="form-transaksi-baru">
              <div class="box-body">
                

                <label>Cabang Karyawan</label>
                <div class="form-group">
                  
                  <select name="cabang_karyawan" class="form-control select2" style="width: 100%;">
                    <?php $this->load->view('component/list_cabang');?>
                  </select>
                </div>

                <label>Karyawan</label>
                <div class="form-group">
                  
                  <select name="karyawan" id="karyawan" required data-validation-required-message="Pilih karyawan" class="form-control select2" style="width: 100%;">
                    <?php $this->load->view('component/list_karyawan');?>
                  </select>
                  <span class="help-block">sesuaikan ID karyawan dengan nama karyawan</span>
                </div>


                  <div class="row">
                    <div class="col-lg-6">
                    <label>Tanggal transaksi</label>
                      <div class="form-group input-group">
                        
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div> 
                        <input name="tanggal_transaksi" required data-validation-required-message="Pilih tanggal transaksi" class="form-control" type="date" id="myDate" value=<?php echo date("Y-m-d");?> min=<?php echo date("Y-m-d");?>>
                      </div>  
                    </div>
                    <div class="col-lg-6">
                    <label>Tanggal Setor</label> 
                      <div class="form-group input-group">
                        
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input name="tanggal_setor" id="cabang" required data-validation-required-message="Pilih cabang" class="form-control" type="date" id="myDate" value=<?php $now = strtotime("tomorrow");echo date("Y-m-d",$now);?> min=<?php $now = strtotime("tomorrow");echo date("Y-m-d",$now);?>>
                      </div>
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-md-6">
                      <label>Kuitansi Bawa</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><small>kuitansi</small></span>
                                    <input name="total_kuitansi_bawa" id="cabang" required data-validation-required-message="masukan kuitansi bawa" min="0" type="number" class="form-control">
                                </div>

                    </div>
                    <div class="col-md-6">
                      <label>Kuitansi Jadi uang</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><small>kuitansi</small></span>
                                    <input name="kuitansi_jadi_uang" required data-validation-required-message="masukan jumlah kuitansi" min="0" type="number" class="form-control">
                                </div>
                    </div>
                    <div class="col-md-6">
                      <!--input jumlah unit angsuran-->  
                      <!-- <label>Kuitansi Sisa</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">kuitansi</span>
                                    <p name="kuitansi_sisa" id="kuitansi_sisa" type="number" class="form-control" placeholder="0"></p>
                                </div> -->
                  </div>
                  </div>



                  <div class="row">
                    <div class="col-md-6">
                      <!--input jumlah uang-->  
                            <label>Jumlah Tagihan</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><small>Rp</small></span>
                                    <input name="nominal_tagihan_rupiah" id="cabang" required data-validation-required-message="masukan jumlah tagihan" step="1000" min="0" type="number" class="form-control">
                                    <span class="input-group-addon"><small>.00</small></span>
                                </div>

                    </div>
                    <div class="col-md-6">
                      <!--input jumlah uang-->     
                            <label>Biaya BBM</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><small>Rp</small></span>
                                    <input name="bbm" required data-validation-required-message="masukan biaya bbm" step="1000" min="0" type="number" class="form-control">
                                    <span class="input-group-addon"><small>.00</small></span>
                                </div>
                    </div>
                    <div class="col-md-6">
                      <!--input jumlah uang-->
                            <!-- <label>Akumulasi Tagihan</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <p name="akumulasi_tagihan" id="akumulasi_tagihan" type="number" class="form-control"></p>
                                    <span class="input-group-addon">.00</span>
                                </div> -->
                    </div>
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

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
