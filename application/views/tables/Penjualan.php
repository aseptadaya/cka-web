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
        <small>Penjualan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li><a href="#">Tables</a></li> -->
        <li class="active">Tabel Penjualan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Penjualan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="table-penjualan" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th rowspan="2" align="center"><small>Cabang</small></th>
                  <th rowspan="2" align="center"><small>Tim</small></th>
                  <th rowspan="2" align="center"><small>Sub</small></th>
                  <th rowspan="2" align="center"><small>Nama</small></th>
                  <th rowspan="2" align="center"><small>Demo</small></th>
                  <th colspan="3" align="center"><small>Unit</small></th>
                  <th colspan="3" align="center"><small>Rupiah</small></th>
                  <!-- <th><small>Unit Tunai</small></th> -->
                  <!-- <th><small>Unit Angsuran</small></th> -->
                  <!-- <th><small>Unit Total</small></th> -->
                  <!-- <th><small>Rupiah Tunai</small></th> -->
                  <!-- <th><small>Rupiah Angsuran</small></th> -->
                  <!-- <th><small>Rupiah Total</small></th> -->
                </tr>
                <tr>
                  <th><small>Tunai</small></th>
                  <th><small>Angsuran</small></th>
                  <th><small>Total</small></th>
                  <th><small>Tunai</small></th>
                  <th><small>Angsuran</small></th>
                  <th><small>Total</small></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($data as $penjualan){?>
                <tr>
                  <td><?php echo $penjualan['id_cabang'];?></td>
                  <td><?php echo $penjualan['id_karyawan'];?>
                  </td>
                  <td><?php echo $penjualan['id_karyawan'];?>
                  </td>
                  <td><?php echo $penjualan['id_karyawan'];?>
                  </td>
                  <td><?php echo $penjualan['demo'];?>
                  </td>
                  <td><?php echo $penjualan['tunai_unit'];?>
                  </td>
                  <td><?php echo $penjualan['angsuran_unit'];?>
                  </td>
                  <td><?php echo $total_unit=$penjualan['tunai_unit']+$penjualan['angsuran_unit'];?>
                  </td>
                  <td><?php echo $penjualan['tunai_rupiah'];?>
                  </td>
                  <td><?php echo $penjualan['angsuran_rupiah'];?>
                  </td>
                  <td><?php echo $total_rupiah=$penjualan['tunai_unit']+$penjualan['angsuran_rupiah'];?>
                  </td>

                </tr>
                <?php }?>
                </tbody>
                <tfoot>
                <tr>
                  <th><small>Rendering engine</small></th>
                  <th><small>Browser</small></th>
                  <th><small>Platform(s)</small></th>
                  <th><small>Engine version</small></th>
                  <th><small>CSS grade</small></th>
                </tr>

                </tfoot>
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
    $("#table-penjualan").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
