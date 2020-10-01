<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<h1>Add New Reserach</h1>
<form action="" method="post">
    <?= validation_errors() ?>
    <label for="">Research Title</label><br>
    <input type="text" name="researchTitle" placeholder="Enter Research Title" autocomplete="off"><br><br>

    <label for="">Academic Year</label><br>
    <input type="text" name="academicYear" placeholder="Add Academic year" autocomplete="off"><br><br>

    <label for="">Number of researchers</label><br>
    <input type="number" name="numberOfResearchers" placeholder="How many research members?" id="numberOfResearchers" autocomplete="off"> <button type="button" id="researchBtn">Enter</button><br><br>

    <!-- Researchers here -->
    <div id="researcher1">
        <label for="">First researcher's name</label><br>
        <input type="text" name="researcher1" placeholder="Enter researcher's name" autocomplete="off"><br><br>
    </div>

    <div id="researcher2">
        <label for="">Second researcher's name</label><br>
        <input type="text" name="researcher2" placeholder="Enter researcher's name" autocomplete="off"><br><br>
    </div>

    <div id="researcher3">
        <label for="">Third researcher's name</label><br>
        <input type="text" name="researcher3" placeholder="Enter researcher's name" autocomplete="off"><br><br>
    </div>

    <div id="researcher4">
        <label for="">Fourth researcher's name</label><br>
        <input type="text" name="researcher4" placeholder="Enter researcher's name" autocomplete="off"><br><br>
    </div>

    <div id="researcher5">
        <label for="">Fifth researcher's name</label><br>
        <input type="text" name="researcher5" placeholder="Enter researcher's name" autocomplete="off"><br><br>
    </div>
    <!-- Researchers here -->

    <label for="">Enter project classification</label><br>
    <select name="projClassification" id=""><br>
        <option value="">Project Classification</option>
        <?php foreach ($projectClassification->result() as $row) { ?>
            <option value="<?= $row->id ?>"><?= $row->name ?></option>
        <?php } ?>
    </select><br><br>

    <label for="">Upload Document</label><br>
    <input type="file" name="file"><br><br>

    <button type="submit" name="submit">Submit</button>
</form>
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