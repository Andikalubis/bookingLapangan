<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $data = array(
            'title' => 'Booking',
        );
        
        $data['contents'] = $this->load->view('dashboard/pages/booking', $data, TRUE);
        $this->load->view('dashboard/layout/templates', $data);
    }
}
