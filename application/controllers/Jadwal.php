<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_jadwal');  
	}

	public function index()
	{
		$data['jadwaltayang']=$this->M_jadwal->Ambil_data(); //Membuat array
		$this->load->view('jadwal',$data); 
	} 

}
