<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PdfViewer extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }

    public function index()
    {   
        if (isset($_GET['f'])) {
            $data['fileName'] = $this->input->get('f');
        }else{
            redirect('Guest');
        }

        // $this->load->view('includes/guestHeader');
        $this->load->view('pdfViewer', $data);
        // $this->load->view('includes/guestFooter');
    }
}
