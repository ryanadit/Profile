<?php
class M_profile extends CI_Model {
  public function __construct() {
        parent::__construct();
  }

  public function input($data){
    try{
      $this->db->insert('kontak', $data);
      return true;
    }catch(Exception $e){
    }
  }
  
  
  
  public function get_baca_keyword($keyword){
			$this->db->select('*');
			$this->db->from('kontak');
			$this->db->like('nowa',$keyword);
			$this->db->or_like('alamat',$keyword);
			return $this->db->get()->result();
		}

		public function datapage($number,$offset){
		return $query = $this->db->get('kontak',$number,$offset)->result();		
	} 
	
	function get_data_profile(){
        $query = $this->db->get('kontak');
        return $query;
    }

public function data(){
   $this->db->select('*');
   $this->db->from('kontak');
   $data = $this->db->get();
   return $data->result();
 }
 
 

 public function getid($id){
     $this->db->where('id_kontak', $id);
     return $this->db->get('kontak')->result();
   }
   
   public function jumlah_data(){
		return $this->db->get('kontak')->num_rows();
   }

 public function foto($id)
   {
     $this->db->where('id_kontak', $id);
     return $this->db->get('kontak')->row();
   } 
   
	public function ubah($id, $data) {
     try{
       $this->db->where('id_kontak',$id)->limit(1)->update('kontak', $data);
       return true;
     }catch(Exception $e){}
 }
 
 

 public function hapus($id){
   $this->db->where('id_kontak', $id);
   $this->db->delete('kontak');
 }

}
?>
