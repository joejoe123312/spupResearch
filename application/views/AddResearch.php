<div class="section-body contain-lg">
    <div class="col-lg-12">
        <center class="style-default-dark">
            <h1 style="padding:20px;font-weight:bold">Welcome To Dashboard</h1>
        </center>
    </div>
    <!--end .col -->
</div>

<?php $addProjClassification = base_url() . "AddResearch/projectClassification" ?>
<?php $addResearch = base_url() . "addResearchProject" ?>
<?php $home = base_url() . "Dashboard" ?></a>


<a href="<?= $addProjClassification ?>"><button type="button" class="btn ink-reaction btn-raised btn-primary">Add Project Classification</button></a>
<a href="<?= $addResearch ?>"><button type="button" class="btn ink-reaction btn-raised btn-primary">Add New Research</button></a>
<a href="<?= $home ?>"><button type="button" class="btn ink-reaction btn-raised btn-primary">Home</button></a>
<div style="margin-bottom:20px"></div>

<div class="row">

</div>
<!--end .row -->
<div class="row">
    <!--end .col -->
    <div class="col-lg-12">
        <div class="data table-responsive">
            <table id="datatable1" class="table table-striped table-hover">
                <thead>

                    <th class="sort-numeric">#</th>
                    <th class="sort-alpha">Project Title</th>
                    <th class="sort-alpha">Academic Year</th>
                    <th class="sort-alpha">Project Classification</th>
                    <th class="sort-alpha">Researchers</th>
                    <th class="sort-alpha">File</th>
                    <th>Options</th>

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
                            <td><a href="<?= $seeResearchers ?>" style="color:blue">Researchers</a></td>
                            <td><?= $row->filename ?></td>
                            <td>
                                <?php
                                $delete = base_url() . "AddResearch/deleteResearch/$row->id";
                                $update = base_url() . "";
                                ?>
                                <a href="<?= $delete ?>"><button type="button" class="btn ink-reaction btn-raised btn-danger">DELETE</button></a>
                                <a href="<?= $update ?>"><button type="button" class="btn ink-reaction btn-raised btn-warning">UPDATE</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!--end .table-responsive -->
    </div>
    <!--end .col -->
</div>
<!--end .row -->
<!-- END DATATABLE 1 -->