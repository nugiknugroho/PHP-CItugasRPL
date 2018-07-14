<?php 

Class Listpesanuser extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('user/M_lamanpesan');
		
	}

	function index()
	{
		 $data['pemesanan']=$this->M_lamanpesan->cetak_data();
		 $this->load->view('user/v_listpesan', $data); 
		}
}

 ?>