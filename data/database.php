<?php
$db = new PDO('mysql:host=localhost; dbname=inmobiliaria', 'diego', '123456');
if(!$db){
    echo "Error al conectar la base de datos";
    exit;
}
?>