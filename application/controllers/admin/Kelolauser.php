<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Kelolauser extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/M_kelolauser');
	}


	public function index()
	{
		$data['user']=$this->M_kelolauser->Ambil_data(); //Membuat array
		$this->load->view('admin/control_user/v_kelolauser',$data);
	} 

	public function tambah(){

		$data=array(
			'aksi'=> site_url('admin/kelolauser/tambah_aksi'),
			'nama'=> set_value('nama'),
			'email'=> set_value('email'),
			'username'=> set_value('username'),
			'password'=> set_value (md5('password')),
			'ttl'=> set_value('ttl'),
			'jeniskelamin'=> set_value('jeniskelamin'),
			'button'=> 'Tambah',
			);
		$this->load->view('admin/control_user/form_keluser',$data);
	}

	public function tambah_aksi(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$ttl = $this->input->post('ttl');
		$jeniskelamin = $this->input->post('jeniskelamin');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'username' => $username,
			'password' => md5($password),
			'ttl' => $ttl,
			'jeniskelamin' => $jeniskelamin
			);
		$this->M_kelolauser->tambah_data($data);
		redirect(site_url('admin/kelolauser'));	
	}

	public function delete($id){
		
		$this->M_kelolauser->hapus_data($id);
		redirect(site_url('admin/kelolauser'));
	}

	public function update($id){

		$user=$this->M_kelolauser->ambil_data_id($id); //memanggil data dari database berdasarkan id yang sudah dipilih. 
		$data=array(
			'aksi'=> site_url('admin/kelolauser/update_aksi'), //membuat nama aksi ketika kita mengklik button
			'nama'=> set_value('nama', $user->nama), //memanggil data yang didatabase dan ditampilkan di form, isinya adalah data dari database. 
			'email'=> set_value('email', $user->email),
			'username'=> set_value('username', $user->username),
			'password'=> set_value('username', $user->password),
			'ttl'=> set_value('ttl', $user->ttl),
			'jeniskelamin'=> set_value('jeniskelamin', $user->jeniskelamin),
			
			'button'=> 'Edit',
			);
		$this->load->view('admin/control_user/form_keluser',$data); 
	}
	public function update_aksi(){

		$data=array( 
			'nama'=> $this->input->post('nama'), //mengisikan database sesuai dengan yang diinputkan di form
			'email'=> $this->input->post('email'),
			'username'=> $this->input->post('username'),
			'password'=> $this->input->post('password'),
			'ttl'=> $this->input->post('ttl'),
			'jeniskelamin'=> $this->input->post('jeniskelamin'),
			);
		
		$id_user=$this->input->post('nama'); 
		
		$this->M_kelolauser->edit_data($id_user,$data);
		redirect(site_url('admin/kelolauser'));
	}
}
