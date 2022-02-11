<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_selesai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_daftar_kerja', 'daftar_kerja');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Pekerjaan Selesai';
        $data['selesai'] = $this->daftar_kerja->kerjaSelesai();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('v_daftar_kerja/kerja_selesai', $data);
        // $this->load->view('templates/footer');
    }
}
