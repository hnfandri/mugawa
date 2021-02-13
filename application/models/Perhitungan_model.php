<?php 
class Perhitungan_model extends CI_Model{
    public function getAllSiswa(){
        return $this->db->get('siswa')->result_array(); 
    }
    public function getAllLokasi(){
        return $this->db->get('lokasi')->result_array();
    }

}

?>