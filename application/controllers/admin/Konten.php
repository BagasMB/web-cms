<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konten extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == null) {
            redirect('admin/auth');
        }
        $this->load->model('Konten_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = [
            'title' => 'Konten',
            'konten' => $this->Konten_model->getAllKonten(),
            'kategori' => $this->Konten_model->getAllKategori(),
            'join' => $this->Konten_model->getJoin(),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
        ];
        $this->load->view('admin/layout/_header', $data);
        $this->load->view('admin/layout/_sidebar', $data);
        $this->load->view('admin/layout/_navbar', $data);
        $this->load->view('admin/konten');
        $this->load->view('admin/layout/_footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required', [
            'required' => 'Nama Tidak Boleh Kosong'
        ]);
        $konten = $this->input->post('judul');
        $cek_konten = $this->db->where('judul', $konten)->count_all_results('konten');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('gagal', 'Yahh, Semua Field Harus DiIsi!!!');
            redirect('admin/konten');
        } elseif ($cek_konten <> null) {
            $this->session->set_flashdata('gagal', 'Yahh, Judul Konten Sudah digunakan!!!');
            redirect('admin/konten');
        } else {
            $namaFoto = date('YmdHis') . '.jpg';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size']      = 2048 * 1024;
            $config['upload_path']   = 'assets/upload/konten/';
            $config['file_name']     = $namaFoto;
            $this->load->library('upload', $config);
            if ($_FILES['foto']['size'] >= 2048 *  1024) {
                $this->session->set_flashdata('gagal', 'Yahh, Ukuran foto terlalu besar, upload ulang dengan ukuran kurang dari 3mb!!!');
                redirect('admin/konten');
            } elseif (!$this->upload->do_upload('foto')) {
                $error = array('error', $this->upload->display_errors());
                $this->session->set_flashdata('gagal', 'Foto belum di upload!!!');
                redirect('admin/konten');
            } else {
                $data = array('upload_data' => $this->upload->data());
                $this->Konten_model->tambahKonten($namaFoto);
                $this->session->set_flashdata('flash', 'Yeaaaaaaaaaay!!!');
                redirect('admin/konten');
            }
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required', [
            'required' => 'Judul Tidak Boleh Kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('gagal', 'Yahh, Semua Field Harus DiIsi!!!');
            redirect('admin/konten');
        } else {
            $namaFoto = $this->input->post('nama_foto');
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size']      = 2048 * 1024;
            $config['upload_path']   = 'assets/upload/konten/';
            $config['file_name']     = $namaFoto;
            $config['overwrite']     = true;
            $this->load->library('upload', $config);
            if ($_FILES['foto']['size'] >= 2048 *  1024) {
                $this->session->set_flashdata('gagal', 'Yahh, Ukuran foto terlalu besar, upload ulang dengan ukuran kurang dari 3mb!!!');
                redirect('admin/konten');
            } elseif (!$this->upload->do_upload('foto')) {
                $error = array('error', $this->upload->display_errors());
                $this->Konten_model->editKonten($namaFoto);
                $this->session->set_flashdata('flash', 'Gemgeekang Gacorr!!!');
                redirect('admin/konten');
            } else {
                $data = array('upload_data' => $this->upload->data());
                $this->Konten_model->editKonten($namaFoto);
                $this->session->set_flashdata('flash', 'Gemgeekang Gacorr!!!');
                redirect('admin/konten');
            }
            redirect('admin/konten');
        }
    }

    public function hapus($namefoto)
    {
        $filename = FCPATH . '/assets/upload/konten/' . $namefoto;
        if (file_exists($filename)) {
            unlink("./assets/upload/konten/" . $namefoto);
        }
        $where = array('foto' => $namefoto);
        $this->db->delete('konten', $where);
        $this->session->set_flashdata('flash', 'Berhasil Di Hapus');
        redirect('admin/konten');
    }
}
