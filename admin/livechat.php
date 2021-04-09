<?php include 'asset/header.php';?>
<div id="layoutSidenav_content">
  <div class="container">
    <h3 class="mt-4">Livechat</h3>
    <p class="mt-4">Untuk menghidupkan dan mematikan fitur livechat.</p>
    <?php 
        $data=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM livechat")); 
        ?>
    <form action="livechat/proses.php" method="POST">
      <div class="onoffswitch">
        <input type="checkbox" name="blabla" class="onoffswitch-checkbox" id="myonoffswitch"
          <?php if($data['status']=='true'){echo "checked";} ?>>
        <label class="onoffswitch-label" for="myonoffswitch">
          <span class="onoffswitch-inner"></span>
          <span class="onoffswitch-switch"></span>
        </label>
      </div>
      <div id="console-event"></div>
      <div class="form-group">
        <label for="syntax">Link Livechat Tawk.to :</label>
        <textarea name="syntax" id="syntax" rows="7" class="form-control"><?=($data['syntax']) ?></textarea>
      </div>
      <input type="submit" value="UPDATE" class="btn btn-lg btn-primary rounded-lg">
    </form>
    <?php include 'asset/footer.php'?>