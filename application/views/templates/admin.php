<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $judul; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/select2/dist/css/select2.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/dist/css/skins/_all-skins.min.css'); ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/morris.js/morris.css'); ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css'); ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PQ</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Plunk-Q</b>Sport</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/adminlte/dist/img/user2-160x160.jpg'); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('role'); ?></span>
            </a>
            <ul class="dropdown-menu">
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo site_url('login/logout');?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <?php if ($this->session->userdata('logged_in') == TRUE ): ?>
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/adminlte/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="font-size: 24px;"><?php echo $this->session->userdata('jenis_pengguna'); ?></p>
        </div>
      </div>
      <?php endif; ?>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($halaman=="Home"){echo "active";}?>">
          <a href="<?php echo site_url('home'); ?>">
            <i class="fa fa-user-md"></i> <span>Home</span>
          </a>
        </li>
        <?php if ($this->session->userdata('jenis_pengguna') == 'admin' || $this->session->userdata('jenis_pengguna') == 'pelanggan' || $this->session->userdata('jenis_pengguna') == 'gudang' || $this->session->userdata('jenis_pengguna') == 'pemilik'): ?>
        <li class="<?php if($halaman=="Produk"){echo "active";}?>">
          <a href="<?php echo site_url('produk'); ?>">
          <i class="fa fa-user"></i> <span>Produk</span>
          </a>
        </li>
        <?php endif ?>
        <?php if ($this->session->userdata('jenis_pengguna') == 'admin' || $this->session->userdata('jenis_pengguna') == 'gudang' || $this->session->userdata('jenis_pengguna') == 'pemilik'): ?>
        <li class="<?php if($halaman=="Bahan"){echo "active";}?>">
          <a href="<?php echo site_url('bahan'); ?>">
          <i class="fa fa-user"></i> <span>Bahan</span>
          </a>
        </li>
        <?php endif ?>
        <?php if ($this->session->userdata('jenis_pengguna') == 'admin'): ?>
        <li class="<?php if($halaman=="Pemesanan"){echo "active";}?>">
          <a href="<?php echo site_url('pemesanan'); ?>">
          <i class="fa fa-user"></i> <span>Pemesanan</span>
          </a>
        </li>
        <?php endif ?>
        <?php if ($this->session->userdata('jenis_pengguna') == 'admin'): ?>
        <li class="<?php if($halaman=="User"){echo "active";}?>">
          <a href="<?php echo site_url('user'); ?>">
          <i class="fa fa-user"></i> <span>User</span>
          </a>
        </li>
        <?php endif ?>
        <?php if ($this->session->userdata('jenis_pengguna') == 'admin'): ?>
        <li class="<?php if($halaman=="Pembayaran"){echo "active";}?>">
          <a href="<?php echo site_url('pembayaran'); ?>">
          <i class="fa fa-user"></i> <span>Pembayaran</span>
          </a>
        </li>
        <?php endif ?>
        <?php if ($this->session->userdata('jenis_pengguna') == 'pelanggan'): ?>
        <li class="<?php if($halaman=="Pembayaran"){echo "active";}?>">
          <a href="<?php echo site_url('riwayat-pembayaran'); ?>">
          <i class="fa fa-user"></i> <span>Pembayaran</span>
          </a>
        </li>
        <?php endif ?>
        <?php if ($this->session->userdata('jenis_pengguna') == 'admin' || $this->session->userdata('jenis_pengguna') == 'pemilik'): ?>
        <li class="<?php if($halaman=="Pesanan"){echo "active";}?>">
          <a href="<?php echo site_url('pesanan'); ?>">
          <i class="fa fa-user"></i> <span>Pesanan</span>
          </a>
        </li>
        <li class="<?php if($halaman=="Pelanggan"){echo "active";}?>">
          <a href="<?php echo site_url('pelanggan'); ?>">
          <i class="fa fa-user"></i> <span>Pelanggan</span>
          </a>
        </li>
        <?php endif ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $halaman ?>
      </h1>
    </section>

      <!-- Main content -->
      <section class="content">
        <!-- Main row -->
        <div class="row">
          <!-- main section -->
          <section class="col-lg-12">
            <!-- /.box -->
            <?php 
            $data=$this->session->flashdata('sukses');
            if($data!=""){ ?>
            <div id="notifikasi" class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Sukses! </strong> <?=$data;?></div>
            <?php } ?>

            <?php 
            $data2=$this->session->flashdata('error');
            if($data2!=""){ ?>
            <div id="notifikasi" class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong> Error! </strong> <?=$data2;?></div>
            <?php } ?>
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><?php echo $judul_box; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <?php $this->load->view($konten);?>    
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
          </section>
          <!-- /.main section -->
        </div>
        <!-- /.row (main row) -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    </div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
  reserved.
</footer>

      <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/adminlte/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/adminlte/bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/adminlte/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/adminlte/bower_components/raphael/raphael.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/bower_components/morris.js/morris.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/adminlte/bower_components/moment/min/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/adminlte/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/adminlte/dist/js/pages/dashboard.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/adminlte/dist/js/demo.js'); ?>"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({
      'language':{
        'url':'//cdn.datatables.net/plug-ins/1.10.19/i18n/Indonesian.json'
      }
    })

    $('.datepicker').datepicker({
      autoclose: true,
      format: "yyyy-mm-dd"
    })

    $(".year").datepicker( {
      format: " yyyy", // Notice the Extra space at the beginning
      viewMode: "years", 
      minViewMode: "years"
    });

    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>
<script type="text/javascript">
  $('#notifikasi').slideDown('slow').delay(3000).slideUp('slow');
</script>
<script>
// tooltip demo
$('.tooltip-demo').tooltip({
    selector: "[data-popup=tooltip]",
    container: "body"
})

</script>
<script>
// $("#myPesan").change(function () {
//      var x = $(this).find(':selected').data('harga');
//      document.getElementById("harga").value = x;
// });

function jumlahFunction() {
    var x = document.getElementById("myJumlah").value;
    var y = document.getElementById("harga").value;
    document.getElementById("total").value = x*y;
}
</script>
</body>
</html>
