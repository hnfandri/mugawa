<?php 
class Siswa_model extends CI_Model{
    public function getAllSiswa(){
        return $this->db->get('siswa')->result_array();
    }
    public function tambahDataSiswa(){
        $multimedia = $this->input->post('multimedia',true);
        $desain_grafis = $this->input->post('desain_grafis',true);
        $hardware_software = $this->input->post('hardware_software',true);
        $inggris = $this->input->post('inggris',true);
        $so = $this->input->post('so',true);
        $videografi = $this->input->post('videografi',true);
        $fotografi = $this->input->post('fotografi',true);
        $editting = $this->input->post('editting',true);
        $teamwork = $this->input->post('teamwork',true);
        
        if ($multimedia >= 90) {
            $n_multimedia = 5;
        } elseif ($multimedia >= 80) {
            $n_multimedia = 4;
        } elseif ($multimedia >= 70) {
            $n_multimedia = 3;
        } elseif ($multimedia >= 60) {
            $n_multimedia = 2;
        } elseif ($multimedia <= 59) {
            $n_multimedia = 1;
        }

        if ($desain_grafis >= 90) {
            $n_desain_grafis = 5;
        } elseif ($desain_grafis >= 80) {
            $n_desain_grafis = 4;
        } elseif ($desain_grafis >= 70) {
            $n_desain_grafis = 3;
        } elseif ($desain_grafis >= 60) {
            $n_desain_grafis = 2;
        } elseif ($desain_grafis <= 59) {
            $n_desain_grafis = 1;
        }

        if ($hardware_software >= 90) {
            $n_hardware_software = 5;
        } elseif ($hardware_software >= 80) {
            $n_hardware_software = 4;
        } elseif ($hardware_software >= 70) {
            $n_hardware_software = 3;
        } elseif ($hardware_software >= 60) {
            $n_hardware_software = 2;
        } elseif ($hardware_software <= 59) {
            $n_hardware_software = 1;
        }

        if ($inggris >= 90) {
            $n_inggris = 5;
        } elseif ($inggris >= 80) {
            $n_inggris = 4;
        } elseif ($inggris >= 70) {
            $n_inggris = 3;
        } elseif ($inggris >= 60) {
            $n_inggris = 2;
        } elseif ($inggris <= 59) {
            $n_inggris = 1;
        }

        if ($so >= 90) {
            $n_so = 5;
        } elseif ($so >= 80) {
            $n_so = 4;
        } elseif ($so >= 70) {
            $n_so = 3;
        } elseif ($so >= 60) {
            $n_so = 2;
        } elseif ($so <= 59) {
            $n_so = 1;
        }
        
        if ($videografi >= 90) {
            $n_videografi = 5;
        } elseif ($videografi >= 80) {
            $n_videografi = 4;
        } elseif ($videografi >= 70) {
            $n_videografi = 3;
        } elseif ($videografi >= 60) {
            $n_videografi = 2;
        } elseif ($videografi <= 59) {
            $n_videografi = 1;
        }

        if ($fotografi >= 90) {
            $n_fotografi = 5;
        } elseif ($fotografi >= 80) {
            $n_fotografi = 4;
        } elseif ($fotografi >= 70) {
            $n_fotografi = 3;
        } elseif ($fotografi >= 60) {
            $n_fotografi = 2;
        } elseif ($fotografi <= 59) {
            $n_fotografi = 1;
        }

        if ($editting >= 90) {
            $n_editting = 5;
        } elseif ($editting >= 80) {
            $n_editting = 4;
        } elseif ($editting >= 70) {
            $n_editting = 3;
        } elseif ($editting >= 60) {
            $n_editting = 2;
        } elseif ($editting <= 59) {
            $n_editting = 1;
        }

        if ($teamwork >= 90) {
            $n_teamwork = 5;
        } elseif ($teamwork >= 80) {
            $n_teamwork = 4;
        } elseif ($teamwork >= 70) {
            $n_teamwork = 3;
        } elseif ($teamwork >= 60) {
            $n_teamwork = 2;
        } elseif ($teamwork <= 59) {
            $n_teamwork = 1;
        }


        $data = [
            'nama' => $this->input->post('nama',true),
            'alamat' => $this->input->post('alamat',true),
            'telp' => $this->input->post('telp',true),
            'multimedia' => $n_multimedia,
            'desain_grafis' => $n_desain_grafis,
            'hardware_software' => $n_hardware_software,
            'inggris' => $n_inggris,
            'so' => $n_so,
            'videografi' => $n_videografi,
            'fotografi' => $n_fotografi,
            'editting' => $n_editting,
            'teamwork' => $n_teamwork
        ];
        $this->db->insert('siswa', $data);
        $this->session->set_flashdata('flash','Added');
        redirect('siswa');
    }

    public function hapusDataSiswa($id){
        $this->db->where('id', $id);
        $this->db->delete('siswa');
    }

    public function getSiswaById($id){
        return $this->db->get_where('siswa' , ['id' => $id])->row_array();
    }

    public function ubahDataSiswa(){
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
        $this->db->update('siswa', $data);
        $this->session->set_flashdata('flash','Editted');
        redirect('siswa');
    }

}


?>