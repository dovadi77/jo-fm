<?php
include 'asset/header.php' ?>
<div id="layoutSidenav_content">
    <div class="container">
        <h4>Add Admin</h4>
        <sub>Adding more administrator into server</sub>
        <form action="users/add.php" method="post">
            <div class="form-group mt-4">
                <label for="nama-paket">Username :</label>
                <input type="text" name="uname" class="form-control" required>
            </div>
            <div class="form-group mt-4">
                <label for="harga">Password :</label>
                <input type="password" name="pass" class="form-control" required>
            </div>
            <div class="form-group mt-4">
                <label for="harga">Confirm Password :</label>
                <input type="password" name="cpass" class="form-control" required>
            </div>
            <button class="btn btn-lg btn-primary mt-2 btn-block" type="submit" name="add">ADD</button>
        </form>
        <?php include 'asset/footer.php' ?>