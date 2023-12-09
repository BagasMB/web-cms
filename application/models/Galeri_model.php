<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri_model extends CI_Model
{
    public function tambahGaleri($namaFoto)
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            'judul' => $this->input->post('judul'),
            'tanggal' => date('Y-m-d'),
            'foto' => $namaFoto,
        );
        $this->db->insert('galeri', $data);
    }

    public function editGaleri($namaFoto)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'foto' => $namaFoto,
        );
        $where = array('foto' => $this->input->post('nama_foto'));
        $this->db->update('galeri', $data, $where);
    }
}
