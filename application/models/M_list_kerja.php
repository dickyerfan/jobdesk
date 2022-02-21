<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_list_kerja extends CI_Model
{
    public function getAll()
    {
        $table = $this->session->userdata('username');
        return $this->db->get_where('listjob', array('username' => $table))->result();
    }

    public function hapusData($id_list)
    {
        // $table = $this->session->userdata('username');
        $this->db->where('id_list', $id_list);
        $this->db->delete('listjob');
    }

    // public function downloadData($id_list)
    // {
    //     date_default_timezone_set("Asia/Jakarta");
    //     $bulan = date('m');
    //     if ($bulan < 10) {
    //         $bulan = str_split($bulan)[1];

    //         $table = $this->session->userdata('username');
    //         $query = $this->db->query("SELECT * FROM $table WHERE bulan = '$bulan' ");

    //         if ($query->num_rows() > 0) {
    //             redirect('coba');
    //         } else {
    //             $this->db->query("INSERT INTO $table (name_task, status_task1, tahun, bulan , date_task1)SELECT name_task,'Pending',YEAR(now()),month(now()),now() FROM listjob WHERE username = '$table' AND id_list = '$id_list' ");
    //         }
    //     }
    // }
}
