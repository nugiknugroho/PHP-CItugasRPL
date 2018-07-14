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
          <p>Sang Nabi Linux</p>
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
