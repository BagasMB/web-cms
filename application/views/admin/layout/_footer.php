   <!-- Footer -->
   <footer class="footer mt-auto">
       <div class="copyright bg-white">
           <p>
               &copy; <span id="copy-year"></span> Copyright by <a class="text-primary" href="https://github.com/BagasMB" target="_blank">BagasMB</a>.
           </p>
       </div>
       <script>
           var d = new Date();
           var year = d.getFullYear();
           document.getElementById("copy-year").innerHTML = year;
       </script>
   </footer>

   </div>
   </div>

   <!-- Card Offcanvas -->
   <div class="card card-offcanvas" id="contact-off">
       <div class="card-header">
           <h2>Contacts</h2>
           <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
       </div>
       <div class="card-body">

           <div class="mb-4">
               <input type="text" class="form-control form-control-lg form-control-secondary rounded-0" placeholder="Search contacts...">
           </div>

           <div class="media media-sm">
               <div class="media-sm-wrapper">
                   <a href="user-profile.html">
                       <img src="images/user/user-sm-01.jpg" alt="User Image">
                       <span class="active bg-primary"></span>
                   </a>
               </div>
               <div class="media-body">
                   <a href="user-profile.html">
                       <span class="title">Selena Wagner</span>
                       <span class="discribe">Designer</span>
                   </a>
               </div>
           </div>

           <div class="media media-sm">
               <div class="media-sm-wrapper">
                   <a href="user-profile.html">
                       <img src="images/user/user-sm-02.jpg" alt="User Image">
                       <span class="active bg-primary"></span>
                   </a>
               </div>
               <div class="media-body">
                   <a href="user-profile.html">
                       <span class="title">Walter Reuter</span>
                       <span>Developer</span>
                   </a>
               </div>
           </div>

           <div class="media media-sm">
               <div class="media-sm-wrapper">
                   <a href="user-profile.html">
                       <img src="images/user/user-sm-03.jpg" alt="User Image">
                   </a>
               </div>
               <div class="media-body">
                   <a href="user-profile.html">
                       <span class="title">Larissa Gebhardt</span>
                       <span>Cyber Punk</span>
                   </a>
               </div>
           </div>

           <div class="media media-sm">
               <div class="media-sm-wrapper">
                   <a href="user-profile.html">
                       <img src="images/user/user-sm-04.jpg" alt="User Image">
                   </a>

               </div>
               <div class="media-body">
                   <a href="user-profile.html">
                       <span class="title">Albrecht Straub</span>
                       <span>Photographer</span>
                   </a>
               </div>
           </div>

           <div class="media media-sm">
               <div class="media-sm-wrapper">
                   <a href="user-profile.html">
                       <img src="images/user/user-sm-05.jpg" alt="User Image">
                       <span class="active bg-danger"></span>
                   </a>
               </div>
               <div class="media-body">
                   <a href="user-profile.html">
                       <span class="title">Leopold Ebert</span>
                       <span>Fashion Designer</span>
                   </a>
               </div>
           </div>

           <div class="media media-sm">
               <div class="media-sm-wrapper">
                   <a href="user-profile.html">
                       <img src="images/user/user-sm-06.jpg" alt="User Image">
                       <span class="active bg-primary"></span>
                   </a>
               </div>
               <div class="media-body">
                   <a href="user-profile.html">
                       <span class="title">Selena Wagner</span>
                       <span>Photographer</span>
                   </a>
               </div>
           </div>

       </div>
   </div>




   <script src="<?= base_url('assets/mono/'); ?>plugins/jquery/jquery.min.js"></script>
   <script src="<?= base_url('assets/mono/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url('assets/mono/'); ?>plugins/simplebar/simplebar.min.js"></script>
   <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>



   <script src="<?= base_url('assets/mono/'); ?>plugins/apexcharts/apexcharts.js"></script>



   <script src="<?= base_url('assets/mono/'); ?>plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js">
   </script>



   <script src="<?= base_url('assets/mono/'); ?>plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
   <script src="<?= base_url('assets/mono/'); ?>plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
   <script src="<?= base_url('assets/mono/'); ?>plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>



   <script src="<?= base_url('assets/mono/'); ?>plugins/daterangepicker/moment.min.js"></script>
   <script src="<?= base_url('assets/mono/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
   <script>
       jQuery(document).ready(function() {
           jQuery('input[name="dateRange"]').daterangepicker({
               autoUpdateInput: false,
               singleDatePicker: true,
               locale: {
                   cancelLabel: 'Clear'
               }
           });
           jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
               jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
           });
           jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
               jQuery(this).val('');
           });
       });
   </script>
   <script>
       $('#ngilang').delay('slow').slideDown('slow').delay(4000).slideUp(600)
   </script>

   <script>
       tinymce.init({
           selector: 'textarea',
           plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
           toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
       });
   </script>


   <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>



   <script src="<?= base_url('assets/mono/'); ?>plugins/toaster/toastr.min.js"></script>



   <script src="<?= base_url('assets/mono/'); ?>js/mono.js"></script>
   <script src="<?= base_url('assets/mono/'); ?>js/chart.js"></script>
   <script src="<?= base_url('assets/mono/'); ?>js/map.js"></script>
   <script src="<?= base_url('assets/mono/'); ?>js/custom.js"></script>


   </body>

   </html>