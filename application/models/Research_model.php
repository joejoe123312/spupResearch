<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Research_model extends CI_Model
{
    function maskProjClassification($classificationId)
    {
        $classificationTable = $this->Main_model->get_where('project_classification', 'id', $classificationId)->row();
        $name = $classificationTable->name;
        return $name;
    }

    public function fileUpload($redirect)
    {
        $name       = $_FILES['file']['name'];
        $temp_name  = $_FILES['file']['tmp_name'];
        $error = $_FILES['file']['error'];
        $fileExt = explode('.', $name);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('odt', 'docx', 'pdf');

        //test if file is allowed
        if (in_array($fileActualExt, $allowed)) {
            //check if the file uploading has no error
            if ($error === 0) {
                //upload file

                //create uniqid
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;

                //create file destination
                $fileDestination = "documents/" . $fileNameNew;

                //note for linux operating systems. you must change the file
                //permission of the upload folder

                //function that actually moves the file
                move_uploaded_file($temp_name, $fileDestination);

                //notify and redirect
                $this->session->set_userdata('fileUploaded', 1);
            } else {
                $this->session->set_userdata('fileError', 1);
                redirect($redirect);
            }
        } else {
            $this->session->set_userdata('fileNotAllowed', 1);
            redirect($redirect);
        }

        //return new filename 
        return $fileNameNew;
    }
}
