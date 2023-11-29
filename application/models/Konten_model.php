<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konten_model extends CI_Model
{
    public function getJoin()
    {
        $this->db->select('*')->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        return $this->db->get()->result_array();
    }

    public function getAllKonten()
    {
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->join('user', 'konten.username = user.username');
        $this->db->order_by('tanggal DESC');
        return $this->db->get()->result_array();
        // return $this->db->get('konten')->result_array();
    }

    public function details($id)
    {
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->join('user', 'konten.username = user.username');
        $this->db->order_by('tanggal DESC');
        $this->db->where('slug', $id);
        return $this->db->get()->row();
    }

    public function getAllKontenviewCari($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('judul', $keyword);
            $this->db->or_like('keterangan', $keyword);
        }
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->join('user', 'konten.username = user.username');
        $this->db->order_by('tanggal DESC');
        return $this->db->get('konten', $limit, $start, $keyword)->result_array();
    }

    public function getAllKontenview()
    {
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->join('user', 'konten.username = user.username');
        $this->db->order_by('tanggal DESC');
        $this->db->limit(5);
        return $this->db->get()->result_array();
    }

    public function getAllKategori()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function tambahKonten($namaFoto)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'keterangan' => $this->input->post('keterangan'),
            'id_kategori' => $this->input->post('id_kategori'),
            'foto' => $namaFoto,
            'tanggal' => $this->input->post('tanggal'),
            'username' => $this->input->post('username'),
            'slug' => str_replace(' ', '-', $this->input->post('judul')),
        );
        $this->db->insert('konten', $data);
    }

    public function editKonten($namaFoto)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'keterangan' => $this->input->post('keterangan'),
            'id_kategori' => $this->input->post('id_kategori'),
            'tanggal' => $this->input->post('tanggal'),
            'foto' => $namaFoto,
            'slug' => str_replace(' ', '-', $this->input->post('judul')),
        );

        $where = array('foto' => $this->input->post('nama_foto'));
        $this->db->update('konten', $data, $where);
    }
}
