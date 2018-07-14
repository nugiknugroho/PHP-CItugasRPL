<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelolaadmin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/control_admin/v_kelolaadmin');
	}
}
