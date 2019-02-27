<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->helper(array('url'));
        $this->load->model('M_profile');
		$this->load->model('M_gambar');
		$this->load->model('M_login');
		if($this->session->userdata('status') != "login"){
          redirect(base_url("index.php/login"));
          }
		}

	
	public function index()
	{
		$data['kontak'] = $this->M_profile->data();
		$data1['gambar'] = $this->M_gambar->data();
		$this->load->view('rumah', $data,$data1);
	}
	
	
	
	public function indexgambar()
	{
		$data['gambar'] = $this->M_gambar->data();
		$this->load->view('daftargambar', $data);
	}
	
	
	public function gambar_simpan(){
		$number_of_files = sizeof($_FILES['userfile']['tmp_name']);  
                         $files = $_FILES['userfile'];  
                                 $config=array(  
                                 'upload_path'   => './assets/images/home/',
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
		  'foto2' => $files['name'][2],
		  'ket'	  => set_value['keterangan']
         ];
          $this->M_gambar->input($data); //memasukan data ke database
          redirect('profile/indexgambar'); //mengalihkan halaman

      
		
	}
	
	
	//update gambar
	public function edit_gambar_a($id){
    $foto = $this->M_gambar->foto($id);
    if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [
          'upload_path' => './assets/images/home',
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
            unlink('assets/images/home/'.$foto->foto); //menghapus gambar yang lama
			
        }
      }
	  $this->M_gambar->ubah($id, $data);
	  redirect('profile/viewgambar');
  }
  
  public function edit_gambar_b($id){
    $foto = $this->M_gambar->foto($id);
    if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [
          'upload_path' => './assets/images/home',
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
            unlink('assets/images/home/'.$foto->foto1); //menghapus gambar yang lama
			
        }
      }
	  $this->M_gambar->ubah($id, $data);
	  redirect('profile/viewgambar');
  }
  
  public function edit_gambar_c($id){
    $foto = $this->M_gambar->foto($id);
    if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [
          'upload_path' => './assets/images/home',
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
            $data = ['foto2' => $file['file_name']];
            unlink('assets/images/home/'.$foto->foto2); //menghapus gambar yang lama
			
        }
		$data['ket']   = set_value('ket');
      }
	  $this->M_gambar->ubah($id, $data);
	  redirect('profile/viewgambar');
  }
  
  
	
	
	
	public function viewgambar(){
		$data['gambar'] = $this->M_gambar->data();
		$this->load->view('daftargambar', $data);
	}
	
	public function hapusgambar($id){
  $this->M_gambar->hapus($id);
  redirect('profile/daftargambar'); //mengalihkan halaman
}
	
	
	public function input(){
      $this->load->view('data');
    }
	
	public function input_kontak(){
	  
	  $data          = [
	                'nowa'     => set_value('nowa'), 
					'alamat'   => set_value('alamat'),
					'apaitu1'  => set_value('apaitu1'),
					'apaitu2'  => set_value('apaitu2'),
					'tentang1' => set_value('tentang1'),
					'tentang2' => set_value('tentang2'),
					'tentang3' => set_value('tentang3')
					
	  ];
	  $this->M_profile->input($data);
	  redirect('profile/data');
	  
  }
  
	public function proses_ubah($id){
		$data['nowa']     = set_value('nowa');
		$data['alamat']   = set_value('alamat');
		$data['apaitu1']  = set_value('apaitu1');
		$data['apaitu2']  = set_value('apaitu2');
		$data['tentang1'] = set_value('tentang1');
		$data['tentang2'] = set_value('tentang2');
		$data['tentang3'] = set_value('tentang3');
		
		$this->M_profile->ubah($id, $data);
		redirect('profile/daftar');
	}
	
	public function ubah($id){
    $data['kontak'] = $this->M_profile->getid($id);
    $this->load->view('data_ubah', $data);
  }
  public function daftar(){
	$jumlah_data = $this->M_profile->jumlah_data();
	$this->load->library('pagination');
	$config['base_url']   = base_url().'index.php/profile/daftar/';
	$config['total_rows'] = $jumlah_data;
	$config['per_page']   = 2;
	$from = $this->uri->segment($jumlah_data);
    $data['kontak'] = $this->M_profile->datapage($config['per_page'],$from);
	$this->pagination->initialize($config);		
    $this->load->view('daftar', $data);
  }
  
  public function data(){
	  $data['kontak'] = $this->M_profile->data();
	  $data['pengguna'] = $this->M_login->get_data_pengguna();
	  $this->load->view('data', $data);
  }
  public function hapus($id){
  $this->M_profile->hapus($id);
  redirect('profile/daftar'); //mengalihkan halaman
}
	
}
