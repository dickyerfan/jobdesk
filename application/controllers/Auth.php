<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Nama Panggilan', 'required', [
            'required' => 'Harus di isi, Tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Harus di isi, Tidak boleh kosong'
        ]);
        // $this->form_validation->set_rules('bagian', 'Bagian', 'required');
        // $this->form_validation->set_rules('sub_bagian', 'Sub Bagian', 'required');
        // $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasinya success
            $this->_login();
        }
    }
    private function _login()
    {
        // $username = htmlspecialchars($this->input->post('username'));
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $bagian = $this->input->post('bagian');
        $sub_bagian = $this->input->post('sub_bagian');
        $jabatan = $this->input->post('jabatan');

        $user = $this->db->get_where('user', [
            'username' => $username
            // 'bagian' => $bagian,
            // 'sub_bagian' => $sub_bagian,
            // 'jabatan' => $jabatan
        ])->row_array();

        //jika usernya ada
        if ($user) {
            // cek passwordnya
            if (password_verify($password, $user['password'])) {
                //jika password betul
                $data = [
                    'nama_depan' => $user['nama_depan'],
                    'nama_belakang' => $user['nama_belakang'],
                    'username' => $user['username'],
                    'bagian' => $user['bagian'],
                    'sub_bagian' => $user['sub_bagian'],
                    'jabatan' => $user['jabatan'],
                    'agama' => $user['agama'],
                    'no_hp' => $user['no_hp'],
                    'nik' => $user['nik'],
                    'jenkel' => $user['jenkel'],
                    'tempat_lahir' => $user['tempat_lahir'],
                    'tgl_lahir' => $user['tgl_lahir']
                ];
                $this->session->set_userdata($data);
                redirect('c_daftar_kerja');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password Salah
              </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Nama Panggilan tidak terdaftar
          </div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        // if ($this->session->userdata('username')) {
        //     redirect('user');
        // }

        $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required|trim', [
            'required' => 'Harus di isi, Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'required|trim', [
            'required' => 'Harus di isi, Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('username', 'Nama Panggilan', 'required|trim|is_unique[user.username]', [
            'required' => 'Harus di isi, Tidak Boleh Kosong',
            'is_unique' => 'nama panggilan sudah ada'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'required' => 'Harus di isi, Tidak Boleh Kosong',
            'matches' => 'Password Tidak Sama',
            'min_length' => 'Password Minimal 5 karakter!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'required' => 'Harus di isi, Tidak Boleh Kosong'
        ]);
        // $this->form_validation->set_rules('bagian', 'Bagian', 'required', [
        //     'required' => 'Harus di isi, Tidak Boleh Kosong'
        // ]);
        // $this->form_validation->set_rules('sub_bagian', 'Sub Bagian', 'required', [
        //     'required' => 'Harus di isi, Tidak Boleh Kosong'
        // ]);
        // $this->form_validation->set_rules('Jabatan', 'Jabatan', 'required', [
        //     'required' => 'Harus di isi, Tidak Boleh Kosong'
        // ]);
        // $this->form_validation->set_rules('agama', 'Agama', 'required', [
        //     'required' => 'Harus di isi, Tidak Boleh Kosong'
        // ]);
        // $this->form_validation->set_rules('no_hp', 'No HP', 'required|trim', [
        //     'required' => 'Harus di isi, Tidak Boleh Kosong'
        // ]);
        // $this->form_validation->set_rules('nik', 'NIK', 'required|trim', [
        //     'required' => 'Harus di isi, Tidak Boleh Kosong'
        // ]);
        // $this->form_validation->set_rules('jenkel', 'Jenis Kelamin', 'required', [
        //     'required' => 'Harus di isi, Tidak Boleh Kosong'
        // ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim', [
            'required' => 'Harus di isi, Tidak Boleh Kosong'
        ]);
        // $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', [
        //     'required' => 'Harus di isi, Tidak Boleh Kosong'
        // ]);


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama_depan' => strtoupper(htmlspecialchars($this->input->post('nama_depan', true))),
                'nama_belakang' => strtoupper(htmlspecialchars($this->input->post('nama_belakang', true))),
                'username' => strtoupper(htmlspecialchars($this->input->post('username', true))),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'bagian' => strtoupper(htmlspecialchars($this->input->post('bagian', true))),
                'sub_bagian' => strtoupper(htmlspecialchars($this->input->post('sub_bagian', true))),
                'jabatan' => strtoupper(htmlspecialchars($this->input->post('jabatan', true))),
                'agama' => strtoupper(htmlspecialchars($this->input->post('agama', true))),
                'no_hp' => strtoupper(htmlspecialchars($this->input->post('no_hp', true))),
                'nik' => strtoupper(htmlspecialchars($this->input->post('nik', true))),
                'jenkel' => strtoupper(htmlspecialchars($this->input->post('jenkel', true))),
                'tempat_lahir' => strtoupper(htmlspecialchars($this->input->post('tempat_lahir', true))),
                'tgl_lahir' => strtoupper(htmlspecialchars($this->input->post('tgl_lahir', true)))
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Selamat! Akun Anda sudah di buat. Silakan   Login
              </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nama_depan');
        $this->session->unset_userdata('nama_belakang');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('bagian');
        $this->session->unset_userdata('sub_bagian');
        $this->session->unset_userdata('jabatan');
        $this->session->unset_userdata('agama');
        $this->session->unset_userdata('no_hp');
        $this->session->unset_userdata('nik');
        $this->session->unset_userdata('jenkel');
        $this->session->unset_userdata('tempat_lahir');
        $this->session->unset_userdata('tgl_lahir');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Selamat, Logout Sukses
      </div>');
        redirect('auth');
    }
}
