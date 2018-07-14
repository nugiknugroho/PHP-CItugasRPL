<?php 
/**
* 
*/
class Film extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user/M_film');
	}

	function index()
	{
		//print_r($this->prodi_model->ambil_data());
		 $data['film']=$this->M_film->ambil_data();//mengirimkan array dengan isinya prodi tadi
		
		}


	}
	?>