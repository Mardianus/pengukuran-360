<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Komjab
 *
 * @author Effendy
 */
class Komjab extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model(['M_Auth' => 'M_Auth', 'Admin/M_Komjab' => 'M_Komjab']);
        $this->result = $this->M_Auth->index();
}
    function index() {
        $data = [
            'title' => 'Kompetensi jabatan | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'Kompetensi Jabatan',
            'value' => $this->M_Komjab->index()
        ];
        $data['content'] = $this->load->view('Admin/V_Komjab', $data, true);
        $this->load->view('Template', $data);
    }
}
