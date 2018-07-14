<?php 
/**
* 
*/
class Tayang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user/M_tayang');
	}

	function index()
	{
		//print_r($this->prodi_model->ambil_data());
		 $data['waktutayang']=$this->M_tayang->ambil_data();//mengirimkan array dengan isinya prodi tadi
		
		}


	}
	?>