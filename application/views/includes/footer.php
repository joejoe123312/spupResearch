		
       
</div>
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="">
							<span class="text-lg text-bold text-primary ">SPUP&nbsp;RESEARCH</span>
						</a>
					</div>
				</div>
<div id="menubar" class="menubar-inverse  animate">

				<div class="nano has-scrollbar" style="height: 550px;"><div class="nano-content" tabindex="0" style="right: -17px;"><div class="menubar-scroll-panel" style="padding-bottom: 33px;">

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">

						<!-- BEGIN DASHBOARD -->
						<li class="active">
							<a href="">
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Dashboard</span>
							</a>
						</li>
                   
						<li class="gui-folder expanded active">
							<a>
								<div class="gui-icon"><i class="md md-search"></i></div>
								<span class="title">RESEARCH</span>
							</a>
							<!--start submenu -->
							<ul > 
								<?php $addResearchProj = base_url() . "AddResearch" ?>
								<?php $projectClassification = base_url() . "AddResearch/ProjectClassification" ?>
								<?php $addResearchProject = base_url() . "AddResearchProject" ?>

								<li><a href="<?= $addResearchProj ?>"><span class="title">Archived Research</span></a></li>
								<li><a href="<?= $addResearchProject ?>"><span class="title">Add Research</span></a></li>
								<li><a href="<?= $projectClassification ?>"><span class="title">Add Project Classification</span></a></li>

						
							</ul><!--end /submenu -->
						</li>
						<!-- END DASHBOARD -->

						<!-- BEGIN EMAIL -->
						
					</ul><!--end .main-menu -->
					<!-- END MAIN MENU -->

					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright © 2020</span> <strong>Joel John Centeno</strong>
						</small>
					</div>
				</div></div><div class="nano-pane" style="display: none;"><div class="nano-slider" style="height: 534px; transform: translate(0px, 0px);"></div></div></div><!--end .menubar-scroll-panel-->
			</div>

</div>        



        <!-- BEGIN JAVASCRIPT -->	
    	<script src="<?= base_url() ?>assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/spin.js/spin.min.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/DataTables/jquery.dataTables.min.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="<?= base_url() ?>assets/js/core/source/App.js"></script>
		<script src="<?= base_url() ?>assets/js/core/source/AppNavigation.js"></script>
		<script src="<?= base_url() ?>assets/js/core/source/AppOffcanvas.js"></script>
		<script src="<?= base_url() ?>assets/js/core/source/AppCard.js"></script>
		<script src="<?= base_url() ?>assets/js/core/source/AppForm.js"></script>
		<script src="<?= base_url() ?>assets/js/core/source/AppNavSearch.js"></script>
		<script src="<?= base_url() ?>assets/js/core/source/AppVendor.js"></script>
		<script src="<?= base_url() ?>assets/js/core/demo/Demo.js"></script>
		<script src="<?= base_url() ?>assets/js/core/demo/DemoTableDynamic.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/dropzone/dropzone.min.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/typeahead/typeahead.bundle.min.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/jquery-ui/jquery-ui.min.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/select2/select2.min.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/multi-select/jquery.multi-select.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/inputmask/jquery.inputmask.bundle.min.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/moment/moment.min.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
		<script src="<?= base_url() ?>assets/js/libs/toastr/toastr.js"></script>
		<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
		<!-- END JAVASCRIPT -->
        	</body>
</html>

