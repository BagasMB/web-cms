<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->model('Konten_model');
        $this->load->model('Caraousel_model');
    }

    public function index()
    {
        $data = [
            'title' => 'About',
            'kategori' => $this->Kategori_model->getAllKategori(),
            'konten2' => $this->Konten_model->getAllKontenview(),
            'konfig' => $this->db->get('konfigurasi')->row(),
            'galeri' => $this->db->get('galeri')->result_array(),
        ];
        $this->template->load('template', 'about', $data);
        // $this->load->view('home22', $data);
    }
}
