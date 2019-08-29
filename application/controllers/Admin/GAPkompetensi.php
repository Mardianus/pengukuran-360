<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GAPkompetensi
 *
 * @author Effendy
 */
class GAPkompetensi extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model(['M_Auth' => 'M_Auth', 'Admin/M_GAPkompetensi' => 'M_GAPkompetensi']);
        $this->result = $this->M_Auth->index();
    }
    function index() {
        $data = [
            'title' => 'GAP Kompetensi | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'GAP Kompetensi',
            'value' => $this->M_GAPkompetensi->index()
        ];
        $data['content'] = $this->load->view('Admin/V_GAPkompetensi', $data, true);
        $this->load->view('Template', $data);
    }
}
