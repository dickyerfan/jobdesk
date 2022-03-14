<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_password extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('m_password', 'password');
        $this->load->library('form_validation');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {

        $data['title'] = 'Ganti Password';
        // $data['pekerjaan'] = $this->password->getAll();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim', [
            'required' => 'Harus di isi, Tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[5]|matches[new_password2]', [
            'required' => 'Harus di isi, Tidak boleh kosong',
            'matches' => 'Password Baru Harus Sama dengan Password Konfirmasi',
            'min_length' => 'Password Minimal 5 karakter!'
        ]);
        $this->form_validation->set_rules('new_password2', ' Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]', [
            'required' => 'Harus di isi, Tidak boleh kosong',
            'matches' => 'Password Konfirmasi Harus Sama dengan Password Baru'
        ]);

        if ($this->form_validation->run() == false) {

            $this->load->view('v_daftar_kerja/password', $data);
        } else {

            $current_password = $this->input->post('current_password');

            $new_password = $this->input->post('new_password1');

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password saat ini Salah...
              </div>');
                redirect('c_password');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password baru tidak boleh sama dengan password saat ini
                  </div>');
                    redirect('c_password');
                } else {
                    //password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Selamat,  Password Berhasil di ubah...
                  </div>');
                    redirect('c_password');
                }
            }
        }
    }
}
