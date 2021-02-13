<?php 
class Lokasi_model extends CI_Model{
    public function getAllLokasi(){
        return $this->db->get('lokasi')->result_array();
    }

    public function tambahDataLokasi(){
        $data = [
            'nama' => $this->input->post('nama',true),
            'alamat' => $this->input->post('alamat',true),
            'telp' => $this->input->post('telp',true),
            'multimedia' => $this->input->post('multimedia',true),
            'desain_grafis' => $this->input->post('desain_grafis',true),
            'hardware_software' => $this->input->post('hardware_software',true),
            'inggris' => $this->input->post('inggris',true),
            'so' => $this->input->post('so',true),
            'videografi' => $this->input->post('videografi',true),
            'fotografi' => $this->input->post('fotografi',true),
            'editting' => $this->input->post('editting',true),
            'teamwork' => $this->input->post('teamwork',true)
        ];
        $this->db->insert('lokasi', $data);
        $this->session->set_flashdata('flash','Added');
        redirect('lokasi');
    }
    public function getLokasiById($id){
        return $this->db->get_where('lokasi' , ['id' => $id])->row_array();
    }

    public function hapusDataLokasi($id){
        $this->db->where('id', $id);
        $this->db->delete('lokasi');
    }

    public function ubahDataLokasi(){
        $data = [
            'nama' => $this->input->post('nama',true),
            'alamat' => $this->input->post('alamat',true),
            'telp' => $this->input->post('telp',true),
            'multimedia' => $this->input->post('multimedia',true),
            'desain_grafis' => $this->input->post('desain_grafis',true),
            'hardware_software' => $this->input->post('hardware_software',true),
            'inggris' => $this->input->post('inggris',true),
            'so' => $this->input->post('so',true),
            'videografi' => $this->input->post('videografi',true),
            'fotografi' => $this->input->post('fotografi',true),
            'editting' => $this->input->post('editting',true),
            'teamwork' => $this->input->post('teamwork',true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('lokasi', $data);
        $this->session->set_flashdata('flash','Editted');
        redirect('lokasi');
    }
}