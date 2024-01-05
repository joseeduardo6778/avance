<?php
require_once('conexion.php');

if(isset($_REQUEST['btn-agregar'])){

    $name = trim($_POST['name']);
    $name_cientifico = trim($_POST['name_cientifico']);
    $origen = trim($_POST['origen']);
    $descripcion = trim($_POST['descripcion']);
    $beneficios = trim($_POST['beneficios']);


    $nombre_imagen=$_FILES['foto']['name'];
    $temporal=$_FILES['foto']['tmp_name'];
    $carpeta='../img';
    $ruta=$carpeta.'/'.$nombre_imagen;
    move_uploaded_file($temporal,$carpeta.'/'. $nombre_imagen);

    $query="INSERT INTO imagen (nombre,nombre_cientifico,origen,descripcion,beneficios,ruta) VALUES('$name','$name_cientifico','$origen','$descripcion','$beneficios','$ruta')";
    $execute= mysqli_query($conexion,$query) or die(mysqli_error ($conexion));

    if($execute){
        header("Location: ../index.php");
    }else{
        echo "hubo un error";
    }
}



?>