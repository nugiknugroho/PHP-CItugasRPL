<?php
class Admin extends MY_Controller{

	public function __construct(){
		parent::__construct();

		//memanggil function dari controller MY_Controller
		$this->cekLogin();

    if ($this->session->userdata('level') == "user") {
      redirect('user/user');
	}
}

  public function index()
  {
    $this->load->view('admin/dashboard');
  }
}
?>
