<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_TingkatJabatan
 *
 * @author Effendy
 */
class M_TingkatJabatan extends CI_Model {
    
    function index() {
        $db = $this->db;
        $query = $db->select('*')
            ->from('level_jabatan')
            ->get();
        return $query->result();
    }
}
