<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboard
 *
 * @author Effendy
 */
class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin/M_Dashboard');
    }

    function index() {
        $data = [
            'title' => 'Dashboard Sistem Pengukuran 360',
            'uname' => 'BODO',
            'formtitle' => 'Dashboard'
        ];
        $data['content'] = $this->load->view('Pegawai/V_Dashboard', $data, true);
        $this->load->view('Template', $data);
    }

}

