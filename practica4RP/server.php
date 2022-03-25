<?php
require_once "lib/nusoap.php";
function getPais($datos){
if ($datos == "Pais"){
    return join(",", array)(
        "Mexico",
        "Francia",
        "España",
        "Italia",
        "Canada"));
}
else {
    return "No hay pais";
}

}
$server = new soap_server();
$server-> register("getPais");
if (!isset ($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA =file_file_contents( 'php://input');
    $server->service($HTTP_RAW_POST_DATA);
?>
