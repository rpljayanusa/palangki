<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= assets() ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= assets() ?>bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= assets() ?>bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= assets() ?>dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= assets() ?>dist/css/skins/_all-skins.min.css">
</head>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="<?= assets() ?>index2.html" class="navbar-brand"><b>Plunk-Q </b>Sport</a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="messages-menu">
                                <a href="<?= site_url('login') ?>">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="content-wrapper">
            <div class="container">
                <section class="content-header">
                    <h1>
                        Daftar Produk
                        <small>Plunk-Q Sport</small>
                    </h1>
                </section>
                <section class="content">
                    <div class="row">
                        <?php $data = $this->db->get('produk')->result_array();
                        foreach ($data as $d) { ?>
                            <div class="col-md-3">
                                <div class="box box-widget">
                                    <div class="box-body box-profile">
                                        <img class="profile-user-img img-responsive" src="<?= assets_produk() . $d['gambar_produk'] ?>" alt="User profile picture">

                                        <h3 class="profile-username text-center"><?= $d['nama_produk'] ?></h3>

                                        <p class="text-muted text-center"><?= $d['jenis_produk'] ?></p>

                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item">
                                                <b>Harga</b> <a class="pull-right"><?= $d['harga_produk'] ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>
            </div>
        </div>
        <footer class="main-footer">
            <div class="container">
                <strong>Copyright &copy; 2021 <a href="<?= site_url() ?>">Plunk-Q </b>Sport</a>.</strong> All rights
                reserved.
            </div>
        </footer>
    </div>

    <script src="<?= assets() ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= assets() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= assets() ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= assets() ?>bower_components/fastclick/lib/fastclick.js"></script>
    <script src="<?= assets() ?>dist/js/adminlte.min.js"></script>
    <script src="<?= assets() ?>dist/js/demo.js"></script>
</body>

</html>