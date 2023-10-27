<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
            'title' => 'Halaman | User',
            'data_user' => $this->User_model->getAllUser(),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
        ];
        $this->load->view('admin/layout/_header', $data);
        $this->load->view('admin/layout/_sidebar', $data);
        $this->load->view('admin/layout/_navbar', $data);
        $this->load->view('admin/user');
        $this->load->view('admin/layout/_footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required', [
            'required' => 'Username Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
            'required' => 'Nama Tidak Boleh Kosong'
        ]);

        $username = $this->input->post('username');
        $cek_username = $this->db->where('username', $username)->count_all_results('user');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-icon fade show" role="alert"><i class="mdi mdi-alert-circle-outline"></i> Yahh, Semua Field Harus DiIsi!!!</div>');
            redirect('admin/user');
        } elseif ($cek_username <> null) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-icon fade show" role="alert"><i class="mdi mdi-alert-circle-outline"></i> Yahh, Username sudah digunakan!!!</div>');
            redirect('admin/user');
        } else {
            $this->User_model->tambahUser();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-icon fade show" role="alert"><i class="mdi mdi-check-circle-outline"></i> Yeaaaaaaaaaay!!!</div>');
            redirect('admin/user');
        }
    }

    public function edit()
    {
        $this->User_model->editUser();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-icon fade show" role="alert"><i class="mdi mdi-check-circle-outline"></i>Gemgeekang Gacorr!!!</div>');
        redirect('admin/user');
    }

    public function hapus($id)
    {
        $where = array('id_user' => $id);
        $this->db->delete('user', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-icon fade show" role="alert"><i class="mdi mdi-trash-can-outline"></i>Kok di hapus si kak!!!</div>');
        redirect('admin/user');
    }
}
