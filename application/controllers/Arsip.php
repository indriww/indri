<?php

class Arsip extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Arsip_model');
    }

    public function index()
    {
        // Ambil semua arsip
        $data['arsip'] = $this->Arsip_model->get_all_arsip();

        // Load view untuk menampilkan data arsip
        $this->load->view('arsip/index', $data);
    }

    public function search()
    {
        // Ambil no_ref dari input pengguna
        $no_ref = $this->input->get('no_ref');

        // Cari arsip berdasarkan no_ref
        $data['arsip'] = $this->Arsip_model->search_arsip($no_ref);

        // Load view dengan hasil pencarian
        $this->load->view('arsip/index', $data);
    }

    public function add()
    {
        // Jika method request adalah POST, proses penambahan data
        if ($this->input->method() === 'post') {
            $data = array(
                'no_ref' => $this->input->post('no_ref'),
                'nama_berkas' => $this->input->post('nama_berkas'),
                'tanggal' => $this->input->post('tanggal'),
                'loker' => $this->input->post('loker'),
                'row' => $this->input->post('row')
            );

            // Simpan data ke database
            $this->Arsip_model->insert_arsip($data);

            // Redirect ke halaman index
            redirect('arsip');
        } else {
            // Load form tambah arsip
            $this->load->view('arsip/add');
        }
    }
}