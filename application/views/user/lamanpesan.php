<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bioskop</title>
  <meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.min.css">
  		<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.css">
  		<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css">
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
  		<script src="<?php echo base_url('assets/') ?>js/jquery-3.2.1.min.js"></script>
  		<script src="<?php echo base_url('assets/') ?>js/bootstrap.min.js"></script>

  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {
      height: 1000px;
      width: 100%;
    }
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: black;
      height: 100%;
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Data Saya</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Profil saya</a></li>

                           
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Pesan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="<?php echo site_url('user/lamanpesam'); ?>">Pesan</a></li>                        </ul>
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
                            <img class="user-avatar rounded-circle" src="<?php echo base_url('assets/') ?>img/adminnugik.jpg" alt="User Avatar">
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


  <div class="row content" style="background: -webkit-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Chrome 10+, Saf5.1+ */
    background:    -moz-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* FF3.6+ */
    background:     -ms-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* IE10 */
    background:      -o-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Opera 11.10+ */
    background:         linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* W3C */">
             <h2 style="color: white">NOMOR KURSI TERSEDIA</h2>
      <hr>
   
      <h2 style="color: white">Kursi Tersedia</h2>
      <table width="10%" border="0" cellpadding="4" cellspacing="4" class="aaaaa">
        <tr>
          <td><div class="bangku btn-hijau" data-id="0"></div></td>
          <td style="color: white">Tersedia</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div class="bangku btn-merah" data-id="0"></div></td>
          <td style="color: white">Tidak Tersedia</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div class="bangku btn-biru" data-id="0"></div></td>
          <td style="color: white">Terpilih</td>
        </tr>
      </table>
      <br>
      <br>
        <table width="10%" border="0" cellpadding="4" cellspacing="4" class="aaaaa">
 <tr>
    <td><div class="bangku btn-hijau" data-id="0">1</div></td>
    <td><div class="bangku btn-hijau" data-id="0">2</div></td>
    <td><div class="bangku btn-hijau" data-id="0">3</div></td>
    <td><div class="bangku btn-hijau" data-id="0">4</div></td>
    <td><div class="bangku btn-hijau" data-id="0">5</div></td>
    <td><div class="bangku btn-hijau" data-id="0">6</div></td>
    <td><div class="bangku btn-hijau" data-id="0">7</div></td>
    <td><div class="bangku btn-hijau" data-id="0">8</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div class="bangku btn-hijau" data-id="0">9</div></td>
    <td><div class="bangku btn-hijau" data-id="0">10</div></td>
    <td><div class="bangku btn-hijau" data-id="0">11</div></td>
    <td><div class="bangku btn-hijau" data-id="0">12</div></td>
    <td><div class="bangku btn-hijau" data-id="0">13</div></td>
    <td><div class="bangku btn-hijau" data-id="0">14</div></td>
    <td><div class="bangku btn-hijau" data-id="0">15</div></td>
    <td><div class="bangku btn-hijau" data-id="0">16</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="color: white">A</td>
  </tr>
  <tr>
    <td><div class="bangku btn-hijau" data-id="0">1</div></td>
    <td><div class="bangku btn-hijau" data-id="0">2</div></td>
    <td><div class="bangku btn-hijau" data-id="0">3</div></td>
    <td><div class="bangku btn-hijau" data-id="0">4</div></td>
    <td><div class="bangku btn-hijau" data-id="0">5</div></td>
    <td><div class="bangku btn-hijau" data-id="0">6</div></td>
    <td><div class="bangku btn-hijau" data-id="0">7</div></td>
    <td><div class="bangku btn-hijau" data-id="0">8</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div class="bangku btn-hijau" data-id="0">9</div></td>
    <td><div class="bangku btn-hijau" data-id="0">10</div></td>
    <td><div class="bangku btn-hijau" data-id="0">11</div></td>
    <td><div class="bangku btn-hijau" data-id="0">12</div></td>
    <td><div class="bangku btn-hijau" data-id="0">13</div></td>
    <td><div class="bangku btn-hijau" data-id="0">14</div></td>
    <td><div class="bangku btn-hijau" data-id="0">15</div></td>
    <td><div class="bangku btn-hijau" data-id="0">16</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="color: white">B</td>
  </tr>
  <tr>
    <td><div class="bangku btn-hijau" data-id="0">1</div></td>
    <td><div class="bangku btn-hijau" data-id="0">2</div></td>
    <td><div class="bangku btn-hijau" data-id="0">3</div></td>
    <td><div class="bangku btn-hijau" data-id="0">4</div></td>
    <td><div class="bangku btn-hijau" data-id="0">5</div></td>
    <td><div class="bangku btn-hijau" data-id="0">6</div></td>
    <td><div class="bangku btn-hijau" data-id="0">7</div></td>
    <td><div class="bangku btn-hijau" data-id="0">8</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div class="bangku btn-hijau" data-id="0">9</div></td>
    <td><div class="bangku btn-hijau" data-id="0">10</div></td>
    <td><div class="bangku btn-hijau" data-id="0">11</div></td>
    <td><div class="bangku btn-hijau" data-id="0">12</div></td>
    <td><div class="bangku btn-hijau" data-id="0">13</div></td>
    <td><div class="bangku btn-hijau" data-id="0">14</div></td>
    <td><div class="bangku btn-hijau" data-id="0">15</div></td>
    <td><div class="bangku btn-hijau" data-id="0">16</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="color: white">C</td>
  </tr>
  <tr>
    <td><div class="bangku btn-hijau" data-id="0">1</div></td>
    <td><div class="bangku btn-hijau" data-id="0">2</div></td>
    <td><div class="bangku btn-hijau" data-id="0">3</div></td>
    <td><div class="bangku btn-hijau" data-id="0">4</div></td>
    <td><div class="bangku btn-hijau" data-id="0">5</div></td>
    <td><div class="bangku btn-hijau" data-id="0">6</div></td>
    <td><div class="bangku btn-hijau" data-id="0">7</div></td>
    <td><div class="bangku btn-hijau" data-id="0">8</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div class="bangku btn-hijau" data-id="0">9</div></td>
    <td><div class="bangku btn-hijau" data-id="0">10</div></td>
    <td><div class="bangku btn-hijau" data-id="0">11</div></td>
    <td><div class="bangku btn-hijau" data-id="0">12</div></td>
    <td><div class="bangku btn-hijau" data-id="0">13</div></td>
    <td><div class="bangku btn-hijau" data-id="0">14</div></td>
    <td><div class="bangku btn-hijau" data-id="0">15</div></td>
    <td><div class="bangku btn-hijau" data-id="0">16</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="color: white">D</td>
  </tr>
  <tr>
    <td><div class="bangku btn-hijau" data-id="0">1</div></td>
    <td><div class="bangku btn-hijau" data-id="0">2</div></td>
    <td><div class="bangku btn-hijau" data-id="0">3</div></td>
    <td><div class="bangku btn-hijau" data-id="0">4</div></td>
    <td><div class="bangku btn-hijau" data-id="0">5</div></td>
    <td><div class="bangku btn-hijau" data-id="0">6</div></td>
    <td><div class="bangku btn-hijau" data-id="0">7</div></td>
    <td><div class="bangku btn-hijau" data-id="0">8</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div class="bangku btn-hijau" data-id="0">9</div></td>
    <td><div class="bangku btn-hijau" data-id="0">10</div></td>
    <td><div class="bangku btn-hijau" data-id="0">11</div></td>
    <td><div class="bangku btn-hijau" data-id="0">12</div></td>
    <td><div class="bangku btn-hijau" data-id="0">13</div></td>
    <td><div class="bangku btn-hijau" data-id="0">14</div></td>
    <td><div class="bangku btn-hijau" data-id="0">15</div></td>
    <td><div class="bangku btn-hijau" data-id="0">16</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="color: white">E</td>
  </tr>
  <tr>
    <td><div class="bangku btn-hijau" data-id="0">1</div></td>
    <td><div class="bangku btn-hijau" data-id="0">2</div></td>
    <td><div class="bangku btn-hijau" data-id="0">3</div></td>
    <td><div class="bangku btn-hijau" data-id="0">4</div></td>
    <td><div class="bangku btn-hijau" data-id="0">5</div></td>
    <td><div class="bangku btn-hijau" data-id="0">6</div></td>
    <td><div class="bangku btn-hijau" data-id="0">7</div></td>
    <td><div class="bangku btn-hijau" data-id="0">8</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div class="bangku btn-hijau" data-id="0">9</div></td>
    <td><div class="bangku btn-hijau" data-id="0">10</div></td>
    <td><div class="bangku btn-hijau" data-id="0">11</div></td>
    <td><div class="bangku btn-hijau" data-id="0">12</div></td>
    <td><div class="bangku btn-hijau" data-id="0">13</div></td>
    <td><div class="bangku btn-hijau" data-id="0">14</div></td>
    <td><div class="bangku btn-hijau" data-id="0">15</div></td>
    <td><div class="bangku btn-hijau" data-id="0">16</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="color: white">F</td>
  </tr>   
