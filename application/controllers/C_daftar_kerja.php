<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_daftar_kerja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_daftar_kerja', 'daftar_kerja');
        $this->load->library('form_validation');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {

        $data['title'] = 'Daftar Tunggu';
        $data['pekerjaan'] = $this->daftar_kerja->getAll();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('v_daftar_kerja/kerja_tunggu', $data);
        // $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('name_task', 'Pekerjaan', 'required', [
            'required' => 'Harus di isi, Tidak Boleh Kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Data Pekerjaan';
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('v_daftar_kerja/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $data['pekerjaan'] = $this->daftar_kerja->tambahData();
            // $data = [
            //     'name_task' => htmlspecialchars($this->input->post('name_task', true)),
            //     'status_task1' => 'Pending',
            //     'tahun' => 'YEAR(now())',
            //     'bulan' => 'month(now())',
            //     'date_task1' => 'now())',
            // ];
            // $table = $this->session->userdata('username');
            // $this->db->insert($table, $data);
            redirect('c_daftar_kerja');
        }
    }

    public function hapus($id_task)
    {
        $this->daftar_kerja->hapusData($id_task);
        redirect('c_daftar_kerja');
    }

    public function proses($id_task)
    {
        $this->daftar_kerja->prosesData($id_task);
        redirect('c_selesai');
    }
}
