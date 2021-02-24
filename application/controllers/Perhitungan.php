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

        public function proses_hitung()
        {
            $this->db->truncate('ranking');
            $this->db->truncate('penilaian');
        $listsiswa = $this->input->post('siswa');
        $lokasi = $this->input->post('lokasi');
        $data = [];

        foreach ($listsiswa as $key => $val) {
            $data[$key]['id_siswa'] = $val;
            $data[$key]['id_lokasi'] = $lokasi;

            $detail_siswa = $this->Siswa_model->getSiswaById($data[$key]['id_siswa']);
            $detail_lokasi = $this->Lokasi_model->getLokasiById($data[$key]['id_lokasi']);
            $cek_detail = [
            'det_siswa' => $detail_siswa,
            'det_lokasi' => $detail_lokasi
            ];

            // Ambil nilai-nilai siswa
            $nilai_siswa = [
            'multimedia' => $cek_detail['det_siswa']['multimedia'],
            'desain_grafis' => $cek_detail['det_siswa']['desain_grafis'],
            'hardware_software' => $cek_detail['det_siswa']['hardware_software'],
            'inggris' => $cek_detail['det_siswa']['inggris'],
            'so' => $cek_detail['det_siswa']['so'],
            'videografi' => $cek_detail['det_siswa']['videografi'],
            'fotografi' => $cek_detail['det_siswa']['fotografi'],
            'editting' => $cek_detail['det_siswa']['editting'],
            'teamwork' => $cek_detail['det_siswa']['teamwork'],
            ];
            // Ambil nilai-nilai lokasi
            $nilai_lokasi = [
            'multimedia' => $cek_detail['det_lokasi']['multimedia'],
            'desain_grafis' => $cek_detail['det_lokasi']['desain_grafis'],
            'hardware_software' => $cek_detail['det_lokasi']['hardware_software'],
            'inggris' => $cek_detail['det_lokasi']['inggris'],
            'so' => $cek_detail['det_lokasi']['so'],
            'videografi' => $cek_detail['det_lokasi']['videografi'],
            'fotografi' => $cek_detail['det_lokasi']['fotografi'],
            'editting' => $cek_detail['det_lokasi']['editting'],
            'teamwork' => $cek_detail['det_lokasi']['teamwork'],
            ];

            // cari hasil gap nya
            $dev_n1 = $nilai_siswa['multimedia'] - $nilai_lokasi['multimedia'];
            $dev_n2 = $nilai_siswa['desain_grafis'] - $nilai_lokasi['desain_grafis'];
            $dev_n3 = $nilai_siswa['hardware_software'] - $nilai_lokasi['hardware_software'];
            $dev_n4 = $nilai_siswa['inggris'] - $nilai_lokasi['inggris'];
            $dev_n5 = $nilai_siswa['so'] - $nilai_lokasi['so'];
            $dev_n6 = $nilai_siswa['videografi'] - $nilai_lokasi['videografi'];
            $dev_n7 = $nilai_siswa['fotografi'] - $nilai_lokasi['fotografi'];
            $dev_n8 = $nilai_siswa['editting'] - $nilai_lokasi['editting'];
            $dev_n9 = $nilai_siswa['teamwork'] - $nilai_lokasi['teamwork'];

            $data[$key]['dev_n1'] = $dev_n1;
            $data[$key]['dev_n2'] = $dev_n2;
            $data[$key]['dev_n3'] = $dev_n3;
            $data[$key]['dev_n4'] = $dev_n4;
            $data[$key]['dev_n5'] = $dev_n5;
            $data[$key]['dev_n6'] = $dev_n6;
            $data[$key]['dev_n7'] = $dev_n7;
            $data[$key]['dev_n8'] = $dev_n8;
            $data[$key]['dev_n9'] = $dev_n9;
        }
        $this->Perhitungan_model->addPenilaian($data);
        redirect('perhitungan/hasil_pengurangan');

        
    }
    
    public function hasil_pengurangan(){
        $data['title'] = 'Hasil Perhitungan GAP';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengurangan'] = $this->Perhitungan_model->getAllPerhitungan();

       

        $this->load->view('templates/header',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('perhitungan/hasil_pengurangan',$data);
        $this->load->view('templates/footer');
        }

    public function hitung_gap($id_siswa){
        $detail_penilaian_siswa = $this->Perhitungan_model->getPenilaianById($id_siswa);
        $nilai_pelajaran =[
            'n1' => $detail_penilaian_siswa['dev_n1'],
            'n2' => $detail_penilaian_siswa['dev_n2'],
            'n3' => $detail_penilaian_siswa['dev_n3'],
            'n4' => $detail_penilaian_siswa['dev_n4'],
            'n5' => $detail_penilaian_siswa['dev_n5'],
            'n6' => $detail_penilaian_siswa['dev_n6'],
            'n7' => $detail_penilaian_siswa['dev_n7'],
            'n8' => $detail_penilaian_siswa['dev_n8'],
            'n9' => $detail_penilaian_siswa['dev_n9']
        ];

        $pencocokan_mapel1 = $this->pencocokan($nilai_pelajaran['n1']);
        $pencocokan_mapel2 = $this->pencocokan($nilai_pelajaran['n2']);
        $pencocokan_mapel3 = $this->pencocokan($nilai_pelajaran['n3']);
        $pencocokan_mapel4 = $this->pencocokan($nilai_pelajaran['n4']);
        $pencocokan_mapel5 = $this->pencocokan($nilai_pelajaran['n5']);
        $pencocokan_mapel6 = $this->pencocokan($nilai_pelajaran['n6']);
        $pencocokan_mapel7 = $this->pencocokan($nilai_pelajaran['n7']);
        $pencocokan_mapel8 = $this->pencocokan($nilai_pelajaran['n8']);
        $pencocokan_mapel9 = $this->pencocokan($nilai_pelajaran['n9']);

        $nilai_gap =[
            'n1' => $pencocokan_mapel1,
            'n2' => $pencocokan_mapel2,
            'n3' => $pencocokan_mapel3,
            'n4' => $pencocokan_mapel4,
            'n5' => $pencocokan_mapel5,
            'n6' => $pencocokan_mapel6,
            'n7' => $pencocokan_mapel7,
            'n8' => $pencocokan_mapel8,
            'n9' => $pencocokan_mapel9
        ];
        
        // perhitungan intelektual nilai ncf
        $ncf_i = ($pencocokan_mapel1+$pencocokan_mapel2+$pencocokan_mapel3)/3;
        $nsf_i = ($pencocokan_mapel4+$pencocokan_mapel5)/2;
        $n_intelektual = (0.7*$ncf_i)+(0.3*$nsf_i);
        
        // perhitungan praktikum
        $ncf_p = ($pencocokan_mapel6+$pencocokan_mapel7+$pencocokan_mapel8)/3;
        $nsf_p = ($pencocokan_mapel9)/1;
        $n_praktikum = (0.55*$ncf_p)+(0.45*$nsf_p);

        $bobot_rank = (0.6*$n_intelektual)+(0.4*$n_praktikum);

        $hasil_rank = [
            'id_siswa' => $id_siswa,
            'nilai_akhir' => round($bobot_rank,2)
        ];

        $this->Perhitungan_model->addRank($hasil_rank);
        redirect('perhitungan/hasil_pengurangan');

        // check($hasil_rank);
    }

    public function pencocokan($nilai){
        if ($nilai == 0) {
            $n_gap = 5;
        } elseif ($nilai == 1) {
            $n_gap = 4.5;
        } elseif ($nilai == -1) {
            $n_gap = 4;
        } elseif ($nilai == 2) {
            $n_gap = 3.5;
        } elseif ($nilai == -2) {
            $n_gap = 3;
        } elseif ($nilai == 3) {
            $n_gap = 2.5;
        } elseif ($nilai == -3) {
            $n_gap = 2;
        } elseif ($nilai == 4) {
            $n_gap = 1.5 ;
        } else {
            $n_gap = 1;
        } 
        return $n_gap;
    }

    public function ranking(){
        $data['title'] = 'Perhitungan SPK';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hasil_rank'] = $this->Perhitungan_model->getPerankingan();
        
        $this->load->view('templates/header',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('perhitungan/hasil_ranking',$data);
        $this->load->view('templates/footer');
    }
    
    public function cetak(){
        $data['title'] = 'SPK GAP';
        $data['hasil_rank'] = $this->Perhitungan_model->getPerankingan();
        $data['lokasi'] = $this->Perhitungan_model->getLokasi();

        $this->load->view('templates/header',$data);
        $this->load->view('perhitungan/ranking',$data);

    }
}