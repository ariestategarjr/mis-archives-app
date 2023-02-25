<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') !== "login") {
            redirect(base_url('login'));
        }
        $this->load->model('m_arsip');
        $this->load->model('m_pinjam');
    }

    public function index() {   
        $data['arsips'] = $this->m_arsip->get_arsip('tb_arsip')->num_rows();
        $data['pinjams'] = $this->m_pinjam->get_pinjam('tb_pinjam')->num_rows();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_dashboard', $data);
        $this->load->view('templates/footer');
    }
}
