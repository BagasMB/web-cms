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
        redirect('admin/saran');
    }
}
