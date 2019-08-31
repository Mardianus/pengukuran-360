<?php
/**
 * Created by PhpStorm.
 * User: Ageng
 * Date: 31/08/2019
 * Time: 10:45
 */
class pkp extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $data = [
            'title' => 'PKP | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'Pengukuran Kompetensi Pegawai',
//            'value' => $this->M_GAPkompetensi->index()
        ];
        $data['content'] = $this->load->view('Pegawai/V_pkp', $data, true);
        $this->load->view('Template', $data);
    }
    public function page2(){
        $data = [
            'title' => 'PKP | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'Pengukuran Kompetensi Pegawai',
//            'value' => $this->M_GAPkompetensi->index()
        ];
        $data['content'] = $this->load->view('Pegawai/page2', $data, true);
        $this->load->view('Template', $data);
    }
    public function atasan(){
        $data = [
            'title' => 'PKP | Sistem Pengukuran 360',
            'uname' => $this->session->userdata('id_emp'),
            'formtitle' => 'Pengukuran Kompetensi Pegawai',
//            'value' => $this->M_GAPkompetensi->index()
        ];
        $data['content'] = $this->load->view('Pegawai/atasan', $data, true);
        $this->load->view('Template', $data);
    }
}