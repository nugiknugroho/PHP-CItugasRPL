<?php $this->load->view('template/userheader'); ?>

<div class="row content" style="background: -webkit-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Chrome 10+, Saf5.1+ */
    background:    -moz-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* FF3.6+ */
    background:     -ms-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* IE10 */
    background:      -o-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Opera 11.10+ */
    background:         linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* W3C */"> 

<br><br>
<h3 style="color: white">Jadwal Film</h3> 
<hr>



<div class="table-responsive">          
 <table class="table table-bordered table-striped">
            <thead >
                <tr class="bg-info ">
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Studio</th>
                    <th>Hari</th>
                    
                </tr>
            </thead>
            
            <tbody id="list-itens">
                
                <?php 

                $no=1;
                foreach ($jadwaltayang as $key => $value) {?>
                <tr style="background-color: white">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value->judul_film; ?></td>
                    <td><?php echo $value->id_kategori; ?></td>
                    <td><?php echo $value->tanggal_tayang; ?></td>
                    <td><?php echo $value->id_waktu; ?></td>
                    <td><?php echo $value->id_studio; ?></td>
                    <td><?php echo $value->hari; ?></td>
          
                </tr>
                
                <?php }?>
                
                
            </tbody>    
            
        </table>
  </div>


    </div>