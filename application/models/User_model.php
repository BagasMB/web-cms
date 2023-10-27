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
        $data = array(
            'username'  => htmlspecialchars($this->input->post('username')),
            'password'  => htmlspecialchars($this->input->post('password')),
            'image'     => 'default.png',
            'nama'      => htmlspecialchars($this->input->post('nama')),
            'level'     => $this->input->post('level'),
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
