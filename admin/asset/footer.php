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
            <script src="<?= $base_url ?>admin/js/paket.js"></script>
            <script src="<?= $base_url ?>admin/js/livechat.js"></script>
            <script src="<?= $base_url ?>admin/js/zones.js"></script>
            <script src="<?= $base_url ?>assets/vendor/ckeditor5/build/ckeditor.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.3/cropper.js"></script>
            <script src="<?= $base_url ?>admin/js/photo.js"></script>
            <script>
              ClassicEditor
                .create(document.querySelector('#depan'), {
                  toolbar: {
                    items: [
                      'heading',
                      '|',
                      'bold',
                      'italic',
                      'link',
                      'bulletedList',
                      'numberedList',
                      'alignment',
                      'strikethrough',
                      'subscript',
                      'superscript',
                      'underline',
                      'todoList',
                      'fontColor',
                      'fontSize',
                      'fontBackgroundColor',
                      'fontFamily',
                      'highlight',
                      '|',
                      'outdent',
                      'indent',
                      '|',
                      'imageUpload',
                      'blockQuote',
                      'htmlEmbed',
                      'specialCharacters',
                      'insertTable',
                      'mediaEmbed',
                      'undo',
                      'redo',
                      'CKFinder',
                      'code',
                      'codeBlock'
                    ]
                  },
                  language: 'en',
                  image: {
                    toolbar: [
                      'imageTextAlternative',
                      'imageStyle:full',
                      'imageStyle:side',
                      'linkImage'
                    ]
                  },
                  table: {
                    contentToolbar: [
                      'tableColumn',
                      'tableRow',
                      'mergeTableCells'
                    ]
                  },
                  licenseKey: '',


                })
                .then(editor => {
                  window.editor = editor;
                })
                .catch(error => {
                  console.error('Oops, something went wrong!');
                  console.error(
                    'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
                  );
                  console.warn('Build id: e1jomiizqou4-qgxwpagkaghx');
                  console.error(error);
                });
              ClassicEditor
                .create(document.querySelector('#detail'), {
                  toolbar: {
                    items: [
                      'heading',
                      '|',
                      'bold',
                      'italic',
                      'link',
                      'bulletedList',
                      'numberedList',
                      'alignment',
                      'strikethrough',
                      'subscript',
                      'superscript',
                      'underline',
                      'todoList',
                      'fontColor',
                      'fontSize',
                      'fontBackgroundColor',
                      'fontFamily',
                      'highlight',
                      '|',
                      'outdent',
                      'indent',
                      '|',
                      'imageUpload',
                      'blockQuote',
                      'htmlEmbed',
                      'specialCharacters',
                      'insertTable',
                      'mediaEmbed',
                      'undo',
                      'redo',
                      'CKFinder',
                      'code',
                      'codeBlock'
                    ]
                  },
                  language: 'en',
                  image: {
                    toolbar: [
                      'imageTextAlternative',
                      'imageStyle:full',
                      'imageStyle:side',
                      'linkImage'
                    ]
                  },
                  table: {
                    contentToolbar: [
                      'tableColumn',
                      'tableRow',
                      'mergeTableCells'
                    ]
                  },
                  licenseKey: '',


                })
                .then(editor => {
                  window.editor = editor;
                })
                .catch(error => {
                  console.error('Oops, something went wrong!');
                  console.error(
                    'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
                  );
                  console.warn('Build id: e1jomiizqou4-qgxwpagkaghx');
                  console.error(error);
                });
            </script>
            </body>

            </html>