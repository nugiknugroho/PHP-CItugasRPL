<?php $this->load->view('template/userheader'); ?>

<div class="row content" style="background: -webkit-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Chrome 10+, Saf5.1+ */
    background:    -moz-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* FF3.6+ */
    background:     -ms-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* IE10 */
    background:      -o-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Opera 11.10+ */
    background:         linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* W3C */">

<br><br>
<h3 style="color: white">Daftar Pesanan Anda</h3> 
<hr>
<br><br>


    
        <a href="<?php echo site_url('user/strukuser') ?>" class="btn btn-danger" style="margin-top:20px;margin-bottom:20px;"><i class="fa fa-file-pdf-o"></i> Cetak Struk</a>
    
        
        <br><br>

    <div class="table-responsive">          
 <table class="table table-bordered table-striped">
            <thead >
                <tr class="bg-info ">
                    <th>#</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Judul Film</th>
                    <th>Tanggal Pesan</th>
                    <th>Waktu Tayang</th>
                    <th>Studio</th>
                    <th>Kursi</th>
                    <th>Hari</th>
                    <th>Total Harga</th>
                   
                </tr>
            </thead>
            
            <tbody id="list-itens">
                
                <?php 

                $no=1;
                
                foreach ($pemesanan as $key => $value) {?>
                <tr style="background-color: white">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value->id_pemesanan; ?></td>
                    <td><?php echo $value->nama; ?></td>
                    <td><?php echo $value->judul_film; ?></td>
                    <td><?php echo $value->Tanggal; ?></td>
                    <td><?php echo $value->id_waktu; ?></td>
                    <td><?php echo $value->id_studio; ?></td>
                    <td><?php echo $value->no_kursi; ?></td>
                    <td><?php echo $value->hari; ?></td>
                    <td><?php echo $value->totalharga; ?></td>
               
                </tr>
                <?php } ?>
            </tbody>    
            
        </table>
  </div>


    </div>