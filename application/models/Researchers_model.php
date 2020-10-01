<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Researchers_model extends CI_Model
{
    function insertResearchers($researchersQuantity, $researchersArray, $researchId)
    {

        for ($i = 1; $i <= $researchersQuantity; $i++) {
            $insert['research_id'] = $researchId;
            $insert['name'] = $researchersArray['rs' . $i];
            $this->Main_model->_insert('researchers', $insert);
        }
    }

    function getProjectTitle($researchId)
    {
        $researchTable = $this->Main_model->get_where('research', 'id', $researchId)->row();
        return $researchTable->project_title;
    }
}
