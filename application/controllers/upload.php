<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload extends CI_Controller {
    public function __construct() {
        parent::__construct();
		$this->load->helper(array('url','form'));
        $this->load->model('M_upload');
        if($this->session->userdata('status') != "login"){
          redirect(base_url("index.php/login"));
          }
    }

    public function input(){
      $this->load->view('data');
    }
    public function proses_input(){
      //membuat konfigurasi
      $number_of_files = sizeof($_FILES['userfile']['tmp_name']);  
                         $files = $_FILES['userfile'];  
                                 $config=array(  
                                 'upload_path'   => './assets/images/',
								 'allowed_types' => 'mp3|mp4|docx|pdf|gif|jpg|png|jpeg|wmv|webm',
								 'max_size'      => 200000000, 
								 'max_width' 	 => 5000,
								 'max_height'    => 5000
                                 );  
                         for ($i = 0;$i < $number_of_files; $i++)  
                         {  
                                 $_FILES['userfile']['name'] = $files['name'][$i];  
                                 $_FILES['userfile']['type'] = $files['type'][$i];  
                                 $_FILES['userfile']['tmp_name'] = $files['tmp_name'][$i];  
                                 $_FILES['userfile']['error'] = $files['error'][$i];  
                                 $_FILES['userfile']['size'] = $files['size'][$i];  
                                 $this->load->library('upload', $config);  
                                 $this->upload->do_upload('userfile');  
                         }  
          $data = ['foto' => $files['name'][0],
		  'foto1' => $files['name'][1],
           'nama' => set_value('nama'),
           'tanggal' => set_value('tanggal'),
           'keterangan' => set_value('keterangan')
         ];
          $this->M_upload->input($data); //memasukan data ke database
          redirect('upload/datadaftar'); //mengalihkan halaman

      
  }
  
  /*public function daftarUpload(){
	$jumlah_data = $this->M_upload->jumlah_data();
	$this->load->library('pagination');
	$config['base_url'] = base_url().'index.php/upload/daftarUpload/';
	$config['total_rows'] = $jumlah_data;
	$config['per_page'] = 3;
	$from = $this->uri->segment($jumlah_data);
    $data['upload'] = $this->M_upload->datapage($config['per_page'],$from);
	$this->pagination->initialize($config);		
    $this->load->view('daftarproject', $data);
  }*/
  

  public function datadaftar(){
	  $jumlah_data = $this->M_upload->jumlah_data();
	$this->load->library('pagination');
	$config['base_url']   = base_url().'index.php/upload/datadaftar/';
	$config['total_rows'] = $jumlah_data;
	$config['per_page']   = 2;
	$choice               = $config["total_rows"];
	$config["num_links"]  = floor($choice);
	
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
		$this->load->view('datadaftar', $data);
	  
	  ////
  
}

public function daftarproject(){
  $jumlah_data = $this->M_upload->jumlah_data();
	$this->load->library('pagination');
	$config['base_url']   = base_url().'index.php/upload/datadaftar/';
	$config['total_rows'] = $jumlah_data;
	$config['per_page']   = 2;
	$from                 = $this->uri->segment($jumlah_data);
    $data['upload']       = $this->M_upload->datapage($config['per_page'],$from);
	$this->pagination->initialize($config);		
	$this->load->view('datadaftar', $data);
}


public function lists(){
		$data['model'] = $this->M_upload->view(); // Panggil fungsi view() yang ada di model siswa
		
		$this->load->view('datadaftarnew', $data);
	}

 //pencarian project
  

public function ubah($id){
    $data['upload'] = $this->M_upload->getid($id);
    $this->load->view('ubahdaftar', $data);
  }

  public function proses_ubah($id){
    $foto = $this->M_upload->foto($id);
    if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [
          'upload_path' => './assets/images/',
          'allowed_types' => 'mp3|mp4|docx|pdf|gif|jpg|png|jpeg|wmv|webm',
          'max_size' => 200000000, 'max_width' => 50000,
          'max_height' => 50000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
            $this->load->view('ubahdaftar', $error);
        } else
        //jika berhasil upload
        {

            $file = $this->upload->data();
            //mengambil data di form
            $data = ['foto' => $file['file_name']];
            unlink('assets/images/'.$foto->foto); //menghapus gambar yang lama
        }
      }
      $data['nama']   = set_value('nama');
      $data['tanggal']   = set_value('tanggal');
      $this->M_upload->ubah($id, $data); //memasukan data ke database
      redirect('upload/datadaftar'); //mengalihkan halaman
  }
  
  public function edit_gambar($id){
    $foto = $this->M_upload->foto($id);
    if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [
          'upload_path' => './assets/images/',
          'allowed_types' => 'mp3|mp4|docx|pdf|gif|jpg|png|jpeg|wmv|webm',
          'max_size' => 200000000, 'max_width' => 50000,
          'max_height' => 50000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
            $this->load->view('ubahdaftar', $error);
        } else
        //jika berhasil upload
        {

            $file = $this->upload->data();
            //mengambil data di form
            $data = ['foto1' => $file['file_name']];
            unlink('assets/images/'.$foto->foto1); //menghapus gambar yang lama
			
        }
      }
	  $this->M_upload->ubah($id, $data);
	  redirect('upload/datadaftar');
  }
  


  public function hapus($id){
  $foto = $this->M_upload->foto($id);
  unlink('assets/images/'.$foto->foto);
  $this->M_upload->hapus($id);
  redirect('upload/datadaftar'); //mengalihkan halaman
}

}
