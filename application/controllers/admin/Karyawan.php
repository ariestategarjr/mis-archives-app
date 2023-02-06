<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') !== "login") {
            redirect(base_url('login'));
        }
        $this->load->model('m_karyawan');
    }

    public function index() {   
        $data['karyawans'] = $this->m_karyawan->select_karyawan('tb_karyawan')->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_karyawan', $data);
        $this->load->view('admin/templates/footer');
    }

    public function add_karyawan() {
        $id_karyawan = $this->input->post('id-karyawan');
        $nama_karyawan = $this->input->post('nama-karyawan');
        $jabatan = $this->input->post('jabatan');

        $data_karyawan = array(
            'id_karyawan' => $id_karyawan,
            'nama_karyawan' => $nama_karyawan,
            'jabatan' => $jabatan,
        );

        $this->m_karyawan->insert_karyawan('tb_karyawan', $data_karyawan);
        redirect(base_url('admin/karyawan'));
    }

    public function edit_karyawan() {
        $id_karyawan = $this->input->post('id-karyawan');

        $nama_karyawan = $this->input->post('nama-karyawan');
        $jabatan = $this->input->post('jabatan');

        $data_karyawan = array(
            'nama_karyawan' => $nama_karyawan,
            'jabatan' => $jabatan,
        );

        $this->m_karyawan->update_karyawan('tb_karyawan', $data_karyawan, $id_karyawan);
        redirect(base_url('admin/karyawan'));
    }


}
