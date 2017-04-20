        </div>
        <!-- /#page-wrapper -->        
    </div>
    <!-- /#wrapper -->
   

    <!-- jQuery -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DatePicker Javascript -->
    <script src="assets/datepicker/datepicker.js"></script>

    <!-- DataTables JavaScript -->
    <script src="assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="assets/vendor/raphael/raphael.min.js"></script>
    <script src="assets/vendor/morrisjs/morris.min.js"></script>
    <script src="assets/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/dist/js/sb-admin-2.js"></script>

    <!-- Bootstrap Form Helpers -->
    <script src="assets/dist/js/bootstrap-formhelpers.js"></script>
    <script src="assets/dist/js/bootstrap-formhelpers.min.js"></script>
    <script src="assets/js/bootstrap-formhelpers-phone.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    <script>
      $(function () {
        $('#datepicker_birth').datepicker({ 
              autoclose: true, 
              todayHighlight: true
        }).datepicker('update', new Date());;
      });
      $(function () {
        $('#datepicker_hire').datepicker({ 
              autoclose: true, 
              todayHighlight: true
        }).datepicker('update', new Date());;
      });     
    </script>
    
</body>

</html>