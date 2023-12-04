<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RecentLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == null) {
            redirect('admin/auth');
        } elseif ($this->session->userdata('level') != 'Admin') {
            redirect('admin/auth/block');
        }
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = [
            'title' => 'Aktivitas Login',
            'recent_login' => $this->db->from('recent_login')->join('user', 'recent_login.username = user.username')->limit(5)->order_by('id_recent DESC')->get()->result_array(),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
        ];
        $this->load->view('admin/layout/_header', $data);
        $this->load->view('admin/layout/_sidebar', $data);
        $this->load->view('admin/layout/_navbar', $data);
        $this->load->view('admin/recent_login');
        $this->load->view('admin/layout/_footer');
    }
}
