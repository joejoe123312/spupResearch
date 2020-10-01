<h1>Add Project CLassification</h1>

<form action="" method="post">
    <?= validation_errors("<p>") ?>
    <label for="">Project Classification</label><br>
    <input type="text" name="projClassification" placeholder="Enter name of project classification" autocomplete="off"><br><br>

    <button type="submit">Create</button>
</form>

<?php $back = base_url() . "AddResearch" ?>
<a href="<?= $back ?>"><button>Back</button></a>

<div style="margin-bottom:20px"></div>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Classification name</th>
            <th>Options</th>
        </tr>
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
                    <a href="<?= $delete ?>"><button>Delete</button></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>