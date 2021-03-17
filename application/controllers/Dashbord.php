<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord extends CI_Controller {
public function index(){
    $data['title'] = 'SPK Mugawa';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
   

    $this->load->view('templates/header',$data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('dashbord/index');
    $this->load->view('templates/footer');
}


}
