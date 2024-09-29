<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arsip_model extends CI_Model
{
    // Ambil semua data arsip
    public function get_all_arsip()
    {
        $query = $this->db->get('arsip');
        return $query->result();
    }

    // Cari arsip berdasarkan no_ref
    public function search_arsip($no_ref)
    {
        $this->db->like('no_ref', $no_ref);
        $query = $this->db->get('arsip');
        return $query->result();
    }

    // Tambah data arsip
    public function insert_arsip($data)
    {
        return $this->db->insert('arsip', $data);
    }
}