<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') !== "login") {
            redirect(base_url('login'));
        }
        $this->load->model('m_customer');
        $this->load->model('m_karyawan');
        $this->load->model('m_bisnis_unit');
        $this->load->model('m_akun');
    }

    public function index() { 
        $data['customers'] = $this->m_customer->get_customer('tb_customer')->num_rows();
        $data['karyawans'] = $this->m_karyawan->get_karyawan('tb_karyawan')->num_rows();
        $data['bisnis_units'] = $this->m_bisnis_unit->get_bisnis_unit('tb_bisnis_unit')->num_rows();
        
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_dashboard', $data);
        $this->load->view('admin/templates/footer');
    }
}
