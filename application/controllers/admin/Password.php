<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Password extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('username') == null) {
            redirect('admin/auth');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Password',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
        ];

        $this->form_validation->set_rules('password_lama', 'Password Lama', 'trim|required', [
            'required' => 'Password Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('password_baru1', 'Password Baru', 'trim|required|matches[password_baru2]', [
            'required' => 'Password Tidak Boleh Kosong',
            'matches' => 'Password Baru Tidak Sama Dengan Konfirmasi Password',
        ]);
        $this->form_validation->set_rules('password_baru2', 'Konfirmasi Password Baru', 'trim|required|matches[password_baru1]', [
            'required' => 'Password Tidak Boleh Kosong',
            'matches' => 'Konfirmasi Password Tidak Sama Dengan Password Baru',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/layout/_header', $data);
            $this->load->view('admin/layout/_sidebar', $data);
            $this->load->view('admin/layout/_navbar', $data);
            $this->load->view('admin/auth/password');
            $this->load->view('admin/layout/_footer');
        } else {
            $id_user = $this->input->post('id_user');
            $password_lama = md5($this->input->post('password_lama'));
            $password_baru = md5($this->input->post('password_baru1'));
            if ($password_lama != $data['user']['password']) {
                $this->session->set_flashdata('gagal', 'Password Lama Anda Salah!!!');
                redirect('admin/Password');
            } else {
                if ($password_lama == $password_baru) {
                    $this->session->set_flashdata('gagal', 'Password Baru Sama Dengan Password Lama!!!');
                    redirect('admin/Password');
                } else {
                    $this->db->set('password', $password_baru);
                    $this->db->where('id_user', $id_user);
                    $this->db->update('user');
                    $this->session->set_flashdata('flash', 'Yeaaaaaaaaaay, Password berhasil diubah!!!');
                    redirect('admin/Password');
                }
            }
        }
    }
}
