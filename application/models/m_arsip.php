<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_arsip extends CI_Model
{
    public function get_arsip($table) {
        return $this->db->order_by('kode_arsip', 'desc')->get($table);
    }

    public function insert_arsip($data) {
        $this->db->insert('tb_arsip', $data);
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