<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_Login extends CI_Model {

    function Proses($data) {
        $exec = $this->db->select()
                ->from('tab_user')
                ->where('id_emp', $data['username'])
                ->where('password', $data['password'])
                ->get()
                ->result();
        return $exec;
    }
    function last_login($id) {
        $this->db->set('last_login', date("Y-m-d H:i:s"))
                ->where('id',$id)
                ->update('tab_user');
    }
}
