<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') !== "login") {
            redirect(base_url('login'));
        }
        $this->load->model('m_customer');
    }

    public function index() {
        $data['customers'] = $this->m_customer->select_customer('tb_customer')->result();

        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/v_customer', $data);
        $this->load->view('administrator/templates/footer');
    }    

    public function add_customer() {
        $id_customer = $this->input->post('id-customer');
        $nik_customer = $this->input->post('nik');
        $nama_customer = $this->input->post('nama-customer');
        $alamat_customer = $this->input->post('alamat');
        $tanggal_lahir_customer = $this->input->post('tanggal-lahir');

        $data_customer = array(
            'id_customer' => $id_customer,
            'nik' => $nik_customer,
            'nama_customer' => $nama_customer,
            'alamat' => $alamat_customer,
            'tanggal_lahir' => $tanggal_lahir_customer,
        );

        $this->m_customer->insert_customer('tb_customer', $data_customer);
        redirect(base_url('administrator/customer'));
    }

    // public function find_customer() {
    //     $data['customer'] = $this->m_customer->find_customer('customer', $where)->result();
    // }

    public function edit_customer() {
        $id_customer = $this->input->post('id-customer');
        
        $nik_customer = $this->input->post('nik');
        $nama_customer = $this->input->post('nama-customer');
        $alamat_customer = $this->input->post('alamat');
        $tanggal_lahir_customer = $this->input->post('tanggal-lahir');

        $data_customer = array(
            'nik' => $nik_customer,
            'nama_customer' => $nama_customer,
            'alamat' => $alamat_customer,
            'tanggal_lahir' => $tanggal_lahir_customer,
        );

        $this->m_customer->update_customer('tb_customer', $data_customer, $id_customer);
        redirect(base_url('administrator/customer'));
    }

    public function delete_customer() {
        $id_customer = $this->input->post('id-customer');

        $this->m_customer->delete_customer('tb_customer', $id_customer);
        redirect(base_url('administrator/customer'));
    }
}
