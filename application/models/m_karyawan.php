<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_karyawan extends CI_Model 
{
    public function get_karyawan($table) {
        return $this->db->order_by('id_karyawan', 'desc')->get($table);
    }

    public function insert_karyawan($table, $data) {
        $this->db->insert($table, $data);
    }

    public function update_karyawan($table, $data, $id) {
        $this->db->where('id_karyawan', $id);
        $this->db->update($table, $data);
    }

    public function delete_karyawan($table, $id) {
        $this->db->where('id_karyawan', $id);
        $this->db->delete($table);
    }
}