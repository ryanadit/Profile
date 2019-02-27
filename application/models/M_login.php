<?php
class M_login extends CI_Model{ 
  function cek_login($table,$where){ 
  return $this->db->get_where($table,$where);
  } 
  
  public function data(){
   $this->db->select('*');
   $this->db->from('pengguna');
   $data = $this->db->get();
   return $data->result();
 }
 
 public function getid($id){
     $this->db->where('id_user', $id);
     return $this->db->get('pengguna')->result();
   }
   
   public function hapus($id){
   $this->db->where('id_user', $id);
   $this->db->delete('pengguna');
 }
 
 public function ubah($id, $data) {
     try{
       $this->db->where('id_user',$id)->limit(1)->update('pengguna', $data);
       return true;
     }catch(Exception $e){}
 }
 
 function get_data_pengguna(){
        $query = $this->db->get('pengguna');
        return $query;
    }
  
  
}