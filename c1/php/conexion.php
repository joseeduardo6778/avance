<?php
$server='localhost';
$user='root';
$pass='';
$bd='c1';

$conexion=mysqli_connect($server,$user,$pass,$bd);

if($conexion){
    echo "conexion exitosa";
}
?>