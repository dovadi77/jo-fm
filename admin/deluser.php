<?php include 'asset/header.php'?>
<div id="layoutSidenav_content">
    <div class="container">
    <h4 class="mt-4">Delete Admin</h4>
    <sub>Delete administrator in the server</sub>
    <form action="users/del.php" method="post">
            <div class="form-group mt-4">
                <label for="select-user">Select User :</label>
                <select class="form-control" name='uname'>
                <?php
                $query = "SELECT username from users";
                $sql = mysqli_query($con, $query);
                $stat ="";
                if($sql->num_rows > 1){
                    while($data = mysqli_fetch_array($sql)){
                        ?>
                        <option value="<?php echo $data['username']; ?>">
                        <?php echo $data['username'];?> 
                        </option>
                    <?php }
                     }else{$stat = "disabled"; echo "<option>Only Left 1 User Cannot Select</option>";}
                    ?>
                    </select>
            </div>
            <button class="btn btn-lg btn-primary mt-2 btn-block" type="submit"  name="delete" <?php echo $stat ?> >DELETE</button>
    </form>
<?php include 'asset/footer.php' ?>