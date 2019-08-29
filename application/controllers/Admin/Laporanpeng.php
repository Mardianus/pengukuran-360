<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Laporanpeng
 *
 * @author Effendy
 */
class Laporanpeng extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model(['M_Auth' => 'M_Auth', 'Admin/M_Laporanpeng' => 'M_Laporanpeng']);
        $this->result = $this->M_Auth->index();
}
    function index() {
        $data = [
            'title' => 'Laporan Pengukuran | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'Laporan Pengukuran',
            'value' => $this->M_Laporanpeng->index()
        ];
        $data['content'] = $this->load->view('Admin/V_Laporanpeng', $data, true);
        $this->load->view('Template', $data);
    }
}
