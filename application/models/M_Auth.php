<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Auth
 *
 * @author Effendy
 */
class M_Auth extends CI_Model {

    function index() {
        if ($this->uri->segment(1, 0) == 'Admin') {
            $level = 1;
        } elseif ($this->uri->segment(1, 0) == 'Pegawai') {
            $level = 2;
        } else {
            $level = 0;
        }
        $this->db->cache_on();
        $exec = $this->db->select('*')
                ->from('tab_user')
                ->where('tab_user.id', $this->session->userdata('id'))
                ->where('tab_user.id_emp', $this->session->userdata('id_emp'))
                ->where('tab_user.isadmin', $level)
                ->get()
                ->result();
        if ($exec == []) {
            echo '<script>alert("You do not have permission to access");</script>';
            $this->session->sess_destroy();
            redirect('Login', 'refresh');
        } else {
            return $exec;
        }
    }

}
