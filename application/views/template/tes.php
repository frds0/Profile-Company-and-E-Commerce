<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Point of Sales BENAUF</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin-lte/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin-lte/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin-lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin-lte/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin-lte/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin-lte/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-purple sidebar-mini">

    <div class="wrapper">
        <header class="main-header">
            <a href="<?= base_url('dashboard') ?>" class="logo">
                <span class="logo-mini"><b>POS</b></span>
                <span class="logo-lg">POS <b>Benauf</b></span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url('') ?>assets/images/user_icon1.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?= ucfirst($this->fungsi->user_login()->username) ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="<?= base_url('') ?>assets/images/user_icon1.jpg" class="img-circle" alt="User Image">
                                    <p>
                                        <?= $this->fungsi->user_login()->name ?>
                                        <small><?= $this->fungsi->user_login()->address ?></small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= site_url('auth/logout') ?>" class="btn btn-danger btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url() ?>assets/images/user_icon1.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?= ucfirst($this->fungsi->user_login()->username) ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- search form -->
                <!-- <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form> -->

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <?php if ($this->session->userdata('level') == 1) { ?>
                        <li class="header">MAIN MENU</li>
                        <li <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                            <a href="<?= site_url('dashboard') ?>">
                                <i class="fa fa-home"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'supplier' ? 'class="active"' : '' ?>>
                            <a href="<?= site_url('supplier') ?>">
                                <i class="fa fa-truck"></i> <span>Suppliers</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'customer' ? 'class="active"' : '' ?>>
                            <a href="<?= site_url('customer') ?>">
                                <i class="fa fa-users"></i> <span>Customers</span>
                            </a>
                        </li>
                        <li class="treeview <?= $this->uri->segment(1) == 'category' || $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == 'item' ? 'active' : '' ?>">
                            <a href="<?= site_url('') ?>">
                                <i class="fa fa-th"></i>
                                <span>Products</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li <?= $this->uri->segment(1) == 'category' ? 'class="active"' : '' ?>>
                                    <a href="<?= site_url('category') ?>"><i class="fa fa-circle-o"></i> Categories</a>
                                </li>
                                <li <?= $this->uri->segment(1) == 'unit' ? 'class="active"' : '' ?>>
                                    <a href="<?= site_url('unit') ?>"><i class="fa fa-circle-o"></i> Units</a>
                                </li>
                                <li <?= $this->uri->segment(1) == 'item' ? 'class="active"' : '' ?>>
                                    <a href="<?= site_url('item') ?>"><i class="fa fa-circle-o"></i> Items</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="<?= site_url('') ?>">
                                <i class="fa fa-shopping-bag"></i>
                                <span>Transactions</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?= site_url('') ?>"><i class="fa fa-archive"></i> Point Of Sales<small class="label pull-right bg-red">HOT</small></a></li>
                                <li><a href="<?= site_url('') ?>"><i class="fa fa-archive"></i> Stock In</a></li>
                                <li><a href="<?= site_url('') ?>"><i class="fa fa-archive"></i> Stock Out</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="<?= site_url('') ?>">
                                <i class="fa fa-pie-chart"></i>
                                <span>Reports</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?= site_url('') ?>"><i class="fa fa-book"></i> Sales Report</a></li>
                                <li><a href="<?= site_url('') ?>"><i class="fa fa-book"></i> Stocks</a></li>
                            </ul>
                        </li>
                        <li class="header">SETTINGS</li>
                        <li><a href="<?= site_url('user') ?>"><i class="fa fa-user"></i> <span>Users</span></a></li>
                    <?php } elseif ($this->session->userdata('level') == 2) { ?>
                        <li class="header">MAIN MENU</li>
                        <li <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                            <a href="<?= site_url('dashboard') ?>">
                                <i class="fa fa-home"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'supplier' ? 'class="active"' : '' ?>>
                            <a href="<?= site_url('supplier') ?>">
                                <i class="fa fa-truck"></i> <span>Suppliers</span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </section>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php echo $contents ?>
        </div>
        <!-- Close Wrapper-->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2022 <a href="#">Rizky Benauf</a>.</strong> All rights
            reserved.
        </footer>
    </div>

    <!-- jQuery 3 -->
    <script src="<?= base_url() ?>assets/admin-lte/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url() ?>assets/admin-lte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?= base_url() ?>assets/admin-lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url() ?>assets/admin-lte/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/admin-lte/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>assets/admin-lte/dist/js/demo.js"></script>

    <script src="<?= base_url() ?>assets/admin-lte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/admin-lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#table1').DataTable({

                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": false,
                "info": false,
                "autoWidth": true,
                "responsive": true,
                "language": {
                    "emptyTable": "Tidak Ada Data Yang Tersedia",
                    "sZeroRecords": "Tidak Ada Data Yang Dicari"
                }
            });
        });
    </script>
</body>

</html>