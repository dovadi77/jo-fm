<?php include 'asset/header.php';?>
<div id="layoutSidenav_content">
  <div class="container">
    <h3 class="mt-4">Zones</h3>
    <p class="mt-4">Untuk menghidupkan dan mematikan setiap zona combo maupun fastnet.</p>
    <?php
        $data = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `zone`"));
        ?>
    <form>
      <label for="zona-combo">Zona Combo : </label>
      <div class="onoffswitch">
        <input type="checkbox" name="zona-combo" class="onoffswitch-checkbox" id="myonoffswitch-combo" <?php if ($data['combo'] == 'true') {
                                                                                                                    echo "checked";
                                                                                                                } ?>>
        <label class="onoffswitch-label" for="myonoffswitch-combo">
          <span class="onoffswitch-inner"></span>
          <span class="onoffswitch-switch"></span>
        </label>
      </div>
      <br>
      <label for="zona-fastnet">Zona Fastnet : </label>
      <div class="onoffswitch">
        <input type="checkbox" name="zona-fastnet" class="onoffswitch-checkbox" id="myonoffswitch-fastnet"
          <?php if ($data['fastnet'] == 'true') {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
        <label class="onoffswitch-label" for="myonoffswitch-fastnet">
          <span class="onoffswitch-inner"></span>
          <span class="onoffswitch-switch"></span>
        </label>
      </div>
    </form>
    <?php include 'asset/footer.php' ?>