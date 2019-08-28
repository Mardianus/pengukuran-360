<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TingkatJabatan
 *
 * @author Effendy
 */
class TingkatJabatan extends CI_Controller {
    
        public function __construct() {
        parent::__construct();
        $this->load->model(['M_Auth' => 'M_Auth', 'Admin/M_TingkatJabatan' => 'M_TingkatJabatan']);
        $this->result = $this->M_Auth->index();
    }

    function index() {
        $data = [
            'title' => 'Tingkat Jabatan | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'Tingkat Jabatan',
            'value' => $this->M_TingkatJabatan->index()
        ];
        $data['content'] = $this->load->view('Admin/V_TingkatJabatan', $data, true);
        $this->load->view('Template', $data);
    }
}
