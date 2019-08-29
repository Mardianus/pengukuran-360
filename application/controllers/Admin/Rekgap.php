<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rekgap
 *
 * @author Effendy
 */
class Rekgap extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model(['M_Auth' => 'M_Auth', 'Admin/M_Rekgap' => 'M_Rekgap']);
        $this->result = $this->M_Auth->index();
}
    function index() {
        $data = [
            'title' => 'Rekap GAP | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'Rekap GAP',
            'value' => $this->M_Rekgap->index()
        ];
        $data['content'] = $this->load->view('Admin/V_Rekgap', $data, true);
        $this->load->view('Template', $data);
    }
}
