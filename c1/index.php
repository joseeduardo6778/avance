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

    <link rel="stylesheet" href="./css/estilos.css">

</head>

<body>

<header>
    <a href="#" class="logo">
        <img src="./img/Logo-removebg-preview (1).png" alt="company logo" class="logo-img">
        <p class="logo-nombre">Colegio ICAM</p>
    </a>
    <nav>
        <a href="#" class="nav-link">Inicio</a>
        <a href="#" class="nav-link">Ayuda</a>
    </nav>
</header>

    
    <div class='row'>
        <div class='col l6 offset-l3'>
            <h5 class="grey-text text-darken-1">Insertar datos de la botanica</h5>
            <form action="php/funciones.php" method='POST' enctype='multipart/form-data'>
                <div class="file-field input-field">
                    <div class="btn-small amber darken-1">
                        <span>elige una imagen</span>
                        <input type="file" name="foto" id="foto" onchange="vista_preliminar(event  )">
                    </div>
                    <div class="file-path-wrapper">
                        <input type="text" class="file-path validate">
                    </div>
                </div>
                <div><img src="" alt="" id="img-foto" width=100px heigth=200px></div>

                <div class="grupo">
                    <label for="">Nombre comun</label>
                    <input type="text" name="name" id="name" required><span class="barra"></span>
                </div>
                <div class="grupo">
                    <label for="">Nombre cientifico</label>
                    <input type="text" name="name_cientifico" id="name_cientifico" required><span class="barra"></span>
                </div>
                <div class="grupo">
                    <label for="">Origen</label>
                    <input type="text" name="origen" id="origen" required><span class="barra"></span>
                </div>
                <div class="grupo">
                    <label for="">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" required><span class="barra"></span>
                </div>
                <div class="grupo">
                    <label for="">Beneficios</label>
                    <input type="text" name="beneficios" id="beneficios" required><span class="barra"></span>
                </div>

                
                <div class="input-field">
                    <button type="submit" class="btn-small blue" name="btn-agregar" id="btn-agregar">Agregar Datos</button>

                </div>
            </form> 
        </div>
    </div>

    
</body>

</html>