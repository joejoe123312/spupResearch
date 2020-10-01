<h1>Welcome to research</h1>
<?php $addProjClassification = base_url() . "AddResearch/projectClassification" ?>
<a href="<?= $addProjClassification ?>"><button>Add Project Classification</button></a>



<?php $addResearch = base_url() . "addResearchProject" ?>
<a href="<?= $addResearch ?>"><button>Add research</button></a>

<?php $home = base_url() . "Dashboard" ?>
<a href="<?= $home ?>"><button>Home</button></a>
<div style="margin-bottom:20px"></div>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Project Title</th>
            <th>Academic Year</th>
            <th>Project Classification</th>
            <th>Researchers</th>
            <th>File</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter = 0 ?>
        <?php foreach ($researchTable->result() as $row) { ?>
            <?php $counter++; ?>
            <tr>
                <td><?= $counter ?></td>
                <td><?= $row->project_title ?></td>
                <td><?= $row->academic_year ?></td>
                <td><?= $this->Research_model->maskProjClassification($row->project_classification_id) ?></td>
                <?php $seeResearchers = base_url() . "AddResearch/seeResearchers/$row->id"; ?>
                <td><a href="<?= $seeResearchers ?>">Researchers</a></td>
                <td><?= $row->filename ?></td>
                <td>
                    <?php
                    $delete = base_url() . "AddResearch/deleteResearch/$row->id";
                    $update = base_url() . "";
                    ?>
                    <a href="<?= $delete ?>"><button>Delete</button></a>
                    <a href="<?= $update ?>"><button>Update</button></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>