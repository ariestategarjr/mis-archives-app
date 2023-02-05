<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_customer extends CI_Model
{
    public function select_customer($table) {
        return $this->db->get($table);
    }

    // public function find_customer($table, $where) {
    //     return $this->db->get_where($table, $where);
    // }

    public function insert_customer($table, $data) {
        $this->db->insert($table, $data);
    }

    public function update_customer($table, $data, $id) {
        $this->db->where('id_customer', $id);
        $this->db->update($table, $data);
        // return TRUE;
    }
}
