<?php

  $server='localhost';
  $user='root';
  $pass='';
  $bd='c1';
  $salida="";
  

  $conexion=mysqli_connect($server,$user,$pass,$bd);

  $query = "SELECT * FROM imagen ORDER By id";
  if(isset($_POST['consulta'])){
    $q = $conexion->real_escape_string($_POST['consulta']);
    $query = "SELECT id, nombre, nombre_cientifico, origen, descripcion, beneficios, ruta FROM imagen WHERE nombre 
    LIKE '%".$q."%' OR nombre LIKE '%".$q."%' OR nombre_cientifico LIKE '%".$q."%'";
  }

  $resultado = $conexion->query($query);
  if($resultado->num_rows > 0){
   
    
    $salida.="<table border=1>
                <thead>
                    <tr> 
                       <td><font size=4 face=Times New Roman color=#348F50><i><b>Id</b></i></font></td>
                       <td><font size=4 face=Times New Roman color=#348F50><i><b>Nombre</b></i></font></td>
                       <td><font size=4 face=Times New Roman color=#348F50><i><b>Nombre cientifico</b></i></font></td>
                       <td><font size=4 face=Times New Roman color=#348F50><i><b>Origen</b></i></font></td>
                       <td><font size=4 face=Times New Roman color=#348F50><i><b>Descripcion</b></i></font></td>
                       <td><font size=4 face=Times New Roman color=#348F50><i><b>Beneficios</b></i></font></td>
                       <td><font size=4 face=Times New Roman color=#348F50><i><b>Imagen</b></i></font></td>
                    </tr>
                </thead>
                <tbody>";
    while($fila = $resultado->fetch_assoc()){
        $salida.="<tr>
                <td><font size=3 face=Georgia>".$fila['id']."</font></td>
                <td><font size=3 face=Georgia>".$fila['nombre']."</font></td>
                <td><font size=3 face=Georgia>".$fila['nombre_cientifico']."</font></td>
                <td><font size=3 face=Georgia>".$fila['origen']."</font></td>
                <td><font size=3 face=Georgia>".$fila['descripcion']."</font></td>
                <td><font size=3 face=Georgia>".$fila['beneficios']."</font></td>
                <td><font size=3 face=Georgia><img src=".substr($fila['ruta'],3)." width=100></font></td>
            </tr>"; 
    }

    $salida.="</tbody></table>";
  }else{
    $salida.= "No hay datos :(";
  }

  echo $salida;
  $conexion->close();
  
?>