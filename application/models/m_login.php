<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    public function get_account($table, $where) {
        return $this->db->get_where($table, $where);
    }
    // public function display_account($table) {
    //     return $this->db->get($table);
    // }
}
