<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_customer extends CI_Model
{
    public function select_customer($table) {
        return $this->db->get($table);
    }

    public function get_customer($table) {
        return $this->db->get($table);
    }

    public function insert_customer($table, $data) {
        $this->db->insert($table, $data);
    }

    public function update_customer($table, $data, $id) {
        $this->db->where('id_customer', $id);
        $this->db->update($table, $data);
    }

    public function delete_customer($table, $id) {
        $this->db->where('id_customer', $id);
        $this->db->delete($table);
    } 
}
