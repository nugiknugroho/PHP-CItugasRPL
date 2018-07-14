<?php 
/**
* 
*/
class Studio extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user/M_studio');
	}

	function index()
	{
		//print_r($this->prodi_model->ambil_data());
		 $data['studio']=$this->M_studio->ambil_data();//mengirimkan array dengan isinya prodi tadi
		
		}


	}
	?>