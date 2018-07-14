<?php $this->load->view('template/adminheader');?><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
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

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Kontrol User</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Kontrol User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
                <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Sukses</span> Anda sukses login.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
<div class="container">
 
    <?php echo $button; ?> Customer                                                                                  
  <form action="<?php echo $aksi; ?>" method="POST">
    
    <div class="form-group">
        <label>Nama :</label>
        <input type="text" name="nama" class="form-control"
        placeholder="Inputkan nama " required value="<?php echo $nama; ?>">
    </div>

    <div class="form-group">
        <label>Email :</label>
        <input type="text" name="email" class="form-control"
        placeholder="Input email" required value="<?php echo $email; ?>">
    </div>

    <div class="form-group">
        <label>Username :</label>
        <input type="text" name="username" class="form-control"
        placeholder="Inputkan username" required value="<?php echo $username; ?>">
    </div>

    <div class="form-group">
        <label>Password :</label>
        <input type="password" name="password" class="form-control"
        placeholder="Inputkan Password" required value="<?php echo $password; ?>">
    </div>

    <div class="form-group">
        <label>TTL :</label>
        <input type="date" name="ttl" class="form-control"
        placeholder="Inputkan Password" required value="<?php echo $ttl; ?>">
    </div>

   <div class="form-group">
     <label>Jenis Kelamin</label>               
                    
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" name="jeniskelamin" required value="<?php echo $jeniskelamin; ?>">Pria
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" name="jeniskelamin" required value="<?php echo $jeniskelamin; ?>">Wanita
                                </label>
                            </div>
                        </div>
                       

                </div>

    <div class="form-group">
   
    <button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
    </div>
</form>
</div>
        </div>

 <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="<?php echo base_url('assets/') ?>aset/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>aset/js/plugins.js"></script>
    <script src="<?php echo base_url('assets/') ?>aset/js/main.js"></script>


    <script src="<?php echo base_url('assets/') ?>aset/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="<?php echo base_url('assets/') ?>aset/js/dashboard.js"></script>
    <script src="<?php echo base_url('assets/') ?>aset/js/widgets.js"></script>
    <script src="<?php echo base_url('assets/') ?>aset/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="<?php echo base_url('assets/') ?>aset/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>aset/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url('assets/') ?>aset/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
