<div class="section-body contain-lg">
    <div class="col-lg-15">
        <center class="style-default-dark">
            <h1 style="padding:20px;font-weight:bold">SPUP RESEARCH ARCHIVER</h1>
        </center>
    </div>
    <!--end .col -->
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
                                <?php $seeResearchers = base_url() . "AddResearch/viewResearchers/$row->id"; ?>
                                <td><a href="<?= $seeResearchers ?>">Researchers</a></td>

                                <td>
                                    <?php $view = base_url() . "PdfViewer?f=$row->filename" ?>
                                    <a href="<?= $view ?>" target="_blank"><button type="button" class="btn ink-reaction btn-raised btn-info btn-sm"><i class="fa fa-eye" style="color: black; font-size: 20px" aria-hidden="true"></i></button></a>
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