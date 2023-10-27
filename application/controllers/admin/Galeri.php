<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == null) {
            redirect('admin/auth');
        }
        $this->load->model('Galeri_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = [
            'title' => 'Galeri',
            'galeri' => $this->db->order_by('tanggal DESC')->get('galeri')->result_array(),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
        ];
        $this->load->view('admin/layout/_header', $data);
        $this->load->view('admin/layout/_sidebar', $data);
        $this->load->view('admin/layout/_navbar', $data);
        $this->load->view('admin/galeri');
        $this->load->view('admin/layout/_footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required', [
            'required' => 'Nama Tidak Boleh Kosong'
        ]);
        $galeri = $this->input->post('judul');
        $cek_galeri = $this->db->where('judul', $galeri)->count_all_results('galeri');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-icon fade show" role="alert"><i class="mdi mdi-alert-circle-outline"></i> Yahh, Semua Field Harus DiIsi!!!</div>');
            redirect('admin/galeri');
        } elseif ($cek_galeri <> null) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-icon fade show" role="alert"><i class="mdi mdi-alert-circle-outline"></i> Yahh, Judul Galeri sudah digunakan!!!</div>');
            redirect('admin/galeri');
        } else {
            $namaFoto = date('YmdHis') . '.jpg';
            $config['allowed_types'] = '*';
            $config['upload_path']   = 'assets/upload/galeri/';
            $config['file_name']     = $namaFoto;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $error = array('error', $this->upload->display_errors());
                $this->Galeri_model->tambahGaleri($namaFoto);
            } else {
                $data = array('upload_data' => $this->upload->data());
                $this->Galeri_model->tambahGaleri($namaFoto);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-icon fade show" role="alert"><i class="mdi mdi-check-circle-outline"></i> Yeaaaaaaaaaay!!!</div>');
                redirect('admin/galeri');
            }
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required', [
            'required' => 'Judul Tidak Boleh Kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-icon fade show" role="alert"><i class="mdi mdi-alert-circle-outline"></i> Yahh, Semua Field Harus DiIsi!!!</div>');
            redirect('admin/galeri');
        } else {
            $namaFoto = $this->input->post('nama_foto');
            $config['allowed_types'] = '*';
            // $config['max_size']      = 2048 * 1024;
            $config['upload_path']   = 'assets/upload/galeri/';
            $config['file_name']     = $namaFoto;
            $config['overwrite']     = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $error = array('error', $this->upload->display_errors());
                $this->Galeri_model->editGaleri($namaFoto);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-icon fade show" role="alert"><i class="mdi mdi-check-circle-outline"></i> GacorrKang!!!</div>');
                redirect('admin/galeri');
            } else {
                $data = array('upload_data' => $this->upload->data());
                $this->Galeri_model->editGaleri($namaFoto);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-icon fade show" role="alert"><i class="mdi mdi-check-circle-outline"></i> GacorrKang!!!</div>');
                redirect('admin/galeri');
            }
        }
    }

    public function hapus($namefoto)
    {
        $filename = FCPATH . '/assets/upload/galeri/' . $namefoto;
        if (file_exists($filename)) {
            unlink("./assets/upload/galeri/" . $namefoto);
        }
        $where = array('foto' => $namefoto);
        $this->db->delete('galeri', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-icon fade show" role="alert"><i class="mdi mdi-trash-can-outline"></i>Kok di hapus si kak!!!</div>');
        redirect('admin/galeri');
    }
}
