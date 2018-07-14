<?php 

class Lamanpesan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user/M_lamanpesan');
		$this->load->model('user/M_pemesan');
		$this->load->model('user/M_film');
		$this->load->model('user/M_tayang');
		$this->load->model('user/M_studio'); 

	}

	function index()
	{
		 $data['pemesanan']=$this->M_lamanpesan->ambil_data();
		 $this->load->view('user/v_lamanpesan'); 
		}
		
		function tambah()
		{
			$data=array(
			'aksi'    								=> site_url('user/lamanpesan/tambah_aksi'),//Di arahkan kemana
			'id_pemesanan'							=> set_value('id_pemesanan'),
			'nama'									=> $this->M_pemesan->get_option(),
			'judul_film'							=> $this->M_film->get_option(),
			'Tanggal'								=> set_value('Tanggal'),
			'id_waktu' 								=> $this->M_tayang->get_option(),
			'id_studio'								=> $this->M_studio->get_option(),
			'no_kursi'								=> set_value('no_kursi'),
			'hari'									=> set_value('hari'),
			'totalharga'							=> set_value('totalharga'),
			'button' 								=> 'Pesan'
		);
			$this->load->view('user/v_lamanpesan',$data);
		}
		function tambah_aksi()
		{

			$data=array(
				
				'nama' 							=> $this -> input -> post('nama'),
				'judul_film' 					=> $this -> input -> post('judul_film'),
				'Tanggal' 						=> $this -> input -> post('Tanggal'),
				'id_waktu' 						=> $this -> input -> post('id_waktu'),	
				'id_studio' 					=> $this -> input -> post('id_studio'),
				'no_kursi' 						=> $this -> input -> post('no_kursi'),	
				'hari' 							=> $this -> input -> post('hari'),
				'totalharga' 					=> $this -> input -> post('totalharga')	
				
				
			);
			
			$cek_kursi = $this->M_lamanpesan->cek($this->input->post('no_kursi'));

			if(empty($cek_kursi)){

				$this->M_lamanpesan->tambah_data($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Selamat Anda telah berhasil booking.</div>');
				redirect(site_url('user/listpesanuser'));
			}
			else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Maaf nomor kursi sudah di pesan,silahkan pilih nomor yang lain </div>');
				redirect(site_url('user/lamanpesan/tambah'));
			}
		}


		  
	}
?>