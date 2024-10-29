<?php
function connectdb() : mysqli {
    $db = mysqli_connect("localhost", "root", "", "bienes_raices");

    if($db) {
        echo "Conectado";
    } else {
        echo "No conectado";
    }
    return $db;
}
?>