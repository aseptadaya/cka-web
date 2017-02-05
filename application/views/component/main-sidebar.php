    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>dist/img/logo cka.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <?php
          $user=$this->ion_auth->user()->row()->username;
          echo "<p><strong>".$user."</p></strong>";
          ?>
          
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu</li>
        <li class="treeview">
          <a href="<?php echo base_url()."index.php/main";?>">
            <i class="fa fa-dashboard"></i> <span>Halaman Utama</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Form Data Baru</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/forms/databaru";?>"><i class="fa fa-circle-o"></i> Cabang</a></li>
            <li><a href="<?php echo base_url()."index.php/forms/databaru";?>"><i class="fa fa-circle-o"></i> Karyawan</a></li>
            <li><a href="<?php echo base_url()."index.php/forms/databaru";?>"><i class="fa fa-circle-o"></i> Produk</a></li>
            <li><a href="<?php echo base_url()."index.php/admin/register";?>"><i class="fa fa-circle-o"></i> Admin</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Form Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/forms/transaksi";?>"><i class="fa fa-circle-o"></i> Penjualan</a></li>
            <li><a href="<?php echo base_url()."index.php/forms/transaksi";?>"><i class="fa fa-circle-o"></i> Tagihan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/tables/penjualan";?>"><i class="fa fa-circle-o"></i> Penjualan</a></li>
            <li><a href="<?php echo base_url()."index.php/tables/tagihan";?>"><i class="fa fa-circle-o"></i> Tagihan</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->