<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {

        $data['title'] = 'Profil Karyawan';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('v_daftar_kerja/profil', $data);
    }
}
