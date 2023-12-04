<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == null) {
            redirect('admin/auth');
        }
    }

    public function index()
    {
        $data = [
            'title'  => 'Konfigurasi',
            'konfig' => $this->db->get('konfigurasi')->row(),
            'user'   => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
        ];
        $this->load->view('admin/layout/_header', $data);
        $this->load->view('admin/layout/_sidebar', $data);
        $this->load->view('admin/layout/_navbar', $data);
        $this->load->view('admin/konfigurasi');
        $this->load->view('admin/layout/_footer', $data);
    }

    public function update()
    {
        $where = ['id_konfigurasi' => 1];
        $data = [
            'judul_website' => $this->input->post('judul_website'),
            'profil_website' => $this->input->post('profil_website'),
            'instagram' => $this->input->post('instagram'),
            'twitter' => $this->input->post('twitter'),
            'github' => $this->input->post('github'),
            'spotify' => $this->input->post('spotify'),
            'facebook' => $this->input->post('facebook'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'no_wa' => $this->input->post('no_wa'),
        ];
        $this->db->update('konfigurasi', $data, $where);
        $this->session->set_flashdata('flash', 'Gemgeekang Gacorr!!!');
        redirect('admin/konfigurasi');
    }
}
