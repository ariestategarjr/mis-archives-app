<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arsip extends CI_Controller
{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') !== "login") {
            redirect(base_url('login'));
        }
        $this->load->model('m_arsip');
    }

    public function index() {   
        $data['arsips'] = $this->m_arsip->get_arsip('tb_arsip')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_arsip', $data);
        $this->load->view('templates/footer');
    }
}
