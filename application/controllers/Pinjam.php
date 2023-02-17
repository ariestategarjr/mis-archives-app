<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pinjam extends CI_Controller
{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') !== "login") {
            redirect(base_url('login'));
        }
        $this->load->model('m_pinjam');
        $this->load->model('m_karyawan');
        $this->load->model('m_arsip');
    }

    public function index() {   
        $data['pinjams'] = $this->m_pinjam->get_pinjam('tb_pinjam')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_pinjam', $data);
        $this->load->view('templates/footer');
    }

    public function add_pinjam_page() {
        $data['karyawans'] = $this->m_karyawan->select_karyawan('tb_karyawan')->result();
        $data['arsips'] = $this->m_arsip->get_arsip('tb_arsip')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_pinjam_add', $data);
        $this->load->view('templates/footer');
    }

//     public function edit_arsip_page($kode) {
//         $where = array('kode_arsip' => $kode);
//         $data['arsip'] = $this->db->get_where('tb_arsip', $where)->row();
//         $data['customers'] = $this->m_customer->select_customer('tb_customer')->result();
//         $data['bisnis_units'] = $this->m_bisnis_unit->get_bisnis_unit('tb_bisnis_unit')->result();

//         $this->load->view('templates/header');
//         $this->load->view('templates/sidebar');
//         $this->load->view('v_arsip_edit', $data);
//         $this->load->view('templates/footer');
//     }

//     public function add_arsip() {
//         $kode_arsip = $this->input->post('kode-arsip');
//         $nama_customer = $this->input->post('nama-customer');
//         $bisnis_unit = $this->input->post('bisnis-unit');
//         $tanggal_arsip = $this->input->post('tanggal-arsip');
//         $file_arsip = $_FILES['file-arsip']['name'];

//         if($file_arsip) {
//             $config ['upload_path'] = './file_upload';
//             $config ['allowed_types'] = 'pdf';

//             $this->load->library('upload', $config);
//             if(!$this->upload->do_upload('file-arsip')){
//                 echo "File gagal diupload!";
//             } else {
//                 $file_arsip = $this->upload->data('file_name');
//             }
//         }
        
//         $data_arsip = array(
//             'kode_arsip' => $kode_arsip,
//             'nama_customer' => $nama_customer,
//             'bisnis_unit' => $bisnis_unit,
//             'tgl_arsip' => $tanggal_arsip,
//             'file_arsip' => $file_arsip,
//         );
        
//         $this->m_arsip->insert_arsip($data_arsip);
//         redirect(base_url('arsip'));
//     }

//     public function edit_arsip() {
//         $kode_arsip = $this->input->post('kode-arsip');

//         $nama_customer = $this->input->post('nama-customer');
//         $bisnis_unit = $this->input->post('bisnis-unit');
//         $tanggal_arsip = $this->input->post('tanggal-arsip');
//         $file_arsip = $_FILES['file-arsip']['name'];

//         if($file_arsip) {
//             $config ['upload_path'] = './file_upload';
//             $config ['allowed_types'] = 'pdf';

//             $this->load->library('upload', $config);
//             if(!$this->upload->do_upload('file-arsip')){
//                 echo "File gagal diupload!";
//             } else {
//                 $file_arsip = $this->upload->data('file_name');
//             }
//         }
        
//         $data_arsip = array(
//             'nama_customer' => $nama_customer,
//             'bisnis_unit' => $bisnis_unit,
//             'tgl_arsip' => $tanggal_arsip,
//             'file_arsip' => $file_arsip,
//         );
        
//         $this->m_arsip->update_arsip($data_arsip, $kode_arsip);
//         redirect(base_url('arsip'));
//     }

//     public function delete_arsip() {
//         $kode_arsip = $this->input->post('kode-arsip');
//         // echo $kode_arsip;
//         $this->m_arsip->delete_arsip($kode_arsip);
//         redirect(base_url('arsip'));
//     }
}
