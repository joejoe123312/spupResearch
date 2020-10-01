<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AddResearch extends CI_Controller
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
        //notifications
        $this->Main_model->alertPromt('Research Deleted Successfully', 'researchDeleted');

        $data['researchTable'] = $this->Main_model->get('research', 'id');
        $this->load->view('includes/header');
        $this->load->view('AddResearch', $data);
        $this->load->view('includes/footer');
    }

    function projectClassification()
    {
        //notifications
        $this->Main_model->alertPromt('Project Classification added successfully', 'projAdded');
        $this->Main_model->alertPromt('Project Classification Deleted', 'clasiDelete');

        $this->form_validation->set_rules('projClassification', 'Project Classification', 'required');
        if ($this->form_validation->run()) {
            $projClassificationName = $this->input->post('projClassification');

            //insert the new project classification in the database
            $insert['name'] = $projClassificationName;
            $this->Main_model->_insert('project_classification', $insert);

            //redirect and notify
            $this->session->set_userdata('projAdded', 1);
            redirect("AddResearch/projectClassification");
        }

        //get the list of classifications
        $data['classificationTable'] = $this->Main_model->get('project_classification', 'id');
        $this->load->view('projectClassification', $data);

    }

    function deleteResearch()
    {
        $researchId = $this->uri->segment(3);

        //perform deletion
        if (isset($_GET['confirm'])) {
            $this->Main_model->_delete('research', 'id', $researchId);

            //notify and redirect
            $this->session->set_userdata('researchDeleted', 1);
            redirect("AddResearch");
        }

        //get the research data
        $data['researchTable'] = $this->Main_model->get_where('research', 'id', $researchId)->row();
        $data['researchId'] = $researchId;


        $this->load->view("deleteResearch", $data);
    }

    function deleteClassification()
    {
        $classificationId = $this->uri->segment(3);

        //perform deletion
        $this->Main_model->_delete('project_classification', 'id', $classificationId);

        //notify and redirect
        $this->session->set_userdata('clasiDelete', 1);
        redirect("AddResearch/projectClassification");
    }

    function seeResearchers()
    {
        $researchId = $this->uri->segment(3);

        $data['researchersTable'] = $this->Main_model->get_where('researchers', 'research_id', $researchId);
        $data['projectTitle'] = $this->Researchers_model->getProjectTitle($researchId);

        $this->load->view('seeResearchers', $data);
    }
}
