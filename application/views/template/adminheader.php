<!doctype html>
 <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GO-Bioskop</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">  
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>aset/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>aset/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>aset/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>aset/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>aset/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>aset/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>aset/scss/style.css">
    <link href="<?php echo base_url('assets/') ?>aset/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
       
                <a class="navbar-brand" href="./"><h2>GO-Bioskop</h2></a>
            
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo site_url('admin/admin'); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Semua Data</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Data Pengguna</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo site_url('admin/kelolauser'); ?>">Data User</a></li>
                            
                            <li><i class="fa fa-bars"></i><a href="<?php echo site_url('admin/kelolapemesan'); ?>">Data Pemesan</a></li>
                           
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Data film</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="<?php echo site_url('admin/kelolafilm'); ?>">Data film</a></li>
                            <li><i class="fa fa-table"></i><a href="<?php echo site_url('admin/kelolajadwal'); ?>">Data Jadwal Film</a></li>                        </ul>
                    </li>
           

                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->