<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_KamusKompetensi
 *
 * @author Effendy
 */
class M_KamusKompetensi extends CI_Model {
    
    
    function index(){
        $db = $this->db;
        $query = $db->select('*')
            ->from('kamus_kompetensi')
            ->get();
        return $query->result();
    }
}
