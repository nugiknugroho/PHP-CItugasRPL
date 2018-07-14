<!DOCTYPE html>
<html>
<head>
	<title>Bioskop</title>
	<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/stylelgn.css')?>">
 		<script src="assets/js/jquery-3.2.1.min.js"></script> 
  		<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="middlePage">
            <form class="form-horizontal" role="form" action="<?php echo base_url(). 'daftaruser/tambah_aksi'; ?>" method="post">
                <h2>Form Registrasi</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Nama Lengkap" name="nama" class="form-control" autofocus>
                    </div> 
                </div>
                 <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" id="email" placeholder="username" name="username" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" name="password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" name="ttl" class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Jenis Kelamin</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" name="jeniskelamin" value="Pria">Pria
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" name="jeniskelamin" value="Wanita">Wanita
                                </label>
                            </div>
                        </div>
                        </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Level</label>
                    <div class="col-sm-6">
                        <div class="row">
                   
                            <div class="col-sm-5">
                                    <select class="form-control" name="level">
                                            <option></option>
                                            <option value="user">User</option> 
                                    </select>
                            </div>
                        </div>
                        </div>
                </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3">Ket</label>
                    <div class="col-sm-6">
                        <div class="row">
                   
                            <div class="col-sm-5">
                                    <select class="form-control" name="active">
                                            <option></option>
                                            <option value="1">1</option> 
                                    </select>
                            </div>
                        </div>
                        </div>
                </div> <!-- /.form-group -->
          
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-info btn-sm pull-right" value="Tambah">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div>
</body>
</html>