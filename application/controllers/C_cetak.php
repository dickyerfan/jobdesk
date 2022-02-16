<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_cetak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_cetak', 'cetak');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = 'Daftar Cetak';
        $data['cetak'] = $this->cetak->getAll();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('v_daftar_kerja/cetak', $data);
    }
}
