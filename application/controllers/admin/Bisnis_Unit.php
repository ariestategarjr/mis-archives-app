<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bisnis_Unit extends CI_Controller
{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') !== "login") {
            redirect(base_url('login'));
        }
        $this->load->model('m_bisnis_unit');
    }

    public function index() {   
        $data['bisnis_units'] = $this->m_bisnis_unit->get_bisnis_unit('tb_bisnis_unit')->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_bisnis_unit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function add_bisnis_unit() {
        $kode_bisnis_unit = $this->input->post('kode-bisnis-unit');
        $nama_bisnis_unit = $this->input->post('nama-bisnis-unit');

        $data_bisnis_unit = array(
            'kode_bisnis_unit' => $kode_bisnis_unit,
            'nama_bisnis_unit' => $nama_bisnis_unit,
        );

        $this->m_bisnis_unit->insert_bisnis_unit('tb_bisnis_unit', $data_bisnis_unit);
        redirect(base_url('admin/bisnis_unit'));
    }

    public function edit_bisnis_unit() {
        $kode_bisnis_unit = $this->input->post('kode-bisnis-unit');
        $nama_bisnis_unit = $this->input->post('nama-bisnis-unit');

        $data_bisnis_unit = array(
            'nama_bisnis_unit' => $nama_bisnis_unit,
        );

        $this->m_bisnis_unit->update_bisnis_unit('tb_bisnis_unit', $data_bisnis_unit, $kode_bisnis_unit);
        redirect(base_url('admin/bisnis_unit'));
    }

    public function delete_bisnis_unit() {
        $kode_bisnis_unit = $this->input->post('kode-bisnis-unit');

        $this->m_bisnis_unit->delete_bisnis_unit('tb_bisnis_unit', $kode_bisnis_unit);
        redirect(base_url('admin/bisnis_unit'));
    }
}
