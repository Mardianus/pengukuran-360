<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_KelompokJabatan
 *
 * @author Effendy
 */
class M_KelompokJabatan extends CI_Model {
    
    function index(){
        $db = $this->db;
        $query = $db->select('*')
            ->from('kelompok_jabatan')
            ->get();
        return $query->result();
    }
}