</table>

<p>&nbsp;</p>
<a href="#"><button id="lihattotal" class="btn btn-primary">TOTAL PESAN</button></a>
<p>&nbsp;</p>
<button id="lihatbangku" class="btn btn-primary">Detail Bangku Pesan</button> 
 
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
<script>
function writeCookie(name,value,days) { 
    var date, expires;
    if (days) {
        date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        expires = "; expires=" + date.toGMTString();
            }else{
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var i, c, ca, nameEQ = name + "=";
    ca = document.cookie.split(';');
    for(i=0;i < ca.length;i++) {
        c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1,c.length);
        }
        if (c.indexOf(nameEQ) == 0) {
            return c.substring(nameEQ.length,c.length);
        }
    }
    return '';
}
$(document).ready(function(){
	$('.bangku').each(function() {
		    $(this).click(function() {
		    	
		    	var i=$(this).attr("data-id");
					if(i=="1")
					{
						return false;
					}else{
						if(i=="0")
						{
							$(this).attr('class','btn-biru bangku');
							$(this).attr('data-id','3');
							Tambah();
						}else if(i=="3"){
							$(this).attr('class','btn-hijau bangku');
							$(this).attr('data-id','0');
							Tambah();
						}
						
					}
					
				
				
		    });
  		});
  	
  	$("#lihattotal").click(function(){
  		var total=$('div[data-id="3"]').length;
  		alert("Jumlah pemesanan " + total);
  	});
  	
  	$("#lihatbangku").click(function(){
  		var str = [], item;
			    $.each($('div[data-id="3"]'), function (index, value) {
			        item = $(this).text();                   
			        str.push(item);                   
			    });
			    var selek=str.join(',');
			    alert("Bangku yg dipesan "+selek);
  	});
  		
  	function Tambah() {
		  var total=$('div[data-id="3"]').length;
		    	var str = [], item;
			    $.each($('div[data-id="3"]'), function (index, value) {
			        item = $(this).text();                   
			        str.push(item);                   
			    });
			    var selek=str.join(',');
		    	writeCookie('totseat',total,1);
		    	writeCookie('selekseat',selek,1);
		    	
	}
});
</script>
</html>
