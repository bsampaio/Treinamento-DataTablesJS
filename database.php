<?php
/*Descomente para usar localmente*/

define("SERVER","localhost");
define("USER","root");
define("PASSWORD", "");
define("DATABASE", "datatables");

$connection = mysqli_connect(SERVER,USER,PASSWORD,DATABASE);

function getUsuarios($connection){
    $usuarios = array();
    $query = "SELECT * FROM usuario";
    
    $result = mysqli_query($connection, $query);
    while($usuario = mysqli_fetch_assoc($result)){
        array_push($usuarios, $usuario);
    }
    return $usuarios;                                    
}

function getUsuariosJSON($connection){
    $usuarios = getUsuarios($connection);
    $recordsTotal = $recordsFiltered = count($usuarios);
    $jsonResponse = '{"draw":0,"recordsTotal":'.$recordsTotal.
        ',"recordsFiltered":'.$recordsFiltered.
        ',"data":'.json_encode($usuarios).'}';
    return $jsonResponse;
}