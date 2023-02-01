<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_test extends CI_Model
{
    public function get_admin()
    {
        return $this->db->get('admin')->result_array();
    }
}
