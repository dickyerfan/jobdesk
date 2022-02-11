<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_daftar_kerja extends CI_Model
{
    public function getAll()
    {
        $table = $this->session->userdata('username');
        return $this->db->get_where($table, array('status_task1' => 'Pending'))->result();
    }

    public function tambahData()
    {
        date_default_timezone_set("Asia/Jakarta");
        $bulan = date('m');
        if ($bulan < 10) {
            $bulan = str_split($bulan)[1];

            $data = [
                'name_task' => htmlspecialchars($this->input->post('name_task', true)),
                'status_task1' => 'Pending',
                'tahun' => date('Y'),
                'bulan' => $bulan,
                'date_task1' => date('Y-m-d H:i:s')
            ];
        }
        $table = $this->session->userdata('username');
        return $this->db->insert($table, $data);
    }

    public function kerjaSelesai()
    {
        $table = $this->session->userdata('username');
        return $this->db->get_where($table, array('status_task2' => 'Selesai'))->result();
    }
}
