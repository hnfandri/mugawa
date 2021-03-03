<?php 
class Perhitungan_model extends CI_Model{
    public function getAllSiswa(){
        return $this->db->get('siswa')->result_array(); 
    }
    public function getAllLokasi(){
        return $this->db->get('lokasi')->result_array();
    }

    public function addPenilaian($data){
        $this->db->insert_batch('penilaian', $data);
    }

    public function getAllPerhitungan(){
    $this->db->select('p.*,s.nama as nama_siswa,l.nama as nama_lokasi');
    $this->db->from('penilaian p');
    $this->db->join('siswa s', 's.id = p.id_siswa', 'left');
    $this->db->join('lokasi l', 'l.id = p.id_lokasi', 'left');
    return $this->db->get()->result_array();
  
    }

    public function getPenilaianById($id){
        return $this->db->get_where('penilaian' , ['id_siswa' => $id])->row_array();
    }

    public function addRank($hasil_rank){
        $this->db->insert('ranking', $hasil_rank);
    }

    public function getPerankingan(){
        $this->db->select('r.*,s.nama as nama_siswa, lokasi.nama as nama_lokasi');
        $this->db->from('ranking r');
        $this->db->join('siswa s', 's.id = r.id_siswa', 'left');
        $this->db->join('penilaian', 'penilaian.id_siswa = r.id_siswa');
        $this->db->join('lokasi', 'penilaian.id_lokasi = lokasi.id');
        $this->db->order_by('r.nilai_akhir','desc');
        return $this->db->get()->result_array();
    }

    public function top3(){
        $this->db->select('r.*,s.nama as nama_siswa, lokasi.nama as nama_lokasi');
        $this->db->from('ranking r');
        $this->db->join('siswa s', 's.id = r.id_siswa', 'left');
        $this->db->join('penilaian', 'penilaian.id_siswa = r.id_siswa');
        $this->db->join('lokasi', 'penilaian.id_lokasi = lokasi.id');
        $this->db->order_by('r.nilai_akhir','desc');
        $this->db->limit('3');
        return $this->db->get()->result_array();
    }

    
    public function getLokasi(){
        $this->db->select('penilaian.id_lokasi, lokasi.nama as nama_lokasi');
        $this->db->from('penilaian');
        $this->db->join('lokasi', 'lokasi.id = penilaian.id_lokasi', 'left');
        return $this->db->get()->row_array();
    }

    

}

?>