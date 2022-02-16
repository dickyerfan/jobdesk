<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_list_kerja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_list_kerja', 'list_kerja');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = 'Pekerjaan Rutin';
        $data['pekerjaan'] = $this->list_kerja->getAll();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('v_daftar_kerja/list_kerja', $data);
    }

    public function hapus($id_list)
    {
        $this->list_kerja->hapusData($id_list);
        redirect('c_list_kerja');
    }
}
