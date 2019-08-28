<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KelompokTingkatJabatan
 *
 * @author Effendy
 */
class KelompokTingkatJabatan extends CI_Controller {
    
        public function __construct() {
        parent::__construct();
        $this->load->model(['M_Auth' => 'M_Auth', 'Admin/M_KelompokTingkatJabatan' => 'M_KelompokTingkatJabatan']);
        $this->result = $this->M_Auth->index();
    }

    function index() {
        $data = [
            'title' => 'kelompok Tingkat Jabatan | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'Kelompok Tingkat Jabatan',
            'value' => $this->M_KelompokTingkatJabatan->index()
        ];
        $data['content'] = $this->load->view('Admin/V_KelompokTingkatJabatan', $data, true);
        $this->load->view('Template', $data);
    }
}
