            </div>
            <footer class="py-4 bg-light mt-auto">
              <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                  <div class="text-muted">Copyright &copy; JO - Executive <?= date('Y')?>
                    <br>
                    Made with &#10084; <a href="http://dovadi.my.id" target="_blank">Dovadi77</a>
                  </div>
                </div>
              </div>
            </footer>
            </div>
            <script src="<?= $base_url ?>assets/vendor/jquery/jquery.min.js"></script>
            <script src="<?= $base_url ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="<?= $base_url ?>admin/js/scripts.js"></script>
            <script src="<?= $base_url ?>assets/vendor/bootstrap-toggle/bootstrap-toggle.min.js"></script>
            <script src="<?= $base_url ?>assets/vendor/ckeditor/ckeditor-full.js"></script>
            <script>
              CKEDITOR.replace('depan', {
                removeButtons: 'Save',
                removePlugins: 'Save',
              });
              CKEDITOR.replace('detail', {
                removeButtons: 'Save',
                removePlugins: 'Save',
              });
            </script>
            <script src="<?php echo $base_url ?>admin/js/livechat.js"></script>
            <script src="<?php echo $base_url ?>admin/js/paket.js"></script>
            <script src="<?php echo $base_url ?>admin/js/zones.js"></script>
            </body>

            </html>