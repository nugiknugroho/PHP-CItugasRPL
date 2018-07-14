
<!DOCTYPE html>
<html>
<head>
	<title>Bioskop</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.min.css">
  		<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.css">
  		<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css">
  		<script src="<?php echo base_url('assets/') ?>js/jquery-3.2.1.min.js"></script>
  		<script src="<?php echo base_url('assets/') ?>js/bootstrap.min.js"></script>


</head>
<body style="height: 1500px">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?=base_url('dashboard')?>">GO-Bioskop</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?=base_url('jadwal')?>">Jadwal</a></li>
      <li><a href="<?=base_url('authentikasi/auth/login')?>">Pesan Tiket</a></li>
      <li><a href="#">Tentang Kami</a></li>
      <li><a href="#">Sponsor</a></li>
    </ul>
  </div>
</nav>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="assets/img/slider/slide1.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>TEGAR ADITIA</h3>
        </div>
      </div>

      <div class="item">
        <img src="assets/img/slider/slide2.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>LUTFIA</h3>
          <p>Anggota AL-FATAA</p>
        </div>
      </div>
    
      <div class="item">
        <img src="assets/img/slider/slide3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>FAUZIYAH</h3>
          <p>ANAK BUAH KANG FAHMI</p>
        </div>
      </div>

       <div class="item">
        <img src="assets/img/slider/slide4.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>NUGROHO</h3>
          <p>ANAK BUAH KANG FAHMI</p>
        
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container">
  	<!-- <div class="header">Untuk bagian header...</div> -->
	<div class="main">
		<!-- <div class="left">Untuk kolom bagian Kiri...</div> -->
		<div class="middle">
		
			<div class="card-list">
    <div class="card">
        <div class="card__image"><img src="assets/img/poster1.jpg" alt=""></div>
        <div class="card__content">
            <h2 class="card__title">AVENGERS</h2>
            <div class="card__desc">
                <p>Culpa suscipit explicabo non minus dicta voluptate quidem saepe aliquam beatae, totam placeat iste officiis, voluptates tempora enim aperiam ipsam animi mollitia aut praesentium ad, adipisci vitae. Nesciunt, similique, architecto?</p>
                <a href="<?=base_url('infofilm')?>"><button class="btn btn-primary btn-block">READ MORE</button></a>
            </div>

        </div>
    </div>

    <div class="card">
        <div class="card__image"><img src="assets/img/poster1.jpg" alt=""></div>
        <div class="card__content">
            <h2 class="card__title">DRAGON BALL</h2>
            <div class="card__desc">
                <p>Culpa suscipit explicabo non minus dicta voluptate quidem saepe aliquam beatae, totam placeat iste officiis, voluptates tempora enim aperiam ipsam animi mollitia aut praesentium ad, adipisci vitae. Nesciunt, similique, architecto?</p>
                <a href="<?=base_url('infofilm1')?>"><button class="btn btn-primary btn-block">READ MORE</button></a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card__image"><img src="assets/img/poster1.jpg" alt=""></div>
        <div class="card__content">
            <h2 class="card__title">DEADPOOL 2</h2>
            <div class="card__desc">
                <p>Culpa suscipit explicabo non minus dicta voluptate quidem saepe aliquam beatae, totam placeat iste officiis, voluptates tempora enim aperiam ipsam animi mollitia aut praesentium ad, adipisci vitae. Nesciunt, similique, architecto?</p>
                <a href="<?=base_url('infofilm2')?>"><button class="btn btn-primary btn-block">READ MORE</button></a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card__image"><img src="assets/img/poster1.jpg" alt=""></div>
        <div class="card__content">
            <h2 class="card__title">IT</h2>
            <div class="card__desc">
                <p>Culpa suscipit explicabo non minus dicta voluptate quidem saepe aliquam beatae, totam placeat iste officiis, voluptates tempora enim aperiam ipsam animi mollitia aut praesentium ad, adipisci vitae. Nesciunt, similique, architecto?</p>
                <a href="<?=base_url('infofilm3')?>"><button class="btn btn-primary btn-block">READ MORE</button></a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card__image"><img src="assets/img/poster1.jpg" alt=""></div>
        <div class="card__content">
            <h2 class="card__title">VENOM</h2>
            <div class="card__desc">
                <p>Culpa suscipit explicabo non minus dicta voluptate quidem saepe aliquam beatae, totam placeat iste officiis, voluptates tempora enim aperiam ipsam animi mollitia aut praesentium ad, adipisci vitae. Nesciunt, similique, architecto?</p>
                <a href="<?=base_url('infofilm4')?>"><button class="btn btn-primary btn-block">READ MORE</button></a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card__image"><img src="assets/img/poster1.jpg" alt=""></div>
        <div class="card__content">
            <h2 class="card__title">WIRO SABLENG</h2>
            <div class="card__desc">
                <p>Culpa suscipit explicabo non minus dicta voluptate quidem saepe aliquam beatae, totam placeat iste officiis, voluptates tempora enim aperiam ipsam animi mollitia aut praesentium ad, adipisci vitae. Nesciunt, similique, architecto?</p>
                <a href="<?=base_url('infofilm5')?>"><button class="btn btn-primary btn-block">READ MORE</button></a>
            </div>
        </div>
    </div>

</div>

<h2>COMING SOON</h2>
<hr>
		</div>
		<div class="right">Untuk kolom bagian kanan...
      
    </div>
	</div>
	<div class="footer">Untuk bagian footer...</div>

	<div id="footer">
	<footer id="footer">
         <div class="container">
            <div class="hidden-xs">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <h2 class="logo logo-footer">GO-Bioskop</h2>
                        <p class="desc">
                            Tegar Aditia Pratama
                            <br>Mokhamad Nugroho
                            <br>Fauziyah
                            <br>Lutfia
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <p class="link-title">COMPANY</p>
                        <ul>
                            <li>
                                <p>Terms &amp; Condition</p>
                            </li>
                            <li>
                                <p>Privacy Policy</p>
                            </li>
                            <li>
                                <p>Project Protection</p>
                            </li>
                            <li>
                                <p>FAQ</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <p class="link-title">CONTACT US</p>
                           <ul>
                          <li>Nugik : 085646473651</li>
                          <li>Tegar : 083386868366</li>
                          <li>Lutfia : 093039090329</li>
                          <li>Fauziyah : 0909090909</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <p class="link-title">RESOURCHES</p>
                        <ul>
                            <li>
                                <p>Blog</p>
                            </li>
                            <li>
                                <p>Advertisement</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </footer>
    </div>
  </div>

</body>
</html>