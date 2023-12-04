<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == null) {
            redirect('admin/auth');
        }
        $this->load->model('Kategori_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = [
            'title' => 'Kategori | Konten',
            'kategori' => $this->Kategori_model->getAllKategori(),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
        ];
        $this->load->view('admin/layout/_header', $data);
        $this->load->view('admin/layout/_sidebar', $data);
        $this->load->view('admin/layout/_navbar', $data);
        $this->load->view('admin/kategori');
        $this->load->view('admin/layout/_footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_kategori', 'Nama', 'trim|required', [
            'required' => 'Nama Tidak Boleh Kosong'
        ]);
        $kategori = $this->input->post('nama_kategori');
        $cek_kategori = $this->db->where('nama_kategori', $kategori)->count_all_results('kategori');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('gagal', 'Yahh, Semua Field Harus DiIsi!!!');
            redirect('admin/kategori');
        } elseif ($cek_kategori <> null) {
            $this->session->set_flashdata('gagal', 'Yahh, Kategori Konten sudah digunakan!!!');
            redirect('admin/kategori');
        } else {
            $this->Kategori_model->tambahKategori();
            $this->session->set_flashdata('flash', 'Yeaaaaaaaaaay!!!');
            redirect('admin/kategori');
        }
    }

    public function edit()
    {
        $this->Kategori_model->editKategori();
        $this->session->set_flashdata('flash', 'Gemgeekang Gacorr!!!');
        redirect('admin/kategori');
    }

    public function hapus($id)
    {
        $where = array('id_kategori' => $id);
        $this->db->delete('kategori', $where);
        $this->session->set_flashdata('flash', 'Berhasil DiHapus!!!');
        redirect('admin/kategori');
    }
}
