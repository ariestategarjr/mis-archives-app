<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_akun extends CI_Model
{
    public function get_akun($table) {
        return $this->db->order_by('id_akun', 'desc')->get($table);
    }

    public function insert_akun($table, $data) {
        $this->db->insert($table, $data);
    }

    public function update_akun($table, $data, $id) {
        $this->db->where('id_akun', $id);
        $this->db->update($table, $data);
    }

    public function delete_akun($table, $id) {
        $this->db->where('id_akun', $id);
        $this->db->delete($table);
    } 
}