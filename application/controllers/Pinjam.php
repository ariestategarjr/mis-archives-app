<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pinjam extends CI_Controller
{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') !== "login") {
            redirect(base_url('login'));
        }
    }

    public function index() {   
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_pinjam');
        $this->load->view('templates/footer');
    }
}
