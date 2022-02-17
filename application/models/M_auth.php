<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_auth extends CI_Model
{
    public function updateData()
    {
        $data = [
            'username' => $this->input->post('username'),
            'bagian' => strtoupper($this->input->post('bagian')),
            'sub_bagian' => strtoupper($this->input->post('sub_bagian')),
            'jabatan' => strtoupper($this->input->post('jabatan'))
        ];
        $username = $data['username'];
        $this->db->where('username', $username);
        $this->db->update('user', $data);
    }
}
