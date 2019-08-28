<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pegawai
 *
 * @author Effendy
 */
class Pegawai extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['M_Auth' => 'M_Auth', 'Admin/M_Pegawai' => 'M_Pegawai']);
        $this->result = $this->M_Auth->index();
    }

    function index() {
        $data = [
            'title' => 'Data Pegawai | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'Data Pegawai',
            'value' => $this->M_Pegawai->index()
        ];
        $data['content'] = $this->load->view('Admin/V_Pegawai', $data, true);
        $this->load->view('Template', $data);
    }

    function Tambah() {
        $data = [
            'title' => 'Tambah Data Pegawai | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'Tambah Data Pegawai',
            'kode_jabatan' => $this->M_Pegawai->kode_jabatan()
        ];
        $data['content'] = $this->load->view('Admin/V_Tambah', $data, true);
        $this->load->view('Template', $data);
    }

    function Simpan() {
        $data = [
            'nik' => $this->input->post('nik'), 'nama' => $this->input->post('nama'), 'kode_jabatan' => $this->input->post('kode_jabatan'), 'nik_atasan' => $this->input->post('nikatasan'),
            [
                'kode_jabatan' => $this->input->post('kode_jabatan'), 'nama_jabatan' => $this->input->post('kode_jabatan'), 'divisi', 'unit_kerja', 'kode_matrik'
            ]
        ];
        print_r($data);
        die;
        $this->M_Pegawai->Simpan($data);
    }

    function Hapus() {
        $nik = $this->input->post('nikdelete');
        $exec = $this->M_Pegawai->Hapus($nik);
        if ($exec == true) {
            echo '<script>alert("Berhasil, data karyawan berhasil dihapus !");window.location.href="' . base_url('Admin/Pegawai/index/') . '";</script>';
        } else {
            echo '<script>alert("Gagal, data karyawan gagal dihapus !");window.location.href="' . base_url('Admin/Pegawai/index/') . '";</script>';
        }
    }

}
