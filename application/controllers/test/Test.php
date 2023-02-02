<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_test');
    }

    public function index()
    {
        $data['admin'] = $this->m_test->get_admin();
        
        $this->load->view('v_test', $data);
    }
}
