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
        $this->load->model('m_customer');
        $this->load->model('m_bisnis_unit');
    }

    public function index() {   
        $data['arsips'] = $this->m_arsip->get_arsip('tb_arsip')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_arsip', $data);
        $this->load->view('templates/footer');
    }

    public function add_arsip_page() {
        $data['customers'] = $this->m_customer->get_customer('tb_customer')->result();
        $data['bisnis_units'] = $this->m_bisnis_unit->get_bisnis_unit('tb_bisnis_unit')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_arsip_add', $data);
        $this->load->view('templates/footer');
    }

    public function edit_arsip_page($kode) {
        $where = array('kode_arsip' => $kode);
        $data['arsip'] = $this->db->get_where('tb_arsip', $where)->row();
        $data['customers'] = $this->m_customer->get_customer('tb_customer')->result();
        $data['bisnis_units'] = $this->m_bisnis_unit->get_bisnis_unit('tb_bisnis_unit')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_arsip_edit', $data);
        $this->load->view('templates/footer');
    }

    public function add_arsip() {
        $kode_arsip = $this->input->post('kode-arsip');
        $nama_customer = $this->input->post('nama-customer');
        $bisnis_unit = $this->input->post('bisnis-unit');
        $tanggal_arsip = $this->input->post('tanggal-arsip');
        $file_arsip = $_FILES['file-arsip']['name'];

        if($file_arsip) {
            $config ['upload_path'] = './upload';
            $config ['allowed_types'] = 'pdf';
            $config['overwrite'] = true;
            $config['max_size'] = 10024;

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('file-arsip')){
                echo "File gagal diupload!";
            } else {
                $file_arsip = $this->upload->data('file_name');
            }
        }
        
        $data_arsip = array(
            'kode_arsip' => $kode_arsip,
            'nama_customer' => $nama_customer,
            'bisnis_unit' => $bisnis_unit,
            'tgl_arsip' => $tanggal_arsip,
            'file_arsip' => $file_arsip,
        );
        
        $this->m_arsip->insert_arsip($data_arsip);
        redirect(base_url('arsip'));
    }

    public function edit_arsip() {
        $kode_arsip = $this->input->post('kode-arsip');
        $data['arsip'] = $this->db->get_where('tb_arsip', array('kode_arsip' => $kode_arsip))->row();

        unlink(FCPATH."/upload/".$data['arsip']->file_arsip);

        $nama_customer = $this->input->post('nama-customer');
        $bisnis_unit = $this->input->post('bisnis-unit');
        $tanggal_arsip = $this->input->post('tanggal-arsip');
        $file_arsip = $_FILES['file-arsip']['name'];

        if($file_arsip) {
            $config ['upload_path'] = './upload';
            $config ['allowed_types'] = 'pdf';
            $config['overwrite'] = true;
            $config['max_size'] = 10024;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('file-arsip')){
                echo "File gagal diupload!";
            } else {
                $file_arsip = $this->upload->data('file_name');
            }
        }
        
        $data_arsip = array(
            'nama_customer' => $nama_customer,
            'bisnis_unit' => $bisnis_unit,
            'tgl_arsip' => $tanggal_arsip,
            'file_arsip' => $file_arsip,
        );
        
        $this->m_arsip->update_arsip($data_arsip, $kode_arsip);
        redirect(base_url('arsip'));
    }

    public function delete_arsip() {
        $kode_arsip = $this->input->post('kode-arsip');
        $data['arsip'] = $this->db->get_where('tb_arsip', array('kode_arsip' => $kode_arsip))->row();

        unlink(FCPATH."/upload/".$data['arsip']->file_arsip);

        $this->m_arsip->delete_arsip($kode_arsip);
        redirect(base_url('arsip'));
    }
    
}
