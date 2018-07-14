<?php $this->load->view('template/header') ?>

<div class="contain">
      <div class="mid">
      <h3>SINOPSIS FILM</h3>
      <hr>
        <table>
          <tr>
            <td><img src="assets/img/avg.jpg"></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        
        </table>
         <h4>Trailer Film</h4>
         <hr>
         <video width="1000" height="600" controls="">
          <source src="<?php echo base_url()."assets/"; ?>video/dbs.mp4">
        </video>
 </div>

	</div> 

	<?php $this->load->view('template/footer') ?>