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
}
