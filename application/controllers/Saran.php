<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->model('Konten_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
            'required' => 'Nama Tidak Boleh Kosong'
        ]);

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Email Tidak Boleh Kosong'
        ]);
        $data = [
            'title' => 'Contact',
            'kategori' => $this->Kategori_model->getAllKategori(),
            'konten2' => $this->Konten_model->getAllKontenview(),
            'konfig' => $this->db->get('konfigurasi')->row(),
        ];
        if ($this->form_validation->run() == false) {
            $this->template->load('template', 'saran', $data);
        } else {
            $pesan = array(
                'nama'      => $this->input->post('nama'),
                'email'     => $this->input->post('email'),
                'tanggal'   => date('Y-m-d'),
                'isi_saran' => $this->input->post('isi_saran'),
            );
            $this->db->insert('saran', $pesan);
            $this->session->set_flashdata('flash', 'Selamat pesan anda telah terkirim!!!');
            redirect('saran');
        }
    }
}
