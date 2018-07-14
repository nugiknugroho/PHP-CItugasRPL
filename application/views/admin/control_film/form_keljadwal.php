<?php $this->load->view('template/adminheader');?> 

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
                        <h1>Kontrol Film</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Kontrol Film</li>
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
 
    <?php echo $button; ?>                                                                                   
  <form action="<?php echo $aksi; ?>" method="POST"> 
    
   <div class = "form-group">
          <label style="color: #e3e4ed">Judul Film</label>
          <div class="row">
              <div class="col-sm-5">
               <select class="form-control" name="judul_film">
                    <?php foreach($judul_film as $row => $value) { ?>
                    <option value="<?php echo $value->judul_film;?>"><?php echo $value->judul_film;?></option>
                    <?php } ?>
                </select>             
              </div>
          </div>
        </div>

     <div class = "form-group">
          <label style="color: #e3e4ed">Kategori</label>
          <div class="row">
              <div class="col-sm-5">
               <select class="form-control" name="id_kategori">
                    <?php foreach($id_kategori as $row => $value) { ?>
                    <option value="<?php echo $value->id_kategori;?>"><?php echo $value->id_kategori;?></option>
                    <?php } ?>
                </select>             
              </div>
          </div>
        </div>

    <div class="form-group">
        <label>Tanggal Tayang :</label>
        <div class="row">
            <div class="col-sm-5">
                <input type="date" name="tanggal_tayang" class="form-control"
        placeholder="Inputkan Tanggal" required value="<?php echo $tanggal_tayang; ?>">
            </div>
        </div>
        
    </div>

    <div class = "form-group">
          <label style="color: #e3e4ed">Waktu</label>
          <div class="row">
              <div class="col-sm-5">
               <select class="form-control" name="id_waktu">
                    <?php foreach($id_waktu as $row => $value) { ?>
                    <option value="<?php echo $value->id_waktu;?>"><?php echo $value->id_waktu;?></option>
                    <?php } ?>
                </select>             
              </div>
          </div>
        </div>

       <!-- /.form-group -->
    <div class = "form-group">
          <label style="color: #e3e4ed">Waktu</label>
          <div class="row">
              <div class="col-sm-5">
               <select class="form-control" name="id_studio">
                    <?php foreach($id_studio as $row => $value) { ?>
                    <option value="<?php echo $value->id_studio;?>"><?php echo $value->id_studio;?></option>
                    <?php } ?>
                </select>             
              </div>
          </div>
        </div>

     <div class="form-group">
                    <label>Hari :</label>
                    
                        <div class="row">
                   
                            <div class="col-sm-5">
                                    <select class="form-control" name="hari">
                                            <option></option>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option> 
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
                                    </select>
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
