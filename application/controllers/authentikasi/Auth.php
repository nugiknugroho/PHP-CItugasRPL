<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function cekAkun()
  {
    //load model_users
    $this->load->model('M_user');

    //membuat validasi login
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $query = $this->M_user->cekAkun($username, $password);

    if ($query === 1) {
      return "User Tidak Ditemukan!";
    }
    else if ($query === 2) {
      return "User Tidak Aktif!";
    }
    else if ($query === 3) {
      return "Password Salah!";
    }
    else {
      //membuat session dengan nama userdata
      $userData = array(
        'username' => $query->username,
        'level' => $query->level,
        'logged_in' => TRUE
      );
      $this->session->set_userdata($userData);
      return TRUE;
    }
  }

  public function login()
  {
    //melakukan pengalihan halaman sesuai dengan levelnya
    if ($this->session->userdata('level') == "admin"){redirect('admin/admin');}
    if ($this->session->userdata('level') == "user"){redirect('user/user');}

    //proses login dan validasi nya
    if ($this->input->post('submit')) {
      $this->load->model('M_user');
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $error = $this->cekAkun();
      if ($this->form_validation->run() && $error === TRUE) {
        $data = $this->M_user->cekAkun($this->input->post('username'), $this->input->post('password'));

        //jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
        if($data->level == 'admin'){
          redirect('admin/admin');
        }
        else if($data->level == 'user'){
          redirect('user/user');
        }
      }

      //Jika bernilai FALSE maka tampilkan error
      else{
        $data['error'] = $error;
        $this->load->view('authentikasi/login', $data);
      }
    }
    //Jika tidak maka alihkan kembali ke halaman login
    else{
      $this->load->view('authentikasi/login');
    }
  }


  public function logout()
  {
    //Menghapus semua session (sesi)
    $this->session->sess_destroy();
    redirect('authentikasi/auth/login');
  }
}