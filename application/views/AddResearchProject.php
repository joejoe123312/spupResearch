<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class="section-body contain-lg">
    <div class="col-lg-15">
        <center class="style-default-dark">
            <h1 style="padding:20px;font-weight:bold">New Research Project</h1>
        </center>
    </div>
<<<<<<< HEAD
    <!--end .col -->
=======

>>>>>>> 5639ef47e1f06bdee7d2d3130bf47b321a563933


    <div class=" col-md-15">
        <form class="form" action="" method="post" enctype="multipart/form-data">

            <?= validation_errors("<div class='section-body contain-lg'> <strong><p class='toast-error' style='color: white'> </p></div>") ?>

            <div class="card">
                <div class="card-head style-primary">
                    <header>Add Research Project</header>
                </div>
                <div class="card-body"> <br>

                    <div class=" col-md-15 ">

                        <div class="form-group">

                            <input type="text" class="form-control" name="researchTitle" placeholder="Enter Research Title" autocomplete="off">
                            <label for="Lastname3">Research Title</label>

                            <div class="form-group">
                                <input type="text" class="form-control" name="academicYear" placeholder="Add Academic year" autocomplete="off">
                                <label for="Lastname3">Academic Year</label>
                            </div>
                            <div class="form-group">
                                <input type="number" style="color:black" class="form-control" name="numberOfResearchers" placeholder="How many research members?" id="numberOfResearchers" autocomplete="off">
                                <label for="Lastname3">Research Member</label>
                            </div>
                            <button type="button" id="researchBtn" class="btn ink-reaction btn-raised btn-primary pull-right"> Enter</button></a>
                            <br><br>
                            <!-- Researcher Starts Here -->
                            <div id="researcher1">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="researcher1" placeholder="Enter Researcher's name" autocomplete="off">
                                    <label for="Lastname3">First Researcher</label>
                                </div>
                            </div>
                            <div id="researcher2">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="researcher2" placeholder="Enter Researcher's name" autocomplete="off">
                                    <label for="Lastname3">Second Researcher</label>
                                </div>
                            </div>
                            <div id="researcher3">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="researcher3" placeholder="Enter Researcher's name" autocomplete="off">
                                    <label for="Lastname3">Third Researcher</label>
                                </div>
                            </div>
                            <div id="researcher4">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="researcher4" placeholder="Enter Researcher's name" autocomplete="off">
                                    <label for="Lastname3">Fourth Researcher</label>
                                </div>
                            </div>
                            <div id="researcher5">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="researcher5" placeholder="Enter Researcher's name" autocomplete="off">
                                    <label for="Lastname3">Fifth Researcher</label>
                                </div>
                            </div>
                            <!-- Ends Here -->
                            <div class="form-group">
                                <select id="" name="projClassification" class="form-control">
                                    <option value="">Project Classification</option>
                                    <?php foreach ($projectClassification->result() as $row) { ?>
                                        <option value="<?= $row->id ?>"><?= $row->name ?></option>
                                    <?php } ?>

                                </select>
                                <label for="select1">Select Classification</label>
                            </div>


                            <div class=" col-md-4 ">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input" id="customFileLang" lang="en">
                                        <label class="custom-file-label" for="customFileLang">Upload Archived File</label>
                                    </div>
                                </div>

                            </div>
                            <!--end .card-body -->
                            <div class="card-actionbar">
                                <div class="card-actionbar-row">
                                    <button type="submit" name="submit" class="btn btn-flat btn-default-dark ink-reaction"> Submit Project</button>
                                </div>
                            </div>
                        </div>
                        <!--end .card -->
                        <em class="text-caption">Add Research Projects</em>
        </form>
    </div>


    <!-- Start Script-->
    <?php $url = base_url() . ""; ?>
    <script>
        $(document).ready(function() {

            //hide all of the researchers input first
            function hideInput() {
                $("#researcher1").hide();
                $("#researcher2").hide();
                $("#researcher3").hide();
                $("#researcher4").hide();
                $("#researcher5").hide();
            }

            hideInput();


            $("#researchBtn").click(function() {
                var researchers = $("#numberOfResearchers").val();

                //if the user does not put any number
                if (researchers == '') {
                    alert('Invalid input!');
                }

                if (researchers == 1) {
                    hideInput();
                    $("#researcher1").fadeIn(1000);

                } else if (researchers == 2) {
                    hideInput();
                    $("#researcher1").fadeIn(1000);
                    $("#researcher2").fadeIn(1000);

                } else if (researchers == 3) {
                    hideInput();
                    $("#researcher1").fadeIn(1000);
                    $("#researcher2").fadeIn(1000);
                    $("#researcher3").fadeIn(1000);

                } else if (researchers == 4) {
                    hideInput();
                    $("#researcher1").fadeIn(1000);
                    $("#researcher2").fadeIn(1000);
                    $("#researcher3").fadeIn(1000);
                    $("#researcher4").fadeIn(1000);

                } else if (researchers == 5) {
                    hideInput();
                    $("#researcher1").fadeIn(1000);
                    $("#researcher2").fadeIn(1000);
                    $("#researcher3").fadeIn(1000);
                    $("#researcher4").fadeIn(1000);
                    $("#researcher5").fadeIn(1000);
                } else {
                    alert('Invalid Input!');
                }
            });
        });
    </script>
    <!-- End Script -->