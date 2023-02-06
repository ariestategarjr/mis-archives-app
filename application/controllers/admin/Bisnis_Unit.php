<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bisnis_Unit extends CI_Controller
{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') !== "login") {
            redirect(base_url('login'));
        }
    }

    public function index() {   
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_bisnis_unit');
        $this->load->view('admin/templates/footer');
    }
}
