<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title'] = 'Data Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        

        
        $data['siswa'] = $this->Siswa_model->getAllSiswa();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah(){
        $data['title'] = 'Form Data Tambah Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Name', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telp', 'No telpon', 'trim|required|numeric|min_length[10]',[
            'min_length' => 'Number is too short'
        ]);
        $this->form_validation->set_rules('multimedia', 'Nilai multimedia', 'trim|required|numeric|min_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        $this->form_validation->set_rules('desain_grafis', 'Nilai Desain Grafis', 'trim|required|numeric|min_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        $this->form_validation->set_rules('hardware_software', 'Nilai Hardware Software', 'trim|required|numeric|min_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        $this->form_validation->set_rules('inggris', 'Nilai Bahasa Inggris', 'trim|required|numeric|min_length[2]|max_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        $this->form_validation->set_rules('so', 'Nilai Sistem Operasi', 'trim|required|numeric|min_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        $this->form_validation->set_rules('videografi', 'Nilai Videografi', 'trim|required|numeric|min_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        $this->form_validation->set_rules('fotografi', 'Nilai Fotografi', 'trim|required|numeric|min_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        $this->form_validation->set_rules('editting', 'Nilai Editting', 'trim|required|numeric|min_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        $this->form_validation->set_rules('teamwork', 'Nilai Teamwork', 'trim|required|numeric|min_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        if ($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('siswa/tambah', $data);
            $this->load->view('templates/footer');

        }else {
            $this->Siswa_model->tambahDataSiswa();
            $this->session->set_flashdata('flash','Added');
            redirect('siswa');
        }
    }
    public function hapus($id){
        $this->Siswa_model->hapusDataSiswa($id);
        $this->session->set_flashdata('flash', 'Deleted');
        redirect('siswa');
    }

    public function detail($id){
        $data['title'] = 'Detail Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Siswa_model->getSiswaById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id){
        $data['title'] = 'Form ubah data Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Siswa_model->getSiswaById($id);

        $this->form_validation->set_rules('nama', 'Name', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telp', 'No telpon', 'trim|required|numeric|min_length[10]',[
            'min_length' => 'Number is too short'
        ]);

        $this->form_validation->set_rules('multimedia', 'Nilai multimedia', 'trim|required|numeric|min_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        $this->form_validation->set_rules('desain_grafis', 'Nilai Desain Grafis', 'trim|required|numeric|min_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        $this->form_validation->set_rules('hardware_software', 'Nilai Hardware Software', 'trim|required|numeric|min_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        $this->form_validation->set_rules('inggris', 'Nilai Bahasa Inggris', 'trim|required|numeric|min_length[2]|max_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        $this->form_validation->set_rules('so', 'Nilai Sistem Operasi', 'trim|required|numeric|min_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        $this->form_validation->set_rules('videografi', 'Nilai Videografi', 'trim|required|numeric|min_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        $this->form_validation->set_rules('fotografi', 'Nilai Fotografi', 'trim|required|numeric|min_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        $this->form_validation->set_rules('editting', 'Nilai Editting', 'trim|required|numeric|min_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        $this->form_validation->set_rules('teamwork', 'Nilai Teamwork', 'trim|required|numeric|min_length[2]|max_length[3]',['min_length' => 'must input in tens / hundreds', 'max_length' => 'too long']);
        
        if ($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('siswa/ubah', $data);
            $this->load->view('templates/footer');

        }else {
            $this->Siswa_model->ubahDataSiswa();
            $this->session->set_flashdata('flash','Editted');
            redirect('siswa');
        }
    }

}
?>