<!-- ============================================================== -->
           
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="<?= base_url('assets/')?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="<?= base_url('assets/')?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="<?= base_url('assets/')?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="<?= base_url('assets/')?>assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="<?= base_url('assets/')?>assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="<?= base_url('assets/')?>assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="<?= base_url('assets/')?>assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="<?= base_url('assets/')?>assets/vendor/charts/morris-bundle/morris.js"></script>
    <script src="<?= base_url('assets/')?>assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <script src="<?= base_url('assets/')?>assets/vendor/charts/charts-bundle/chartjs.js"></script>
    <!-- chart c3 js -->
    <script src="<?= base_url('assets/')?>assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="<?= base_url('assets/')?>assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="<?= base_url('assets/')?>assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="<?= base_url('assets/')?>assets/libs/js/dashboard-ecommerce.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/')?>assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets/')?>assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/')?>assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://unpkg.com/@adminkit/core@latest/dist/js/app.js"></script>
    <script type="text/javascript">
      function displaySelectedImage(event, elementId) {
        const selectedImage = document.getElementById(elementId);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }
    
    function displaySelectedImage2(event, elementId1) {
        const selectedImage2 = document.getElementById(elementId1);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage2.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    function displaySelectedImage3(event, elementId3) {
        const selectedImage3 = document.getElementById(elementId3);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage3.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    function displaySelectedImage4(event, elementId4) {
        const selectedImage4 = document.getElementById(elementId4);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage4.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    function displaySelectedImage5(event, elementId5) {
        const selectedImage5 = document.getElementById(elementId5);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage5.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    function displaySelectedImage6(event, elementId6) {
        const selectedImage6 = document.getElementById(elementId6);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage6.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    function displaySelectedImage7(event, elementId7) {
        const selectedImage7 = document.getElementById(elementId7);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage7.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }
    function displaySelectedImage8(event, elementId8) {
        const selectedImage8 = document.getElementById(elementId8);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage8.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    function displaySelectedImage9(event, elementId9) {
        const selectedImage9 = document.getElementById(elementId9);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage9.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }
    function displaySelectedImage10(event, elementId10) {
        const selectedImage10 = document.getElementById(elementId10);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage10.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    function displaySelectedImage11(event, elementId11) {
        const selectedImage11 = document.getElementById(elementId11);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage11.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }
    function displaySelectedImage12(event, elementId12) {
        const selectedImage12 = document.getElementById(elementId12);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage12.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }
    function displaySelectedImage13(event, elementId13) {
        const selectedImage13 = document.getElementById(elementId13);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage13.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }
    </script>
     <script>
      
      $('#summernote').summernote({
        tabsize: 2,
        height: 100
      });
    </script>
</body>
 
</html>