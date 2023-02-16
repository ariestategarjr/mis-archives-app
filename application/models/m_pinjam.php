<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pinjam extends CI_Model
{
    public function get_pinjam($table) {
        return $this->db->get($table);
    }

    // public function find_customer($table, $where) {
    //     return $this->db->get_where($table, $where);
    // }

    public function insert_pinjam($data) {
        $this->db->insert('tb_pinjam', $data);
        // return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function update_pinjam($data, $id) {
        $this->db->where('kode_pinjam', $id);
        $this->db->update('tb_pinjam', $data);
    }

    public function delete_pinjam($id) {
        $this->db->where('kode_pinjam', $id);
        $this->db->delete('tb_pinjam');
    } 
}