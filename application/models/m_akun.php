<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_akun extends CI_Model
{
    public function get_akun($table) {
        return $this->db->get($table);
    }

    // public function find_customer($table, $where) {
    //     return $this->db->get_where($table, $where);
    // }

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