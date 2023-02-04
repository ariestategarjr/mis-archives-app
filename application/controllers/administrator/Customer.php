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
        $data['customers'] = $this->m_customer->display_customer('customer')->result();

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

        $this->m_customer->insert_customer('customer', $data_customer);
        redirect(base_url('administrator/customer'));
    }

    public function edit_customer() {
        // $result 

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

        $this->m_customer->update_customer('customer', $data_customer, $data_customer['id_customer']);
        redirect(base_url('administrator/customer'));
    }
}
