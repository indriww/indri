<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Arsip_model'); // Pastikan model di-load
    }

    public function index()
    {
        // Ambil data arsip dari model
        $data['arsip'] = $this->Arsip_model->get_all_arsip();

        // Debugging untuk melihat data yang diambil
        echo '<pre>';
        print_r($data['arsip']);
        echo '</pre>';
        // Hentikan eksekusi sementara untuk melihat output
        die();

        // Load view
        $this->load->view('arsip_list', $data);
    }
}
public function index()
{
    // Uji koneksi database
    $this->load->database();
    
    if ($this->db->conn_id) {
        echo "Koneksi berhasil!";
    } else {
        echo "Koneksi gagal!";
    }
    
    // Ambil data arsip dari model
    $data['arsip'] = $this->Arsip_model->get_all_arsip();
    
    // Debugging untuk melihat data yang diambil
    echo '<pre>';
    print_r($data['arsip']);
    echo '</pre>';
    die(); // Hentikan eksekusi untuk melihat output
}
