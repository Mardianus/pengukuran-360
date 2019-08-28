<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KelompokJabatan
 *
 * @author Effendy
 */
class KelompokJabatan extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
        $this->load->model(['M_Auth' => 'M_Auth', 'Admin/M_KelompokJabatan' => 'M_KelompokJabatan']);
        $this->result = $this->M_Auth->index();
}
    function index() {
        $data = [
            'title' => 'Kelompok Jabatan | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'Kelompok Jabatan',
            'value' => $this->M_KelompokJabatan->index()
        ];
        $data['content'] = $this->load->view('Admin/V_KelompokJabatan', $data, true);
        $this->load->view('Template', $data);
    }
}