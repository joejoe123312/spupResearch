<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->model('Research_model');
        $this->load->model('Researchers_model');
    }

    public function index()
    {
        $data['researchTable'] = $this->Main_model->get('research', 'id');
        $this->load->view('includes/guestHeader');
        $this->load->view('guestDashboard', $data);
        $this->load->view('includes/guestFooter');
    }
}
