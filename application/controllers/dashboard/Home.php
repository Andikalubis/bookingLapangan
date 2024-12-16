<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $data['contents'] = $this->load->view('dashboard/pages/home',null, TRUE);
        $this->load->view('dashboard/layout/templates', $data);
    }
}
