<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_download extends CI_Controller
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
        if (isset($_POST['ambil_data'])) {
            $bulan = $this->input->post('bulan');
            date_default_timezone_set("Asia/Jakarta");
            $bulan = date('m');
            if ($bulan < 10) {
                $bulan = str_split($bulan)[1];

                $table = $this->session->userdata('username');
                $query = $this->db->query("SELECT * FROM $table WHERE bulan = '$bulan' ");

                if ($query->num_rows() > 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Download Data Gagal! <br> Daftar pekerjaan sudah ada
                  </div>');
                    redirect('c_daftar_kerja');
                    // redirect('coba');
                } else {
                    $this->db->query("INSERT INTO $table (name_task, status_task1, tahun, bulan , date_task1)SELECT name_task,'Pending',YEAR(now()),month(now()),now() FROM listjob WHERE username = '$table'");
                    redirect('c_daftar_kerja');
                }
            } else {
                $table = $this->session->userdata('username');
                $query = $this->db->query("SELECT * FROM $table WHERE bulan = '$bulan' ");

                if ($query->num_rows() > 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Download Data Gagal! <br> Daftar pekerjaan sudah ada
                  </div>');
                    redirect('c_daftar_kerja');
                    // redirect('coba');
                } else {
                    $this->db->query("INSERT INTO $table (name_task, status_task1, tahun, bulan , date_task1)SELECT name_task,'Pending',YEAR(now()),month(now()),now() FROM listjob WHERE username = '$table'");
                    redirect('c_daftar_kerja');
                }
            }
        }
    }
}
