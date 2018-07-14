<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelolapemesan extends CI_Controller {


	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/M_kelolapemesan'); 
	}


	public function index()
	{
		$data['pemesanan']=$this->M_kelolapemesan->Ambil_data(); //Membuat array
		$this->load->view('admin/control_pemesan/v_kelolapemesan',$data); 
	} 

	public function delete($id){
		
		$this->M_kelolapemesan->hapus_data($id);
		redirect(site_url('admin/kelolapemesan'));
	}

}

?>
