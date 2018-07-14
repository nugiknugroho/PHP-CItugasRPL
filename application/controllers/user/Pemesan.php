<?php 
/**
* 
*/
class Pemesan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user/M_pemesan');
	}

	function index()
	{
		//print_r($this->prodi_model->ambil_data());
		 $data['user']=$this->M_pemesan->ambil_data();//mengirimkan array dengan isinya prodi tadi
		
		}


	}
	?>