<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Pegawai
 *
 * @author Effendy
 */
class M_Pegawai extends CI_Model {

    function index() {
        $exec = $this->db->select('pegawai.nik,pegawai.nama,jabatan.nama_jabatan,jabatan.divisi,jabatan.unit_kerja,level_jabatan.`level`,kelompok_jabatan.kelompok')
                ->from('pegawai')
                ->join('jabatan', 'pegawai.kode_jabatan = jabatan.kode_jabatan', 'LEFT')
                ->join('matrik_jabatan', 'jabatan.kode_matrik = matrik_jabatan.kode_matrik', 'LEFT')
                ->join('level_jabatan', 'matrik_jabatan.id_level = level_jabatan.id', 'LEFT')
                ->join('kelompok_jabatan', 'matrik_jabatan.id_kelompok = kelompok_jabatan.id', 'LEFT')
                ->where('pegawai.status_active', 1)
                ->LIMIT(4000)
                ->get()
                ->result();
        return $exec;
    }

    function kode_jabatan() {
        $exec = $this->db->select('kode_jabatan,nama_jabatan')->from('jabatan')->get()->result();
        return $exec;
    }

    function Hapus($nik) {
        $this->db->trans_begin();
        $this->db->set(['status_active' => 2, 'sysdeleteuser' => $this->session->userdata('id'),'sysdeletedate'=> date("Y-m-d H:i:s")])
                ->where('nik', $nik, false)->update('pegawai');
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

}
