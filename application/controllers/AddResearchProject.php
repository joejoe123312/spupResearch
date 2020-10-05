<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AddResearchProject extends CI_Controller
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
        //notification
        $this->Main_model->alertPromt('Project Added Succesfully', 'projectAdded');
        $this->Main_model->alertPromt('Must Enter a Researcher', 'invalidResearcher');

        //Upload notifications
        $this->Main_model->alertPromt('File not allowed', 'fileNotAllowed');
        $this->Main_model->alertPromt('Please try again', 'fileError');
        $this->Main_model->alertPromt('File uploaded successfully', 'fileUploaded');
        $this->Main_model->alertPromt('Document File needed', 'noFile');

        //if there are no projectClassification redirect the page
        $classificationTable = $this->Main_model->get('project_classification', 'id');
        if (count($classificationTable->result_array()) == 0) {
            $this->session->set_userdata('noClassifications', 1);
            redirect("AddResearch/ProjectClassification");
        }

        //get project classification 
        $data['projectClassification'] = $this->Main_model->get('project_classification', 'id');

        //manage form validations
        if (isset($_POST['submit'])) {
            //trap: dont let form submission unless user inputs a document file
            if ($_FILES['file']['name'] ==  "") {
                $this->session->set_userdata('noFile', 1);

                redirect("AddResearchProject");
            }

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
        //$this->form_validation->set_rules('file', 'Document', 'required');
        if ($this->form_validation->run()) {
            $insert['project_title'] = $this->input->post('researchTitle');
            $insert['academic_year'] = $this->input->post('academicYear');
            $insert['project_classification_id'] = $this->input->post('projClassification');

            //file management: insert name of the project file
            $file = $_FILES['file'];

            $fileName = $this->Research_model->fileUpload('AddResearchProject');

            //include the filename into the database
            $insert['filename'] = $fileName;

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

        $this->load->view('includes/header');
        $this->load->view('AddResearchProject', $data);
        $this->load->view('includes/footer');
    }
}
