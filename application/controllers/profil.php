<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->helper(array('url'));
        $this->load->model('M_profile');
		$this->load->model('M_upload');
		$this->load->model('M_gambar');
		}

	
	public function index()
	{
		$data['kontak'] = $this->M_profile->data();
		$data['gambar'] = $this->M_gambar->get_data_gambar();
		$this->load->view('rumah',$data);
	}
	
	public function search(){
		$keyword = $this->input->post('keyword');
		$data['kontak'] = $this->M_profile->get_data_profile();
		$data['upload']=$this->M_upload->get_baca_keyword($keyword);
		$this->load->view('inputgambar',$data);
	}
	
	
	public function project(){
	  $jumlah_data = $this->M_upload->jumlah_data();
	  $this->load->library('pagination');
	  $data['kontak'] = $this->M_profile->data();
	  $config['base_url'] = base_url().'index.php/profil/project/';
	  $config['total_rows'] = $jumlah_data;
	$config['per_page'] = 2;
	$choice = $config["total_rows"];
	$config["num_links"] = floor($choice);
	
		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
	
		$this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_upload_list yang ada pada model M_upload. 
        $data['data'] = $this->M_upload->get_upload_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
      $this->load->view('project', $data);
    }
	
}