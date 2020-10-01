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
}
