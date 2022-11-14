
<?php

session_start();

if(!isset($_SESSION['usuario'])) {
    echo '
    
    <script>
        alert("Por favor debes iniciar sesión");
        window.location = "index.php";
    </script>
    
    ';
    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/styleparques.css">
    <script src="js/crudrutina.js"></script>
    <title>Parques de calistenia</title>
</head>
<body>


    <!--Barra de navegación-->

    <header>
        <nav id="header-nav">
            <a id="login-button" href = "sessionDestroy.php">Cerrar sesión</a>
            <ul class="ul-flex-row">
                <li><a href="index.php">Inicio / Home</a></li>
                <li><a href="rutinas.php">Mis Rutinas</a> </li>
                <li><a href="ejercicios.html">Ejercicios</a> </li>
                <li class="QS"><a>Quienes Somos</a>
                    <ul class="ul-dropdown">
                        <li><a href="historia.html">Historia</a></li>
                        <li><a href="equipo.html">Equipo</a></li>
                    </ul>
                </li>
                <li><a href="contacto.html">Contacto</a> </li>
            </ul>
        </nav>
    </header>


    <!--Contenido general de la página-->
    <main>
        <div class="main-div">
            <div class="filter"> <!--div de los filtros-->
                <div class="div-input-filter">
                    <h2>RUTINA DE EJERCICIOS</h2>

                    <!--Toda la logica correspondiente al crud-->

                    <h3>Agregar Ejercicio</h3>
                    <!--Agregar ejercicio-->
                    <div>
                        <form action="" id="agregar-ejercicio-form"></form>
                        <div>
                            <input class="input-crud" name="ejercicio" type="text" form="agregar-ejercicio-form">
                            <label for="ejercicio">nombre del ejercicio</label>
                        </div>
                        <div>
                            <input class="input-crud" name="cantrepeticiones" type="text" form="agregar-ejercicio-form">
                            <label for="cantrepeticiones">cantidad repeticiones</label>
                        </div>
                        <div>
                            <input class="input-crud" name="cantseries" type="text" form="agregar-ejercicio-form">
                            <label for="cantseries">cantidad de series</label>
                        </div>
                        <div>
                            <textarea class="input-crud" name="comentario" id="comentario" form="agregar-ejercicio-form"></textarea>
                            <label for="comentario">comentario del ejercicio</label>
                        </div>
                        <div>
                            <input type="submit" form="agregar-ejercicio-form" value="agregar">
                        </div>
                    </div>
                    <h3>Eliminar Ejercicio</h3>
                    <!--eliminar ejercicio-->
                    <div>
                        <form action="" id="eliminar-ejercicio-form" method="post"></form>
                        <div>
                            <input class="input-crud"  type="text" name="eliminar-ejercicio" form="eliminar-ejercicio-form">
                            <label for="eliminar-ejercicio">Id del ejercicio a eliminar</label>
                        </div>
                        <div>
                            <input type="submit" form="eliminar-ejercicio-form" value="eliminar">
                        </div>
                    </div>

                    <!--Editar ejercicio-->
                    <h3>Editar Ejercicio</h3>
                    <div>
                        <form action="" id="editar-ejercicio-form"></form>
                        <div>
                            <input class="input-crud" name="idejercicio" type="text" form="editar-ejercicio-form">
                            <label for="idejercicio">Id del ejercicio</label>
                        </div>
                        <div>
                            <input class="input-crud" name="ejercicio-editar" type="text" form="editar-ejercicio-form">
                            <label for="ejercicio-editar">Nombre nuevo</label>
                        </div>
                        <div>
                            <input class="input-crud" name="cantrepeticiones-editar" type="text" form="editar-ejercicio-form">
                            <label for="cantrepeticiones-editar">Nueva cantidad repeticiones</label>
                        </div>
                        <div>
                            <input class="input-crud" name="cantseries-editar" type="text" form="editar-ejercicio-form">
                            <label for="cantseries-editar">Nueva cantidad de series</label>
                        </div>
                        <div>
                            <textarea class="input-crud" name="comentario-editar" id="comentario-editar" form="editar-ejercicio-form"></textarea>
                            <label for="comentario-editar">Nuevo comentario</label>
                        </div>
                        <div>
                            <input type="submit" form="editar-ejercicio-form" value="editar">
                        </div>
                    </div>

                    <!--mostrar ejercicios-->
                    <h3>Mostrar/Recargar Ejercicios</h3>
                    <div>
                        <div>
                            <button id="mostrar-rutina">Mostrar Todo</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="park"> <!--div de los parques a mostrar-->
                <div class="grid-div-park"><!--debe haber un div padre para cada publicacion-->
                    <div class="park-img">
                        <!--aqui se agregará la imagen correspondiente al parque-->
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!--footer de la página-->
    <footer>
        <nav id="footer-nav">
            <ul class="footer-ul">
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="contacto.html">contacto</a></li>
            </ul>
        </nav>
    </footer>


    <!--Script de javascript al final del body-->
    <script src="js/variablesrutinas.js"></script>
</body>
</html>