<?php 
require_once("database.php");
require_once("header.php");
?>
        <div id="header-container">
            <h1>Tabela JSON</h1>
        </div>
        <table id="tabela-json"  class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
        </table>
<?php
//echo "<code>".getUsuariosJSON($connection)."</code>";
require_once("footer.php");
?>