<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Komjab
 *
 * @author Effendy
 */
class M_Komjab extends CI_Model{
    
    function index(){
        return $this->db->select('*')
                        ->from('jabatan a')
                        ->join('matrik_jabatan b', 'a.kode_matrik = b.kode_matrik')
                        ->join('level_jabatan c', 'b.id_level = c.id')
                        ->get()
                        ->result();
    }
}
