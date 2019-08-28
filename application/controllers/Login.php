<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Login');
    }

    function index() {
        if ($this->session->userdata('loginstatus') == 'berhasil') {
            if ($this->session->userdata('isadmin') == 1) {
                redirect('Admin/Dashboard/index', 'refresh');
            } elseif ($this->session->userdata('isadmin') == 2) {
                redirect('Pegawai/Dashboard/index', 'refresh');
            } elseif ($this->session->userdata('isadmin') == 3) {
                redirect('Penilai/Dashboard/index', 'refresh');
            } else {
                $this->session->sess_destroy();
                redirect('Login/index', 'refresh');
            }
        } else {
            $this->load->view('V_Login');
        }
    }

    function Proses() {
        $data = [
            'username' => $this->input->post('uname'),
            'password' => md5($this->input->post('pwd'))
        ];
        $exec = $this->M_Login->Proses($data);
        if ($exec == true) {
            $this->M_Login->last_login($exec[0]->id);
            $session = [
                'loginstatus' => 'berhasil',
                'id' => $exec[0]->id,
                'id_emp' => $exec[0]->id_emp,
                'isadmin' => $exec[0]->isadmin
            ];
            $this->session->set_userdata($session);
            if ($exec[0]->isadmin == 1) {
                redirect('Admin/Dashboard/index', 'refresh');
            } elseif ($exec[0]->isadmin == 2) {
                redirect('Pegawai/Dashboard/index', 'refresh');
            } elseif ($exec[0]->isadmin == 3) {
                redirect('Penilai/Dashboard/index', 'refresh');
            } else {
                $this->session->sess_destroy();
                redirect('Login/index', 'refresh');
            }
        } else {
            $this->session->sess_destroy();
            redirect('Login/index', 'refresh');
        }
    }

}
