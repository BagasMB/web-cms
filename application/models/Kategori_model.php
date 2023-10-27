<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    public function getAllKategori()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function tambahKategori()
    {
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori'),
        );
        $this->db->insert('kategori', $data);
    }

    public function editKategori()
    {
        $data = array(
            'nama_kategori'      => $this->input->post('nama_kategori'),
        );

        $where = array('id_kategori' => $this->input->post('id_kategori'));
        $this->db->update('kategori', $data, $where);
    }
}
