<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = [
            'title' => 'Saran',
            'saran' => $this->db->get('saran')->result_array(),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
        ];
        $this->load->view('admin/layout/_header', $data);
        $this->load->view('admin/layout/_sidebar', $data);
        $this->load->view('admin/layout/_navbar', $data);
        $this->load->view('admin/saran');
        $this->load->view('admin/layout/_footer');
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->db->where_in('id_saran', $id)->delete('saran');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-icon fade show" role="alert"><i class="mdi mdi-trash-can-outline"></i>Kok di hapus si kak!!!</div>');
        redirect('admin/saran');
    }
}
