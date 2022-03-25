<?php
require_once "lib/nusoap.php";
$cliente = new nusoap_client("http://localhost/practica4RP/cliente.php");
$error = $cliente->getError();
if ($error){
    echo "<h2>Constructor error</h2pre>" . $error . "</pre";
}
$result = $cliente->call("getPais", array("datos" => "Pais"));
if ($cliente->fault){   
    echo "h2>Faullt</h2><pre>";
    print_r($result);
    echo "</pre>";
}
else {
    $error = $cliente->getError();
    if ($error){
        echo "<h2>Error</h2><pre>" . $error . "</pre>";

    }
    else{
        echo "<h2>Pais</h2><pre>";
        echo $result;
        echo "</pre>";
    }
}
?>