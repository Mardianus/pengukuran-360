<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_GAPkompetensi
 *
 * @author Effendy
 */
class M_GAPkompetensi extends CI_Model{
    
    function index (){
        $exec = $this->db->select('pegawai.nik,pegawai.nama,jabatan.nama_jabatan,jabatan.divisi,jabatan.unit_kerja,level_jabatan.`level`,kelompok_jabatan.kelompok')
                ->from('pegawai')
                ->join('jabatan', 'pegawai.kode_jabatan = jabatan.kode_jabatan', 'LEFT')
                ->join('matrik_jabatan', 'jabatan.kode_matrik = matrik_jabatan.kode_matrik', 'LEFT')
                ->join('level_jabatan', 'matrik_jabatan.id_level = level_jabatan.id', 'LEFT')
                ->join('kelompok_jabatan', 'matrik_jabatan.id_kelompok = kelompok_jabatan.id', 'LEFT')
                ->where('pegawai.status_active', 1)
                ->get()
                ->result();
        return $exec;
    }
    
}
