<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    function __construct(){
        parent::__construct(); 
        $this->load->model('M_login');
        $this->load->model('M_profile');
      }
      
      function index(){
		$data['kontak'] = $this->M_profile->data();
        $this->load->view('login', $data);
      }
	  
	  function loginlagi(){
		  $this->load->view('loginlagi');
	  }
      
      function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
        'username' => $username,
        'password' => md5($password)
       );
       $cek = $this->M_login->cek_login("pengguna",$where)->num_rows();
       if($cek > 0){
      
      $data_session = array(
        'usernmae' => $username,
        'status' => "login"
       );
      
      $this->session->set_userdata($data_session);
      
      redirect("profile/data");
      
      }else{
		redirect("login/loginlagi");
       //echo "Data Login Salah!";
      }
      }
      
      function logout(){
        $this->session->sess_destroy();
        redirect('profile/index');
       }
      }
