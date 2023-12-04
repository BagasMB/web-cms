<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MyProfile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == null) {
            redirect('admin/auth');
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = [
            'title' => 'MyProfile',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
        ];

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/layout/_header', $data);
            $this->load->view('admin/layout/_sidebar', $data);
            $this->load->view('admin/layout/_navbar', $data);
            $this->load->view('admin/my_profile');
            $this->load->view('admin/layout/_footer', $data);
        } else {
            $user_id = $this->input->post('id_user');
            $nama = $this->input->post('nama');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/upload/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/upload/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama', $nama);

            $this->db->where('id_user', $user_id);
            $this->db->update('user');
            $this->session->set_flashdata('flash', 'Gemgeekang Gacorr!!!');
            redirect('admin/MyProfile');
        }
    }
}
