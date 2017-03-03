                <!-- footer content -->
                <footer>
                    <!-- <div class="pull-right">
                        Stun CMS <a href="https://estupendo.net">Estupendo</a>
                    </div>
                    <div class="clearfix"></div> -->
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group"></ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>
        <!-- Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- Date and Time -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment-with-locales.min.js"></script>
        <!-- Text Editor -->
        <script src="http://cdn.ckeditor.com/4.5.9/full/ckeditor.js"></script>
        <!-- Edit images -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/0.7.1/cropper.min.js"></script>
        <!-- Datatables-->
        <script src="https://cdn.datatables.net/u/bs/dt-1.10.12,r-2.1.0,sc-1.4.2/datatables.min.js"></script>
        <!-- Alerts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="{{adminInfo.template_url}}/assets/js/progressbar/bootstrap-progressbar.min.js"></script>
        <!-- pace -->
        <script src="{{adminInfo.template_url}}/assets/js/pace/pace.min.js"></script>
        <!-- Form radio -->
        <script src="{{adminInfo.template_url}}/assets/js/icheck/icheck.min.js"></script>
        <!-- Form tags -->
        <script src="{{adminInfo.template_url}}/assets/js/tags/jquery.tagsinput.min.js"></script>
        <!-- Custom js -->
        <script src="{{adminInfo.template_url}}/assets/js/custom.js"></script>
        <!-- Form tvalidation -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.54/jquery.form-validator.min.js" integrity="sha256-5VwOpyg2kEYgLB11mE4s0ViCuoWD6MjmrXeo97UI5O8=" crossorigin="anonymous"></script>
        <script>
          $.validate({
            modules : 'security, date, html5, brazil',
            lang : 'pt'
          });
        </script>
    </body>
</html>
