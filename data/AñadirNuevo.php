<?php

require_once('database.php');

$titulo = $_POST['TituloTxt'] ;
$Precio = $_POST['PrecioTxt'] ;
$descripcion = $_POST['DescripcionTxt'] ;
$Habitaciones = $_POST['HabitacionesTxt'] ;
$Estacionamiento = $_POST['EstacionamientoTxt'];



$stmt = $db->prepare('INSERT INTO departamentos (id,titulo,precio,descripcion,habitaciones,estacionamiento) VALUES(null,?,?,?,?,?)');
$stmt->bindParam(1,$titulo);
$stmt->bindParam(2,$Precio);
$stmt->bindParam(3,$descripcion);
$stmt->bindParam(4,$Habitaciones);
$stmt->bindParam(5,$Estacionamiento);
$stmt->execute();


function insertaNombre($titulo, $Precio,$descripcion,$Habitaciones, $Estacionamiento,$db){
    $stmt = $db->prepare('INSERT INTO departamentos (id,titulo,precio,descripcion,habitaciones,estacionamiento) VALUES(null,?,?,?,?,?)');
    $stmt->bindParam($titulo, $Precio,$descripcion, $Habitaciones, $Estacionamiento);
    return $stmt->execute();
}
if(!empty($stmt)){
    foreach($stmt as $key => $a){
        if(!insertaNombre($titulo, $Precio,$descripcion,$Habitaciones,$Estacionamiento,$db)){
            $errores[] = $key;
        }
    }
}

if(empty($errores)){
    echo json_encode(['respuesta' =>true,'mensaje'=>'se insertaron los datos correctamente']);
  
}else{
    echo json_encode(['respuesta' =>true,'mensaje'=>'no se insertaron los datos correctamente']);
  
}

?>