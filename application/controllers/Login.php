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

        $result = $this->m_login->get_account('tb_akun', $where); 
        $check = $result->num_rows();
        $datas = $result->result();

        if($check > 0) {
            $data_session = array(
                'name' => $username,
                'status' => "login",
            );
            $this->session->set_userdata($data_session);

            foreach ($datas as $data)
            {
                if($data->status === "admin") {
                    redirect(base_url('administrator/dashboard'));
                } else {
                    redirect(base_url('operator/dashboard'));
                }
            }

            // $data_session = array(
            //     'name' => $username,
            //     'status' => "login",
            // );
            // $this->session->set_userdata($data_session);

            // redirect(base_url('dashboard'));
        } else {
            redirect(base_url('login'));
        }
    }

    public function log_out() {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
