<div class="section-body contain-lg">
<div class="col-lg-12">
    <center class="style-default-dark">		
    <h1 style="padding:20px;font-weight:bold">Add New Project Classification</h1>	</center>							
</div>

<div class="col-lg-offset-0 col-md-12">
								<form class="form" action="" method="post">
                                        <?= validation_errors("<p>") ?>
									<div class="card">
										<div class="card-head style-primary">
											<header>Add Here</header>
										</div>
										<div class="card-body">
											
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<input type="text" class="form-control" name="projClassification" autocomplete="off">
														<label>Enter a New Project Classification</label>
													</div>
												</div>
												
											</div>
                                        </div>  
										<!--end .card-body -->
										<div class="card-actionbar">
											<div class="card-actionbar-row">
												<button type="submit" class="btn btn-flat btn-primary ink-reaction">Create</button>
											</div>
										</div>
									</div>
                                    <!--end .card -->
 <div class="row">
    <!--end .col -->
    <div class="col-lg-12">
        <div class="data table-responsive">
            <table id="datatable1" class="table table-striped table-hover">
                <thead>
                        <th class="sort-numeric">#</th>
                        <th class="sort-alpha">Classification Name</th>
                        <th >Options</th>
                </thead>
                <tbody>
                <?php $counter = 0 ?>
                <?php foreach ($classificationTable->result() as $row) { ?>
                    <?php $counter++; ?>

                    <tr>
                        <td><?= $counter ?></td>
                        <td><?= $row->name ?></td>
                        <td>
                            <?php $delete = base_url() . "AddResearch/deleteClassification/$row->id" ?>
                                <a href="<?=$delete ?>"><button type="button" class="btn ink-reaction btn-raised btn-danger">DELETE</button></a>
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

									<em class="text-caption">Copyright © 2020 <strong>Joel John Centeno & Joshua Ramirez</strong></em>
								</form>
							</div>