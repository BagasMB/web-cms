<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Caraousel_model extends CI_Model
{
    public function getAllCaraousel()
    {
        return $this->db->get('caraousel')->result_array();
    }

    public function editCaraousel($namaFoto)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'foto' => $namaFoto,
        );

        $where = array('foto' => $this->input->post('nama_foto'));
        $this->db->update('caraousel', $data, $where);
    }
}
