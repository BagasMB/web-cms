<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getAllUser()
    {
        $this->db->order_by('nama', 'ASC');
        return $this->db->get('user')->result_array();
    }

    public function tambahUser()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            'username'  => htmlspecialchars($this->input->post('username')),
            'password'  => md5(htmlspecialchars($this->input->post('password'))),
            'image'     => 'default.png',
            'nama'      => htmlspecialchars($this->input->post('nama')),
            'email'     => htmlspecialchars($this->input->post('email')),
            'level'     => $this->input->post('level'),
            'recent_login' => date('Y-m-d H:i:s'),
        );
        $this->db->insert('user', $data);
    }

    public function editUser()
    {
        $data = array(
            'nama'      => htmlspecialchars($this->input->post('nama')),
            'level'     => $this->input->post('level'),
        );

        $where = array('id_user' => $this->input->post('id_user'));
        $this->db->update('user', $data, $where);
    }
}
