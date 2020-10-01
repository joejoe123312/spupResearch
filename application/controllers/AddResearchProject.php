<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AddResearchProject extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->model('Researchers_model');
    }

    public function index()
    {
        //notification
        $this->Main_model->alertPromt('Project Added Succesfully', 'projectAdded');
        $this->Main_model->alertPromt('Must Enter a Researcher', 'invalidResearcher');

        //get project classification 
        $data['projectClassification'] = $this->Main_model->get('project_classification', 'id');

        //manage form validations
        if (isset($_POST['submit'])) {
            $researchersQuantity = $this->input->post('numberOfResearchers');

            //validate the form acordingly
            switch ($researchersQuantity) {
                case 1:
                    $this->form_validation->set_rules('researcher1', 'First Researcher', 'required');
                    break;

                case 2:
                    $this->form_validation->set_rules('researcher1', 'First Researcher', 'required');
                    $this->form_validation->set_rules('researcher2', 'Second Researcher', 'required');
                    break;

                case 3:
                    $this->form_validation->set_rules('researcher1', 'First Researcher', 'required');
                    $this->form_validation->set_rules('researcher2', 'Second Researcher', 'required');
                    $this->form_validation->set_rules('researcher3', 'Third Researcher', 'required');
                    break;

                case 4:
                    $this->form_validation->set_rules('researcher1', 'First Researcher', 'required');
                    $this->form_validation->set_rules('researcher2', 'Second Researcher', 'required');
                    $this->form_validation->set_rules('researcher3', 'Third Researcher', 'required');
                    $this->form_validation->set_rules('researcher4', 'Fourth Researcher', 'required');
                    break;

                case 5:
                    $this->form_validation->set_rules('researcher1', 'First Researcher', 'required');
                    $this->form_validation->set_rules('researcher2', 'Second Researcher', 'required');
                    $this->form_validation->set_rules('researcher3', 'Third Researcher', 'required');
                    $this->form_validation->set_rules('researcher4', 'Fourth Researcher', 'required');
                    $this->form_validation->set_rules('researcher5', 'Fifth Researcher', 'required');
                    break;

                default:

                    //notify and redirect
                    $this->session->set_userdata('invalidResearcher', 1);
                    redirect("addResearchProject");
                    break;
            }
        }
        $this->form_validation->set_rules('researchTitle', 'Research Title', 'required');
        $this->form_validation->set_rules('academicYear', 'Academic Year', 'required');
        $this->form_validation->set_rules('projClassification', 'Project Classification', 'required');
        if ($this->form_validation->run()) {
            $insert['project_title'] = $this->input->post('researchTitle');
            $insert['academic_year'] = $this->input->post('academicYear');
            $insert['project_classification_id'] = $this->input->post('projClassification');
            //insert name of the project file
            $researchId = $this->Main_model->_insert('research', $insert);

            //get all of the researchers
            $rs['rs1'] = $this->input->post('researcher1');
            $rs['rs2'] = $this->input->post('researcher2');
            $rs['rs3'] = $this->input->post('researcher3');
            $rs['rs4'] = $this->input->post('researcher4');
            $rs['rs5'] = $this->input->post('researcher5');
            $this->Researchers_model->insertResearchers($researchersQuantity, $rs, $researchId);


            //notify and redirect
            $this->session->set_userdata('projectAdded', 1);
            redirect("AddResearchProject");
        }



        $this->load->view('AddResearchProject', $data);
    }
}
