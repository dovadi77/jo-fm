<?php include 'asset/header.php'?>
<div id="layoutSidenav_content">
    <div class="container">
    <h4>Change Password Admin</h4>
    <sub>Changing password current administrator</sub>
    <form action="users/change.php" method="post">
            <div class="form-group mt-4">
                <label for="new-password">New Password :</label>
                <input type="password" name="pass" class="form-control" required>
            </div>
            <div class="form-group mt-4">
                <label for="confirm-password">Confirm New Password :</label>
                <input type="password" name="cpass" class="form-control" required>
                <input type="text" name="uname" class="form-control" value="<?php echo $_SESSION['username']?>" hidden>
            </div>
            <button class="btn btn-lg btn-primary mt-2 btn-block" type="submit" name="change">CHANGE</button>
    </form>
<?php include 'asset/footer.php' ?>