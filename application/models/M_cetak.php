<?php
defined('BASEPATH') or exit('No direct script access allowed');
class m_cetak extends CI_Model
{
    public function getAll()
    {
        if (isset($_POST["add_post"])) {
            $tahun = $this->input->post('tahun');
            $bulan = $this->input->post('bulan');
            if ($bulan < 10) {
                $bulan = str_split($bulan)[1];
            }
            $table = $this->session->userdata('username');
            $this->db->order_by('date_task2', 'ASC');
            return $this->db->get_where($table, array('status_task2' => 'Selesai', 'bulan' => $bulan, 'tahun' => $tahun))->result();
        } else {
            $table = $this->session->userdata('username');
            return $this->db->get('kosong')->result();
        }
    }
}
