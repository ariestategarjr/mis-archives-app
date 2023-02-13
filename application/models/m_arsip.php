<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_arsip extends CI_Model
{
    public function get_arsip($table) {
        return $this->db->get($table);
    }

    // public function find_customer($table, $where) {
    //     return $this->db->get_where($table, $where);
    // }

    public function insert_arsip($data) {
        $this->db->insert('tb_arsip', $data);
        // return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function update_arsip($data, $id) {
        $this->db->where('kode_arsip', $id);
        $this->db->update('tb_arsip', $data);
    }

    public function delete_arsip($id) {
        $this->db->where('kode_arsip', $id);
        $this->db->delete('tb_arsip');
    } 
}