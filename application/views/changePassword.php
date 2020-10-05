<h1>Welcome to change password</h1>
<form action="" method="post">
    <?= validation_errors("<p>"); ?>
    <label for="">Current password</label><br>
    <input type="text" name="currentPassword"><br><br>

    <label for="">New password</label><br>
    <input type="text" name="newPassword"><br><br>

    <label for="">Confirm password</label><br>
    <input type="text" name="confirmPassword"><br><br>

    <button type="submit">Submit</button>
</form>