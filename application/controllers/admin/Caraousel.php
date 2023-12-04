<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Caraousel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == null) {
            redirect('admin/auth');
        }
        $this->load->model('Caraousel_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = [
            'title' => 'Caraousel',
            'caraousel' => $this->Caraousel_model->getAllCaraousel(),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
        ];
        $this->load->view('admin/layout/_header', $data);
        $this->load->view('admin/layout/_sidebar', $data);
        $this->load->view('admin/layout/_navbar', $data);
        $this->load->view('admin/caraousel');
        $this->load->view('admin/layout/_footer', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required', [
            'required' => 'Nama Tidak Boleh Kosong'
        ]);
        $caraousel = $this->input->post('judul');
        $cek_caraousel = $this->db->where('judul', $caraousel)->count_all_results('caraousel');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-icon fade show" role="alert"><i class="mdi mdi-alert-circle-outline"></i> Yahh, Semua Field Harus DiIsi!!!</div>');
            redirect('admin/caraousel');
        } elseif ($cek_caraousel <> null) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-icon fade show" role="alert"><i class="mdi mdi-alert-circle-outline"></i> Yahh, Judul Konten sudah digunakan!!!</div>');
            redirect('admin/caraousel');
        } else {
            $namaFoto = date('YmdHis') . '.jpg';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size']      = 2048 * 1024;
            $config['upload_path']   = 'assets/upload/caraousel/';
            $config['file_name']     = $namaFoto;
            $this->load->library('upload', $config);
            if ($_FILES['foto']['size'] >= 2048 *  1024) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-icon fade show" role="alert"><i class="mdi mdi-alert-circle-outline"></i> Ukuran foto terlalu besar, upload ulang dengan ukuran kurang dari 3mb!!!</div>');
                redirect('admin/caraousel');
            } elseif (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-icon fade show" role="alert"><i class="mdi mdi-alert-circle-outline"></i> ;ppppppp</div>');
                redirect('admin/caraousel');
                $error = array('error', $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
                $data2 = [
                    'judul' => $this->input->post('judul'),
                    'foto' => $namaFoto,
                ];
                $this->db->insert('caraousel', $data2);
                $this->session->set_flashdata('flash', 'Yeaaaaaaaaaay!!!');
                redirect('admin/caraousel');
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
            redirect('admin/caraousel');
        } else {
            $namaFoto = $this->input->post('nama_foto');
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size']      = 2048 * 1024;
            $config['upload_path']   = 'assets/upload/caraousel/';
            $config['file_name']     = $namaFoto;
            $config['overwrite']     = true;
            $this->load->library('upload', $config);
            if ($_FILES['foto']['size'] >= 2048 *  1024) {
                $this->session->set_flashdata('gagal', 'Yahh, Ukuran foto terlalu besar, upload ulang dengan ukuran kurang dari 3mb!!!');
                redirect('admin/caraousel');
            } elseif (!$this->upload->do_upload('foto')) {
                $error = array('error', $this->upload->display_errors());
                $this->Caraousel_model->editCaraousel($namaFoto);
                $this->session->set_flashdata('flash', 'Gemgeekang Gacorr!!!');
                redirect('admin/caraousel');
            } else {
                $data = array('upload_data' => $this->upload->data());
                $this->Caraousel_model->editCaraousel($namaFoto);
                $this->session->set_flashdata('flash', 'Gemgeekang Gacorr!!!');
                redirect('admin/caraousel');
            }
            redirect('admin/caraousel');
        }
    }

    public function hapus($namefoto)
    {
        $filename = FCPATH . '/assets/upload/caraousel/' . $namefoto;
        if (file_exists($filename)) {
            unlink("./assets/upload/caraousel/" . $namefoto);
        }
        $where = array('foto' => $namefoto);
        $this->db->delete('caraousel', $where);
        $this->session->set_flashdata('flash', 'Berhasil DiHapus!!!');
        redirect('admin/caraousel');
    }
}
