<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PosisiJabatan
 *
 * @author Effendy
 */
class PosisiJabatan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['M_Auth' => 'M_Auth', 'Admin/M_PosisiJabatan' => 'M_PosisiJabatan']);
        $this->result = $this->M_Auth->index();
    }

    function index() {
        $data = [
            'title' => 'Posisi jabatan | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'Posisi Jabatan',
            'value' => $this->M_PosisiJabatan->index()
        ];
        $data['content'] = $this->load->view('Admin/V_PosisiJabatan', $data, true);
        $this->load->view('Template', $data);
    }

}
