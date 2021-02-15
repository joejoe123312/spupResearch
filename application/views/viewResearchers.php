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
                        <th class="sort-alpha">Researcher's name</th>

                    </thead>
                    <tbody>
                        <?php $counter = 0 ?>
                        <?php foreach ($researchersTable->result() as $row) { ?>
                            <?php $counter++; ?>
                            <tr>
                                <td><?= $counter ?></td>
                                <td><?= $row->name ?></td>
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