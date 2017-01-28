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
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
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
    <?php $this->load->view('component/add-ons.php');?>
</body>
</html>
