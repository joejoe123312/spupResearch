<h1>Are you sure you want to delete this research?</h1>
<span>Project Title: <strong><?= $researchTable->project_title ?></strong></span><br>
<span>Academic Year: <strong><?= $researchTable->academic_year ?></strong></span><br>
<span>Project Classification: <strong><?= $this->Research_model->maskProjClassification($researchTable->project_classification_id) ?></strong></span><br>
<span>File name: <strong><?= $researchTable->filename ?></strong></span><br><br>

<?php
$back = base_url() . "AddResearch";
$delete = base_url() . "AddResearch/deleteResearch/$researchId?confirm=1";
?>

<a href="<?= $back ?>"><button>Back</button></a>
<a href="<?= $delete ?>"><button>Delete</button></a>