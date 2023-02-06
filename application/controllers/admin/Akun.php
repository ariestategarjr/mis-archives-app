<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') !== "login") {
            redirect(base_url('login'));
        }
        $this->load->model('m_akun');
    }

    public function index() {  
        $data['akuns'] = $this->m_akun->get_akun('tb_akun')->result();
        
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_akun', $data);
        $this->load->view('admin/templates/footer');
    }

    public function add_akun() {
        $id_akun = $this->input->post('id-akun');
        $username = $this->input->post('username-akun');
        $password = $this->input->post('password-akun');
        $status = $this->input->post('status-akun');

        $data_akun = array(
            'id_akun' => $id_akun,
            'username' => $username,
            'password' => $password,
            'status' => $status,
        );

        $this->m_akun->insert_akun('tb_akun', $data_akun);
        redirect(base_url('admin/akun'));
    }

    public function edit_akun() {
        $id_akun = $this->input->post('id-akun');
        $username = $this->input->post('username-akun');
        $password = $this->input->post('password-akun');
        $status = $this->input->post('status-akun');

        $data_akun = array(
            'username' => $username,
            'password' => $password,
            'status' => $status,
        );

        $this->m_akun->update_akun('tb_akun', $data_akun, $id_akun);
        redirect(base_url('admin/akun'));
    }

    public function delete_akun() {
        $id_akun = $this->input->post('id-akun');

        $this->m_akun->delete_akun('tb_akun', $id_akun);
        redirect(base_url('admin/akun'));
    }
}
