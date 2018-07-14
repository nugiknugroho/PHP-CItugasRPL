<?php 
/**
* 
*/
class Jadwal extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user/M_kelolajadwal');
	}

	function index()
	{
		//print_r($this->prodi_model->ambil_data());
		 $data['jadwaltayang']=$this->M_kelolajadwal->ambil_data();
		 $this->load->view('user/v_jadwal',$data);
		
		}


	}
	?>