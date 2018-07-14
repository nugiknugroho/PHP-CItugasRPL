<!DOCTYPE html>
<html>
<head>
	<title>Bioskop</title>
	<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
  		<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css')?>">
  		<link rel="stylesheet" href="<?=base_url('assets/css/stylelgn.css')?>">
  		<script src="assets/js/jquery-3.2.1.min.js"></script>
  		<script src="assets/js/bootstrap.min.js"></script>
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
<a href="<?=base_url('dashboard')?>"><img src="<?=base_url('assets/img/icon.png')?>"/></a><br/>

</div>

    <div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
<form class="form-horizontal" method="post" action="<?php echo base_url('authentikasi/auth/login'); ?>">
 <?php
      //menampilkan error menggunakan alert javascript
        if(isset($error)){
        echo '<script>
        alert("'.$error.'");
        </script>';
        }
      ?>
<fieldset>

  <input id="username" name="username" type="text" placeholder="Masukkan User Name" class="form-control input-md">
  <div class="spacing"><input type="checkbox" name="checkboxes" id="checkboxes-0" value="1"><small> Ingat Saya</small></div>
  <input id="password" name="password" type="password" placeholder="Masukkan Password" class="form-control input-md">
  <div class="spacing"><a href="<?=base_url('daftaruser')?>"><small> Daftar Disini</small></a><br/></div>
  <button name="submit" class="btn btn-info btn-sm pull-right" type="submit" value="login">Log In</button>

</fieldset>
</form>
</div>
    
</div>
    
</div>
</div>


</div>

</body>
</html>