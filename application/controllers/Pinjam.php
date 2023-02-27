<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pinjam extends CI_Controller
{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') !== "login") {
            redirect(base_url('login'));
        }
        $this->load->model('m_pinjam');
        $this->load->model('m_karyawan');
        $this->load->model('m_arsip');
    }

    public function index() {   
        $data['pinjams'] = $this->m_pinjam->get_pinjam('tb_pinjam')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_pinjam', $data);
        $this->load->view('templates/footer');
    }

    public function add_pinjam_page() {
        $data['karyawans'] = $this->m_karyawan->get_karyawan('tb_karyawan')->result();
        $data['arsips'] = $this->m_arsip->get_arsip('tb_arsip')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_pinjam_add', $data);
        $this->load->view('templates/footer');
    }

    public function edit_pinjam_page($kode) {
        $where = array('kode_pinjam' => $kode);
        $data['pinjam'] = $this->db->get_where('tb_pinjam', $where)->row();
        $data['karyawans'] = $this->m_karyawan->get_karyawan('tb_karyawan')->result();
        $data['arsips'] = $this->m_arsip->get_arsip('tb_arsip')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_pinjam_edit', $data);
        $this->load->view('templates/footer');
    }

    public function add_pinjam() {
        $kode_pinjam = $this->input->post('kode-pinjam');
        $id_karyawan = $this->input->post('id-karyawan');
        $nama_karyawan = $this->input->post('nama-karyawan');
        $file_arsip = $this->input->post('file-arsip');
        $nama_customer = $this->input->post('nama-customer');
        $tanggal_pinjam = $this->input->post('tanggal-pinjam');
        $durasi = $this->input->post('durasi');

        $tanggal_kembali = date('Y-m-d', strtotime("$tanggal_pinjam + $durasi days"));
        
        $data_pinjam = array(
            'kode_pinjam' => $kode_pinjam,
            'id_karyawan' => $id_karyawan,
            'nama_karyawan' => $nama_karyawan,
            'file_arsip' => $file_arsip,
            'nama_customer' => $nama_customer,
            'tgl_pinjam' => $tanggal_pinjam,
            'durasi' => $durasi,
            'tgl_kembali' => $tanggal_kembali,
        );
        
        $this->m_pinjam->insert_pinjam($data_pinjam);
        redirect(base_url('pinjam'));
    }

    public function edit_pinjam() {
        $kode_pinjam = $this->input->post('kode-pinjam');

        $id_karyawan = $this->input->post('id-karyawan');
        $nama_karyawan = $this->input->post('nama-karyawan');
        $file_arsip = $this->input->post('file-arsip');
        $nama_customer = $this->input->post('nama-customer');
        $tanggal_pinjam = $this->input->post('tanggal-pinjam');
        $durasi = $this->input->post('durasi');

        $tanggal_kembali = date('Y-m-d', strtotime("$tanggal_pinjam + $durasi days"));
        
        $data_pinjam = array(
            'kode_pinjam' => $kode_pinjam,
            'id_karyawan' => $id_karyawan,
            'nama_karyawan' => $nama_karyawan,
            'file_arsip' => $file_arsip,
            'nama_customer' => $nama_customer,
            'tgl_pinjam' => $tanggal_pinjam,
            'durasi' => $durasi,
            'tgl_kembali' => $tanggal_kembali,
        );
        
        $this->m_pinjam->update_pinjam($data_pinjam, $kode_pinjam);
        redirect(base_url('pinjam'));
    }

    public function delete_pinjam() {
        $kode_pinjam = $this->input->post('kode-pinjam');
        $this->m_pinjam->delete_pinjam($kode_pinjam);
        redirect(base_url('pinjam'));
    }
}
