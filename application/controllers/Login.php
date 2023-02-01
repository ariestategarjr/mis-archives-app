<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index() {
        $this->load->view('v_login');
    }

    public function log_in() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = array(
            'username' => $username,
            'password' => $password,
        );
        // echo $where['username'] . $where['password'];

        $check = $this->m_login->check_login('admin', $where)->num_rows();
        // echo $check;

        if($check > 0) {
            $data_session = array(
                'name' => $username,
                'status' => "login",
            );
            $this->session->set_userdata($data_session);

            redirect(base_url("dashboard"));
        } else {
            echo "username dan password salah! ";
        }
    }

    public function log_out() {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
