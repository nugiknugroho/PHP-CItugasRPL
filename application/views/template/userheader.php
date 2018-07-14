<!DOCTYPE html>
<html lang="en"> 
<head>
  <title>Bioskop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>aset/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>aset/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>aset/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>aset/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>aset/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>aset/scss/style.css">
    <link href="<?php echo base_url('assets/') ?>aset/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {
      height: 1000px;
      width: 100%;
    }
    
 
   
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
       
                <a class="navbar-brand" href="<?php echo site_url('user/user'); ?>"><h2>GO-Bioskop</h2></a>
            
            </div> 

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo site_url('user/user'); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Semua Data</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Jadwal Film</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo site_url('user/jadwal'); ?>">Jadwal Film</a></li>

                           
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Pesan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="<?php echo site_url('user/lamanpesan/tambah'); ?>">Pesan</a></li>
                            <li><i class="fa fa-table"></i><a href="<?php echo site_url('user/listpesanuser'); ?>">Daftar Pesanan Anda</a></li>                        </ul>
                    </li>
           

                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
     <div id="right-panel" class="right-panel">
    <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
               
                </div>

                <div class="col-sm-5">

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url('assets/') ?>img/user.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="<?php echo site_url('authentikasi/auth/logout'); ?>"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
      
                                    <div class="user-area float-right">
                  <h3><small>Selamat Datang <?php echo $this->session->userdata('username'); ?></small> </h3>
                </div>


                </div>
            </div>

        </header>