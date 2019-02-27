<?php
class M_gambar extends CI_Model {
  public function __construct() {
        parent::__construct();
  }

  public function input($data){
    try{
      $this->db->insert('gambar', $data);
      return true;
    }catch(Exception $e){
    }
  }
  
  function get_data_gambar(){
        $query = $this->db->get('gambar');
        return $query;
    }

		

public function data(){
   $this->db->select('*');
   $this->db->from('gambar');
   $data = $this->db->get();
   return $data->result();
 }

 public function getid($id){
     $this->db->where('id_gambar', $id);
     return $this->db->get('gambar')->result();
   }
   
   public function jumlah_data(){
		return $this->db->get('gambar')->num_rows();
   }

 public function foto($id)
   {
     $this->db->where('id_gambar', $id);
     return $this->db->get('gambar')->row();
   } 
   
	public function ubah($id, $data) {
     try{
       $this->db->where('id_gambar',$id)->limit(1)->update('gambar', $data);
       return true;
     }catch(Exception $e){}
 }
 

 public function hapus($id){
   $this->db->where('id_gambar', $id);
   $this->db->delete('gambar');
 }

}
?>
