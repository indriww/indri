<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip_model extends CI_Model {

    public function get_all_arsip()
    {
        // Jalankan query untuk mengambil semua data dari tabel 'arsip'
        $query = $this->db->get('arsip');

        // Debug untuk melihat apakah query berhasil
        if ($query->num_rows() > 0) {
            return $query->result(); // Jika ada data, kembalikan hasil sebagai array objek
        } else {
            // Debug output jika query tidak menemukan data
            return array(); // Kembalikan array kosong jika tidak ada data
        }
    }
}

public function get_all_arsip()
{
    $query = $this->db->get('arsip');

    // Debug: Tampilkan query yang dijalankan
    echo $this->db->last_query(); // Menampilkan query terakhir
    echo '<br>'; // Baris baru
    echo 'Jumlah data: ' . $query->num_rows(); // Tampilkan jumlah data
    echo '<pre>';
    print_r($query->result()); // Tampilkan hasil
    echo '</pre>';

    if ($query->num_rows() > 0) {
        return $query->result();
    } else {
        return array();
    }
}
