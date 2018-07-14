<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelolafilm extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/M_kelolafilm'); 
	}


	public function index()
	{
		$data['film']=$this->M_kelolafilm->Ambil_data(); //Membuat array
		$this->load->view('admin/control_film/v_kelolafilm',$data); 
	} 

	public function tambah(){

		$data=array(
			'aksi'=> site_url('admin/kelolafilm/tambah_aksi'),
			'judul_film'=> set_value('judul_film'),
			'aktor'=> set_value('aktor'),
			'sutradara'=> set_value('sutradara'),
			'durasi'=> set_value('durasi'),
			'id_kategori'=> set_value('id_kategori'),
			'id_studio'=> set_value('id_studio'),
			
			'button'=> 'Tambah',
			);
		$this->load->view('admin/control_film/form_kelfilm',$data);
	}

	public function tambah_aksi(){
		$judul_film = $this->input->post('judul_film');
		$aktor = $this->input->post('aktor');
		$sutradara = $this->input->post('sutradara');
		$durasi = $this->input->post('durasi');
		$id_kategori = $this->input->post('id_kategori');
		$id_studio = $this->input->post('id_studio');

		$data = array(
			'judul_film' => $judul_film,
			'aktor' => $aktor,
			'sutradara' => $sutradara,
			'durasi' => $durasi,
			'id_kategori' => $id_kategori,
			'id_studio' => $id_studio
			);
		$this->M_kelolafilm->tambah_data($data);
		redirect(site_url('admin/kelolafilm'));	
	}

	public function delete($id){
		
		$this->M_kelolafilm->hapus_data($id);
		redirect(site_url('admin/kelolafilm'));
	}

	public function update($id){

		$film=$this->M_kelolafilm->ambil_data_id($id); //memanggil data dari database berdasarkan id yang sudah dipilih. 
		$data=array(
			'aksi'=> site_url('admin/kelolafilm/update_aksi'),
			'judul_film'=> set_value('judul_film', $film->judul_film),
			'aktor'=> set_value('aktor', $film->aktor),
			'sutradara'=> set_value('sutradara', $film->sutradara),
			'durasi'=> set_value('durasi', $film->durasi),
			'id_kategori'=> set_value('id_kategori', $film->id_kategori),
			'id_studio'=> set_value('id_studio', $film->id_studio),
			
			'button'=> 'Edit',
			);
		$this->load->view('admin/control_film/form_kelfilm',$data);
	}
	public function update_aksi(){

		$data=array( 
			'judul_film'=> $this->input->post('judul_film'), //mengisikan database sesuai dengan yang diinputkan di form
			'aktor'=> $this->input->post('aktor'),
			'sutradara'=> $this->input->post('sutradara'),
			'durasi'=> $this->input->post('durasi'),
			'id_kategori'=> $this->input->post('id_kategori'),
			'id_studio'=> $this->input->post('id_studio'),
			);
		
		$id_film=$this->input->post('judul_film'); 
		
		$this->M_kelolafilm->edit_data($id_film,$data);
		redirect(site_url('admin/kelolafilm'));
	}
}
?>
