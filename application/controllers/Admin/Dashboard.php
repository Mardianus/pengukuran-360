<?php

/**
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

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
        $data['content'] = $this->load->view('Admin/V_Dashboard', $data, true);
        $this->load->view('Template', $data);
    }

}
