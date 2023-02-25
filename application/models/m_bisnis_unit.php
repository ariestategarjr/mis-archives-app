<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_bisnis_unit extends CI_Model
{
    public function get_bisnis_unit($table) {
        return $this->db->get($table);
    }

    public function insert_bisnis_unit($table, $data) {
        $this->db->insert($table, $data);
    }

    public function update_bisnis_unit($table, $data, $id) {
        $this->db->where('kode_bisnis_unit', $id);
        $this->db->update($table, $data);
    }

    public function delete_bisnis_unit($table, $id) {
        $this->db->where('kode_bisnis_unit', $id);
        $this->db->delete($table);
    } 
}