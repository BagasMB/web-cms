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
   <script src="<?= base_url('assets/sweetalert/'); ?>sweetalert2.all.min.js"></script>
   <script>
       const flashData = $("#flash-data").data("flashdata"),
           flash = $("#type-error").data("flashdata");
       if (flashData) {
           swal.fire({
               icon: "success",
               title: "Selamat",
               text: flashData,
               type: "success",
           });
       }
       if (flash) {
           swal.fire({
               icon: "error",
               title: "Gagal Kenapa?",
               text: flash,
           });
       }

       $(document).on("click", "#btn-hapus", function(e) {
           e.preventDefault();
           const href = $(this).attr("href");

           Swal.fire({
               title: "Apakah Anda Yakin?",
               text: "Data Akan DiHapus!",
               icon: "warning",
               showCancelButton: true,
               confirmButtonColor: "#3085d6",
               cancelButtonColor: "#d33",
               confirmButtonText: "Hapus Data!",
           }).then((result) => {
               if (result.isConfirmed) {
                   document.location = href;
               }
           });
       });
   </script>

   </body>

   </html>