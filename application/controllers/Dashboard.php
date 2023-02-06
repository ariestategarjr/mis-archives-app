<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') !== "login") {
            redirect(base_url('login'));
        }
    }

    public function index() {   
        $this->load->view('operator/templates/header');
        $this->load->view('operator/templates/sidebar');
        $this->load->view('operator/v_dashboard');
        $this->load->view('operator/templates/footer');
    }
}