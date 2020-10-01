<h1>See Researchers</h1>
<span>Project Title <strong><?= $projectTitle ?></strong></span>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Researcher's name</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter = 0 ?>
        <?php foreach ($researchersTable->result() as $row) { ?>
            <?php $counter++ ?>
            <tr>
                <td><?= $counter ?></td>
                <td><?= $row->name; ?></td>
                <td>
                    <?php
                    $update = base_url() . "";
                    $delete = base_url() . "";
                    ?>
                    <a href="<?= $update ?>"><button>Update</button></a>
                    <a href="<?= $delete ?>"><button>Delete</button></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>