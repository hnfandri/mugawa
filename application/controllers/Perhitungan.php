<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Perhitungan_model');
        $this->load->model('Siswa_model');
        $this->load->model('Lokasi_model');
    }
    public function index(){
        $data['title'] = 'Perhitungan SPK';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Perhitungan_model->getAllSiswa();
        $data['lokasi'] = $this->Perhitungan_model->getAllLokasi();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('perhitungan/index',$data);
        $this->load->view('templates/footer');

}
    public function proses_hitung(){
        $siswa = $this->input->post('siswa');
        $lokasi = $this->input->post('lokasi');
        $data = ['id_lokasi'=>$lokasi];
    //     $id_siswa = [];

    // if($siswa) {
    //     foreach($siswa as $key => $value){
    //         if(is_int($key)){
    //             $id_siswa[] = $value;
    //         }
    //     }
    // }

    // check($id_siswa);

    foreach ($siswa as $sis) {
        $data = [
            'id_lokasi'=>$lokasi,
          'id_siswa' => $sis
        ];
        $detail_lokasi = $this->Lokasi_model->getLokasiById($data['id_lokasi']);
        $detail_siswa = $this->Siswa_model->getSiswaById($data['id_siswa']);
    }
    check($detail_siswa);
    die;
   

    }
}