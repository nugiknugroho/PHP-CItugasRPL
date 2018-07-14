<!DOCTYPE html>
<html>
<head>
	<title>Bioskop</title>
	<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.min.css">
  		<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.css">
  		<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/stylelgn.css">
  		<script src="<?php echo base_url('assets/') ?>js/jquery-3.2.1.min.js"></script>
  		<script src="<?php echo base_url('assets/') ?>js/bootstrap.min.js"></script>
</head>
<body>
<div class="middlePage">
<div class="page-header">
  <h1 class="logo">GO-Bioskop <small>Selamat Datang di Website Kami</small></h1>
</div>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Silahkan Login Dahulu</h3>
  </div>
  <div class="panel-body">
  
  <div class="row">
  
<div class="col-md-5" >
<a href="<?=base_url('dashboard')?>"><img src="assets/img/icon.png"/></a><br/>

</div>

    <div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
<form class="form-horizontal" action="" method="post">
<fieldset>

  <input id="textinput" name="textinput" type="text" placeholder="Masukkan User Name" class="form-control input-md">
  <div class="spacing"><input type="checkbox" name="checkboxes" id="checkboxes-0" value="1"><small> Ingat Saya</small></div>
  <input id="textinput" name="textinput" type="text" placeholder="Masukkan Password" class="form-control input-md">
  <div class="spacing"><a href="daftar.html"><small> Daftar Disini</small></a><br/></div>
  <button id="singlebutton" name="singlebutton" class="btn btn-info btn-sm pull-right">Log In</button>


</fieldset>
</form>
</div>
    
</div>
    
</div>
</div>


</div>

</body>
</html>