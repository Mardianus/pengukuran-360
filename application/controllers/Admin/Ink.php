<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ink
 *
 * @author Effendy
 */
class Ink extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model(['M_Auth' => 'M_Auth', 'Admin/M_Ink' => 'M_Ink']);
        $this->result = $this->M_Auth->index();
    }
    function index() {
        $data = [
            'title' => 'Input Nilai Kompetensi | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'Input Nilai Kompetensi',
            'value' => $this->M_Ink->index()
        ];
        $data['content'] = $this->load->view('Admin/V_Ink', $data, true);
        $this->load->view('Template', $data);
    }
}
