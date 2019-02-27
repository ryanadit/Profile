<?php
class M_upload extends CI_Model {
  public function __construct() {
        parent::__construct();
  }

  public function input($data){
    try{
      $this->db->insert('upload', $data);
      return true;
    }catch(Exception $e){
    }
  }
  
  public function get_baca_keyword($keyword){
			$this->db->select('*');
			$this->db->from('upload');
			$this->db->like('nama',$keyword);
			$this->db->or_like('foto',$keyword);
			$this->db->or_like('keterangan',$keyword);
			return $this->db->get()->result();
		}


public function data(){
   $this->db->select('*');
   $this->db->from('upload');
   $data = $this->db->get();
   return $data->result();
 }
 
 /*function getAll($config){  
        $hasilquery=$this->db->get('upload', $config['per_page'], $this->uri->segment(3));
        if ($hasilquery->num_rows() > 0) {
            foreach ($hasilquery->result() as $value) {
                $data[]=$value;
            }
            return $data;
        }      
    }*/
	
	function get_upload_list($limit, $start){
        $query = $this->db->get('upload', $limit, $start);
        return $query;
    }
	
	public function _get_users_data(){ 
        $this->db->select('*'); 
        $this->db->from('upload'); 
    }
	
	public function get_users($limit, $start){ 
        $this->_get_users_data(); 
        $this->db->limit($limit, $start); 
        $query = $this->db->get(); 
        return $query->result_array(); 
    }
 
 
 public function datapage($number,$offset){
		return $query = $this->db->get('upload',$number,$offset)->result();		
	} 
 
 public function jumlah_data(){
		return $this->db->get('upload')->num_rows();
   }

 public function getid($id){
     $this->db->where('id_upload', $id);
     return $this->db->get('upload')->result();
   }

 public function foto($id)
   {
     $this->db->where('id_upload', $id);
     return $this->db->get('upload')->row();
   }
   
 public function ubah($id, $data) {
     try{
       $this->db->where('id_upload',$id)->limit(1)->update('upload', $data);
       return true;
     }catch(Exception $e){}
 }
 

 public function hapus($id){
   $this->db->where('id_upload', $id);
   $this->db->delete('upload');
 }
 

}
?>
