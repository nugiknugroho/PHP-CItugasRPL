<?php 
 
class Daftaruser extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('/m_daftaruser');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['user'] = $this->m_daftaruser->tampil_data()->result();
		$this->load->view('daftaruser',$data);
	}
 
	function tambah(){
		$this->load->view('daftaruser');
	}
 
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$ttl = $this->input->post('ttl');
		$jeniskelamin = $this->input->post('jeniskelamin');
		$level = $this->input->post('level');
		$active = $this->input->post('active');
 
		$data = array(
			'nama' => $nama,
			'email' => $email,
			'username' => $username,
			'password' => md5($password),
			'ttl' => $ttl,
			'jeniskelamin' => $jeniskelamin,
			'level' => $level,
			'active' => $active
			);
		$this->m_daftaruser->input_data($data,'user');
		redirect('authentikasi/auth/login');
	}
 
}