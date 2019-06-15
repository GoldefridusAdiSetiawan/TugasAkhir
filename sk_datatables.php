        <script src="datatables/DataTables-1.10.18/js/dataTables.bootstrap.js"></script>
        <script src="datatables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>        
        <script src="datatables/Buttons-1.5.2/js/dataTables.buttons.min.js"></script>
        <script src="datatables/Buttons-1.5.2/js/buttons.flash.min.js"></script>     
        <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>
        <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>     
        <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
        <script src="datatables/Buttons-1.5.2/js/buttons.html5.min.js"></script>
        <script src="datatables/Buttons-1.5.2/js/buttons.print.min.js"></script>
        <script>
            $(document).ready(function() {
                    $('#cobatabel').DataTable( {
                        // scrollY: '300px',
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                    } );
                } );
        </script>