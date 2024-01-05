<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Repositorio-ICAM</title>
    <link rel="shortcut icon" href="img/Logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="./css/estilos1.css">
    <!-- <link rel="stylesheet" href="./php/buscar.php"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>

<body>
<header>
    <a href="#" class="logo">
        <img src="./img/Logo-removebg-preview (1).png" alt="company logo" class="logo-img">
        <p class="logo-nombre">Colegio ICAM</p>
    </a>
    <nav>
        <a href="#" class="nav-link">Inicio</a>
        <div class="container1">
            <!-- <label for="caja_busqueda">Buscar: </label> -->
            <input type="text1" name="caja_busqueda" id="caja_busqueda" placeholder="Buscar"></input>
            <div class="btn" id="boton">
                <i class="fa fa-search"></i>
            </div>
        </div>
        <a href="#" class="nav-link">Ayuda</a>
    </nav>
</header>
<!--<div class="row">
        <div class="col s8 offset-s2">
            <table>
                <thead>
                    <tr>
                        <th data-filed="id">Id</th>
                        <th data-filed="name">Nombre</th>
                        <th data-filed="name">Nombre cientifico</th>
                        <th data-filed="name">Origen</th>
                        <th data-filed="name">Descripcion</th>
                        <th data-filed="name">Beneficios</th>
                        <th data-filed="name">Imagen</th>
                    </tr>
                </thead>

                <?php
                  require_once('php/conexion.php');
                  $query="SELECT * FROM imagen";
                  $execute=mysqli_query($conexion,$query) or die(mysqli_error($conexion));

                  while($fila=mysqli_fetch_array($execute)){


                ?>

                <tbody>
                    <tr>
                        <td> <?php echo $fila['id']?> </td>
                        <td> <?php echo $fila['nombre']?> </td>
                        <td> <?php echo $fila['nombre_cientifico']?> </td>
                        <td> <?php echo $fila['origen']?> </td>
                        <td> <?php echo $fila['descripcion']?> </td>
                        <td> <?php echo $fila['beneficios']?> </td>
                        <td><img src=" <?php echo substr($fila['ruta'],3) ?> " alt="" width="120"> </td>
                    </tr>
                    
                </tbody>
                <?php
                  }
                ?>

            </table>

        </div>
    </div>-->

<script>
    let vista_preliminar =(event)=>{
        let leer_img =new FileReader();
        let id_img = document.getElementById('img-foto');
        leer_img.onload = ()=>{
            if(leer_img.readyState == 2){
                id_img.src = leer_img.result
            }

        }
        leer_img.readAsDataURL(event.target.files[0])
    }
</script>
<div class="row">
    <div class="col s8 offset-s2">
        <div id="datos" class="table-responsive">
            
        </div>
    </div>
</div>

<script>src="js/jquery.min.js"</script>
<script src="js/funciones.js"></script>
</body>