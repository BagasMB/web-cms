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
        $this->form_validation->set_rules('username', 'Username', 'trim|required', [
            'required' => 'Username Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password Tidak Boleh Kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/auth/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = htmlspecialchars($this->input->post('username', true));
        $password = $this->input->post('password', true);

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if ($password == $user['password']) {
                $data = [
                    'username' => $user['username'],
                    'level' => $user['level']
                ];
                $this->session->set_userdata($data);
                $recent = [
                    'username' => $user['username'],
                    'waktu' => date('h:i:s'),
                    'tanggal' => date('Y-m-d'),
                    'status' => 'Login'
                ];
                $this->db->insert('recent_login', $recent);
                redirect('admin/home');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-icon fade show" role="alert"><i class="mdi mdi-alert-circle-outline"></i>Password anda salah! </div>');
                redirect('admin/auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-icon fade show" role="alert"><i class="mdi mdi-alert-circle-outline"></i>Username tidak terdaftar! </div>');
            redirect('admin/auth');
        }
    }


    public function logout()
    {
        // $this->session->unset_userdata('username');
        // $this->session->unset_userdata('level');
        $user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->session->sess_destroy();
        $recent = [
            'username' => $user['username'],
            // 'waktu' => date('h:i:s'),
            'tanggal' => date('Y-m-d'),
            'status' => 'Logout'
        ];
        $this->db->insert('recent_login', $recent);
        redirect('admin/auth');
    }

    public function block()
    {
        $this->load->view('errors/404');
    }
}
