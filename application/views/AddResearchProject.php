<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class="section-body contain-lg">
<div class="col-lg-15">
<center class="style-default-dark">
<h1 style="padding:20px;font-weight:bold">New Research Project</h1>
</center>
</div>
<!--end .col -->
<div style="margin-bottom:20px"></div>


<div class=" col-md-15">
        <form class="form" action="" method="post">
        <?= validation_errors() ?>                                
        <div class="card style-default-dark">
            <div class="card-head">
                <header>Add New Research Project</header>
            </div>
            <div class="card-body form-inverse">
                <br>
                
                    <div class=" col-md-7">

                    <div class="form-group">
                    
                            <input type="text" class="form-control" name="researchTitle" placeholder="Enter Research Title" autocomplete="off">
                            <label for="Lastname3">Research Title</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="academicYear" placeholder="Add Academic year" autocomplete="off">
                            <label for="Lastname3">Academic Year</label>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="numberOfResearchers" placeholder="How many research members?" id="numberOfResearchers" autocomplete="off">
                            <label for="Lastname3">Research Member</label>
                        </div>
                        </div>
                    
            
                    
                
                
                
            </div>
            <!--end .card-body -->
            <div class="card-actionbar">
                <div class="card-actionbar-row">
                    <button type="submit" class="btn btn-flat btn-default-light ink-reaction">Create
                        account</button>
                </div>
            </div>
        </div>
        <!--end .card -->
        <em class="text-caption">Inversed form</em>
    </form>
</div>