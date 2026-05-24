<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('login');
        }
    }

    // LAPORAN PEMINJAMAN
    public function peminjaman()
    {
        $bulan = $this->input->get('bulan');

        $this->db->select('peminjaman.*, anggota.nama');
        $this->db->from('peminjaman');
        $this->db->join('anggota', 'anggota.id = peminjaman.anggota_id');

        if($bulan){
            $this->db->where('DATE_FORMAT(tanggal_pinjam, "%Y-%m") =', $bulan);
        }

        $data['data'] = $this->db->get()->result();
        $data['bulan'] = $bulan;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/peminjaman', $data);
        $this->load->view('templates/footer');
    }

    // LAPORAN ANGGOTA
        // LAPORAN ANGGOTA
    public function anggota()
    {
        $data['anggota'] = $this->db->get('anggota')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/anggota', $data);
        $this->load->view('templates/footer');
    }

    // CETAK LAPORAN ANGGOTA
    public function cetak_anggota()
    {
        $data['anggota'] = $this->db->get('anggota')->result();

        $this->load->view('laporan/cetak_anggota', $data);
    }

    // LAPORAN BUKU
public function buku()
{
    $this->db->select('buku.*, kategori.nama_kategori');
    $this->db->from('buku');
    $this->db->join('kategori', 'buku.id_kategori = kategori.id');

    $data['buku'] = $this->db->get()->result();

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('laporan/buku', $data);
    $this->load->view('templates/footer');
}

// CETAK LAPORAN BUKU
public function cetak_buku()
{
    $this->db->select('buku.*, kategori.nama_kategori');
    $this->db->from('buku');
    $this->db->join('kategori', 'buku.id_kategori = kategori.id');

    $data['buku'] = $this->db->get()->result();

    $this->load->view('laporan/cetak_buku', $data);
}
}