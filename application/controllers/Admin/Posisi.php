<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Posisi
 *
 * @author casug
 */
class Posisi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['M_Auth' => 'M_Auth', 'Admin/M_Posisi' => 'M_Posisi']);
        $this->result = $this->M_Auth->index();
    }

    function index() {
        $data = [
            'title' => 'Data Posisi Jabatan | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'Data Posisi Jabatan',
            'value' => $this->M_Pegawai->index()
        ];
        $data['content'] = $this->load->view('Admin/V_Posisi', $data, true);
        $this->load->view('Template', $data);
    }

}
