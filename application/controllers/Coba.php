<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coba extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', [
            'username' => $this->session->userdata('username')
        ])->row_array();
        echo "Selamat datang : " . $data['user']['username'];
        echo '<br>';
        echo "Bagian : " . $data['user']['bagian'];
        echo '<br>';
        echo "Sub Bagian : " . $data['user']['sub_bagian'];
        echo '<br>';
        echo "Jabatan : " . $data['user']['jabatan'];
        echo '<br>';
        echo "NO HP : " . $data['user']['no_hp'];
        echo '<br>';
        echo "Tempat Lahir : " . $data['user']['tempat_lahir'];
    }
}
