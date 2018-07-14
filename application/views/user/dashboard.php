<?php $this->load->view('template/userheader'); ?>
  <div class="row content" style="background: -webkit-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Chrome 10+, Saf5.1+ */
    background:    -moz-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* FF3.6+ */
    background:     -ms-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* IE10 */
    background:      -o-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Opera 11.10+ */
    background:         linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* W3C */">

   

      <h1 style="color: white">JUDUL FILM TERSEDIA</h1>
      <hr>
      <div class="contain">
        <div class="card-list">
          <div class="card-list">
    <div class="card">
        <div class="card__image"><img src="<?=base_url('assets/img/poster1.jpg')?>" alt=""></div>
        <div class="card__content">
            <h2 class="card__title" style="color: white">AVENGERS</h2>
            <div class="card__desc">
                <p style="color: white">Culpa suscipit explicabo non minus dicta voluptate quidem saepe aliquam beatae, totam placeat iste officiis, voluptates tempora enim aperiam ipsam animi mollitia aut praesentium ad, adipisci vitae. Nesciunt, similique, architecto?</p>
                <a href="<?php echo site_url('user/lamanpesan/tambah'); ?>"><button class="btn btn-primary btn-block">Pesan Sekarang</button></a>
            </div>

        </div>
    </div>

     <div class="card">
        <div class="card__image"><img src="<?=base_url('assets/img/poster1.jpg')?>" alt=""></div>
        <div class="card__content">
            <h2 class="card__title" style="color: white">VENOM</h2>
            <div class="card__desc">
                <p style="color: white">Culpa suscipit explicabo non minus dicta voluptate quidem saepe aliquam beatae, totam placeat iste officiis, voluptates tempora enim aperiam ipsam animi mollitia aut praesentium ad, adipisci vitae. Nesciunt, similique, architecto?</p>
                <a href="<?php echo site_url('user/lamanpesan/tambah'); ?>"><button class="btn btn-primary btn-block">Pesan Sekarang</button></a>
            </div>

        </div>
    </div>
        </div>
      </div>



    </div>
  </div>


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
