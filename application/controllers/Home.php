<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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

        $this->load->library('pagination');

        if ($this->input->post('submit')) {
            $data['search'] = $this->input->post('search');
            $this->session->set_userdata('search', $data['search']);
        } else {
            $data['search'] = $this->session->userdata('search');
        }

        $config['base_url'] = base_url('home/index/');
        $this->db->like('judul', $data['search']);
        $this->db->from('konten');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 4;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $total_konten = $this->db->get('konten')->num_rows();
        $data = [
            'title' => 'Homepage',
            'kategori' => $this->Kategori_model->getAllKategori(),
            'konten' => $this->Konten_model->getAllKontenviewCari($config['per_page'], $data['start'], $data['search']),
            'konten2' => $this->Konten_model->getAllKontenview(),
            'caraousel' => $this->Caraousel_model->getAllCaraousel(),
            'konfig' => $this->db->get('konfigurasi')->row(),
            'Agama' => $total_konten,
        ];
        $this->template->load('template', 'home', $data);
    }

    public function kategori($id)
    {
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->join('user', 'konten.username = user.username');
        $this->db->order_by('tanggal DESC');
        $this->db->where('konten.id_kategori', $id);
        $konten = $this->db->get()->result_array();

        $nama_kategori = $this->db->from('kategori')->where('id_kategori', $id)->get()->row()->nama_kategori;

        $data = [
            'title' => 'Content | ' . $nama_kategori,
            'kategori' => $this->Kategori_model->getAllKategori(),
            'nama_kategori' => $nama_kategori,
            'konten' => $konten,
            'konten2' => $this->Konten_model->getAllKontenview(),
            'konfig' => $this->db->get('konfigurasi')->row(),
        ];
        $this->template->load('template', 'kategori', $data);
    }

    public function artikel($id)
    {
        $data = [
            'title' => 'Detail | Konten',
            'kategori' => $this->Kategori_model->getAllKategori(),
            'konten' => $this->Konten_model->details($id),
            'konten2' => $this->Konten_model->getAllKontenview(),
            'konfig' => $this->db->get('konfigurasi')->row(),
        ];
        $this->template->load('template', 'details', $data);
    }

    public function home2()
    {

        $this->load->library('pagination');

        if ($this->input->post('submit')) {
            $data['search'] = $this->input->post('search');
            $this->session->set_userdata('search', $data['search']);
        } else {
            $data['search'] = $this->session->userdata('search');
            // if ($this->input->post('search')) {
            //     $data['search'] = $this->session->unset_userdata('search');
            //     # code...
            // }
        }

        $config['base_url'] = 'http://localhost/cms/home/index/';
        $this->db->like('judul', $data['search']);
        $this->db->from('konten');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 4;

        $this->pagination->initialize($config);

        $start['start'] = $this->uri->segment(3);
        $total_konten = $this->db->get('konten')->num_rows();

        $data = [
            'title' => 'Homepage',
            'kategori' => $this->Kategori_model->getAllKategori(),
            'konten' => $this->Konten_model->getAllKontenviewCari($config['per_page'], $start['start'], $data['search']),
            'konten2' => $this->Konten_model->getAllKontenview(),
            'caraousel' => $this->Caraousel_model->getAllCaraousel(),
            'konfig' => $this->db->get('konfigurasi')->row(),
        ];
        $this->load->view('home22', $data);
    }
}
