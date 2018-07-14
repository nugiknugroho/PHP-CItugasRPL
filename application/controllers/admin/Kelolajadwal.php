<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelolajadwal extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/M_kelolajadwal');    
		$this->load->model('user/M_film');
		$this->load->model('user/M_tayang');
		$this->load->model('user/M_studio');
		$this->load->model('user/M_kategori');  
	}


	public function index()
	{
		$data['jadwaltayang']=$this->M_kelolajadwal->ambil_data(); //Membuat array
		$this->load->view('admin/control_film/v_kelolajadwal',$data); 
	} 

	public function tambah(){

		$data=array(
			'aksi'=> site_url('admin/kelolajadwal/tambah_aksi'),
			'id_tayang'=> set_value('id_tayang'),
			'judul_film'=> $this->M_film->get_option(),
			'id_kategori'=> $this->M_kategori->get_option(),
			'tanggal_tayang'=> set_value('tanggal_tayang'),
			'id_waktu'=> $this->M_tayang->get_option(),
			'id_studio'=> $this->M_studio->get_option(),
			'hari'=> set_value('hari'),
			
			
			'button'=> 'Tambah',
			);
		$this->load->view('admin/control_film/form_keljadwal',$data);
	}

	public function tambah_aksi(){
		
		$judul_film = $this->input->post('judul_film');
		$id_kategori = $this->input->post('id_kategori');
		$tanggal_tayang = $this->input->post('tanggal_tayang');
		$id_waktu = $this->input->post('id_waktu');
		$id_studio = $this->input->post('id_studio');
		$hari = $this->input->post('hari');

		$data = array(
			
			'judul_film' => $judul_film,
			'id_kategori' => $id_kategori,
			'tanggal_tayang' => $tanggal_tayang,
			'id_waktu' => $id_waktu,
			'id_studio' => $id_studio,
			'hari' => $hari
			
			);
		$this->M_kelolajadwal->tambah_data($data);
		redirect(site_url('admin/kelolajadwal'));	
	}

	public function delete($id){
		
		$this->M_kelolajadwal->hapus_data($id);
		redirect(site_url('admin/kelolajadwal'));
	}

	public function update($id){

		$film=$this->M_kelolajadwal->ambil_data_id($id); //memanggil data dari database berdasarkan id yang sudah dipilih. 
		$data=array(
			'aksi'=> site_url('admin/kelolajadwal/update_aksi'),
			'judul_film'=> set_value('judul_film', $film->judul_film),
			'id_kategori'=> set_value('id_kategori', $film->id_kategori),
			'tanggal_tayang'=> set_value('tanggal_tayang', $film->tanggal_tayang),
			'id_waktu'=> set_value('id_waktu', $film->id_waktu),
			'id_studio'=> set_value('id_studio', $film->id_studio),
			'hari'=> set_value('hari', $film->hari),
			
			'button'=> 'Edit',
			);
		$this->load->view('admin/control_film/form_keljadwal',$data);
	}
	public function update_aksi(){

		$data=array( 
			'judul_film'=> $this->input->post('judul_film'), //mengisikan database sesuai dengan yang diinputkan di form
			'id_kategori'=> $this->input->post('id_kategori'),
			'tanggal_tayang'=> $this->input->post('tanggal_tayang'),
			'id_waktu'=> $this->input->post('id_waktu'),
			'id_studio'=> $this->input->post('id_studio'),
			'hari'=> $this->input->post('hari'),
			);
		
		$id_tayang=$this->input->post('id_tayang'); 
		
		$this->M_kelolajadwal->edit_data($id_tayang,$data);
		redirect(site_url('admin/kelolajadwal'));
	}
}
?>
