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
        Tabel Transaksi
        <small>tagihan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li><a href="#">Tables</a></li> -->
        <li class="active">Tabel Tagihan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Tagihan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="table-tagihan" class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th align="center"><small>Cabang</small></th>
                    <th align="center"><small>Karyawan</small></th>
                    <th align="center"><small>Tanggal Transaksi</small></th>
                    <th align="center"><small>Tanggal Setor</small></th>
                    <th align="center"><small>Total Kuitansi</small></th>
                    <th align="center"><small>Kuitansi Jadi Uang</small></th>
                    <th align="center"><small>Nominal Tagihan Rupiah</small></th>
                    <th align="center"><small>BBM</small></th>
                    <th align="center"><small>Total Rupiah</small></th>
                  </tr>
                </thead>
                <tbody>

                <?php foreach($tagihan as $tagihan_item): ?>
                  <tr>
                    <td><?php echo $tagihan_item->cabang; ?></td>
                    <td><?php echo $tagihan_item->nama_karyawan; ?></td>
                    <td><?php echo $tagihan_item->tanggal_transaksi; ?></td>
                    <td><?php echo $tagihan_item->tanggal_setor; ?></td>
                    <td><?php echo $tagihan_item->total_kuitansi_bawa; ?></td>
<!--                    <td><?php //echo $total_unit=$tagihan_item->tunai_unit+$tagihan_item->angsuran_unit; ?></td>-->
                    <td><?php echo $tagihan_item->kuitansi_jadi_uang; ?></td>
                    <td><?php echo $tagihan_item->nominal_tagihan_rupiah; ?></td>
                    <td><?php echo $tagihan_item->bbm; ?></td>
                    <td><?php echo $total_rupiah=$tagihan_item->nominal_tagihan_rupiah-$tagihan_item->bbm; ?></td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php $this->load->view('component/footer'); ?>
  </footer>

  <!-- Control Sidebar -->
    <?php $this->load->view('component/control-sidebar'); ?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#table-tagihan").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
</body>
</html>
