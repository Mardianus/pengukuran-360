<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MasterSoal
 *
 * @author Effendy
 */
class MasterSoal extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['M_Auth' => 'M_Auth', 'Admin/M_MasterSoal' => 'M_MasterSoal']);
        $this->result = $this->M_Auth->index();
    }

    function index() {
        $data = [
            'title' => 'Master Soal | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'Master Soal',
            'value' => $this->M_MasterSoal->index(),
            'kompetensi' => $this->M_MasterSoal->kompetensi(),
            'Mtjabatan' => $this->M_MasterSoal->Mtjabatan()
        ];
        $data['content'] = $this->load->view('Admin/V_MasterSoal', $data, true);
        $this->load->view('Template', $data);
    }

    function Simpan() {
        $data = [
            'kode_kompetensi' => $this->input->post('kompetensi'), 'kode_matrik_jabatan' => $this->input->post('kdmatrik'), 'soal_ds' => $this->input->post('ds'), 'soal_bds' => $this->input->post('bds')
        ];
        $exec = $this->M_MasterSoal->Simpan($data);
        if ($exec == true) {
            echo '<script>alert("Success, Soal berhasil ditambahkan !");window.location.href="' . base_url('Admin/MasterSoal/index/') . '";</script>';
        } else {
            echo '<script>alert("Error, Soal gagal ditambahkan !");window.location.href="' . base_url('Admin/MasterSoal/index/') . '";</script>';
        }
    }

}
