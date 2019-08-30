<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_MasterSoal
 *
 * @author Effendy
 */
class M_MasterSoal extends CI_Model {

    function index() {
        $malih = $this->db->select('tab_soal.id AS id_soal,tab_soal.kode_kompetensi,tab_soal.kode_matrik_jabatan,tab_soal.soal_ds,tab_soal.soal_bds,tab_jawaban.id AS id_jawaban,tab_jawaban.kd_jawaban,tab_jawaban.jawaban_ds,tab_jawaban.jawaban_bds')
                ->from('tab_soal')
                ->join('tab_jawaban', 'tab_jawaban.id_soal = tab_soal.id', 'left')
                ->get()
                ->result();
        return $malih;
    }

    function kompetensi() {
        $exec = $this->db->select('kode_kompetensi,nama_kompetensi')
                ->from('kamus_kompetensi')
                ->get()
                ->result();
        return $exec;
    }

    function Mtjabatan() {
        $exec = $this->db->select('kode_matrik')
                ->from('matrik_jabatan')
                ->get()
                ->result();
        return $exec;
    }

    function Simpan($data) {
        $this->db->trans_begin();
        $this->db->insert('tab_soal', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    function Jawaban($id_soal) {
        $exec = $this->db->select()
                ->from('tab_jawaban')
                ->where('tab_jawaban.id_soal', $id_soal)
                ->get()
                ->result();
        if ($exec == []) {
            return false;
        } else {
            return $exec;
        }
    }

}
