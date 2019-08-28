<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KamusKompetensi
 *
 * @author Effendy
 */
class KamusKompetensi extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model(['M_Auth' => 'M_Auth', 'Admin/M_KamusKompetensi' => 'M_KamusKompetensi']);
        $this->result = $this->M_Auth->index();
}
    function index() {
        $data = [
            'title' => 'Kamus Kompetensi | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'Kamus Kompetensi',
            'value' => $this->M_KamusKompetensi->index()
        ];
        $data['content'] = $this->load->view('Admin/V_KamusKompetensi', $data, true);
        $this->load->view('Template', $data);
    }
}
