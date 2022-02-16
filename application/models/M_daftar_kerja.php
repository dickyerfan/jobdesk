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
        $this->db->insert($table, $data);
        $this->db->insert('listjob', array(
            'name_task' => htmlspecialchars($this->input->post('name_task', true)),
            'username' => $table,
            'status_task1' => 'Pending',
            'tahun' => date('Y'),
            'bulan' => $bulan,
            'date_task1' => date('Y-m-d H:i:s')

        ));
    }

    public function kerjaSelesai()
    {
        $thnini = date('Y');
        $blnini = date('m');
        if ($blnini < 10) {
            $blnini = str_split($blnini)[1];
        }
        $data = [
            'status_task2' => 'Selesai',
            'bulan' => $blnini,
            'tahun' => $thnini
        ];

        $table = $this->session->userdata('username');
        $this->db->order_by('date_task2', 'ASC');
        return $this->db->get_where($table, $data)->result();
    }

    public function hapusData($id_task)
    {
        $table = $this->session->userdata('username');
        $this->db->where('id_task', $id_task);
        $this->db->delete($table);
    }

    public function prosesData($id_task)
    {

        $data = [
            'status_task1' => 'NULL',
            'status_task2' => 'Selesai',
            'date_task2' => date('Y-m-d H:i:s')
        ];

        $table = $this->session->userdata('username');
        $this->db->where('id_task', $id_task);
        return $this->db->update($table, $data);
    }

    public function downloadData()
    {
        if (isset($_POST['ambil_data'])) {
            $bulan = $this->input->post('bulan');
            if ($bulan < 10) {
                $bulan = str_split($bulan)[1];
                $table = $this->session->userdata('username');
                $query = $this->db->get_where($table, array('bulan' => $bulan));
                $cek = $query->num_rows();
                if ($cek > 0) {
                    $error = true;
                } else {
                    $this->db->where('username', $table);
                    $this->db->from('listjob',);
                    $this->db->insert($table,);
                    // $query_insert = "INSERT INTO $table (name_task, status_task1, tahun, bulan , date_task1)SELECT name_task,'Pending',YEAR(now()),month(now()),now() FROM listjob WHERE username = '$table' ";
                    // $insert = mysqli_query($con, $query_insert);
                }
            }
        }
    }
}
