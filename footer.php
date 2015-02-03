        <!-- jQuery -->
        <script type="text/javascript" charset="utf8" src="js/jquery-1.11.2.js"></script>

        <!-- DataTables -->
        <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>

        <!-- DataTables Integration with Bootstrap -->
        <script type="text/javascript" charset="utf8" src="js/dataTables.bootstrap.js"></script>

        <script type="text/javascript">
            $(document).ready( function () {
                $('#example').DataTable();
            } );
        </script>
        <script type="text/javascript">
            $(document).ready( function () {
                $('#tabela-json').DataTable( {
                    "processing": true,
                    "ajax": "getUsuarioJSON.php",
                    "columns": [
                        { "data": "id" },
                        { "data": "nome" },
                        { "data": "email" }
                    ]
                });
            } );
        </script>
        <script>
            $(document).ready( function () {
                var table = $('#tabela-json-ajax').DataTable( {
                    "ajax": "getUsuarioJSON.php",
                    "columns": [
                        { "data": "id" },
                        { "data": "nome" },
                        { "data": "email" }
                    ]
                });
            
            
            setInterval( function () {
                table.ajax.reload();
            }, 2500 );
          });
        </script>
        <script type="text/javascript">
            $(document).ready( function () {
                $('#tabela-server-side').DataTable( {
                    "processing": true,
                    "serverSide": true,
                    "ajax": "server-side.php",
                    "columns": [
                        { "data": "id" },
                        { "data": "nome" },
                        { "data": "email" }
                    ]
                });
            } );
        </script>
    </div>
</body>
    
</html>