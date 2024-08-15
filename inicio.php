<?php
require 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $cellphone = $_POST['cellphone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO usuarios (Username,Name,Surname,Cellphone,Email,Pass) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = $mysqli->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssssss", $username, $name, $surname, $cellphone, $email, $password);
        try {
            $stmt->execute();
            echo("Usuario registrado");
            header("Location: inicio.php");

        } catch (mysqli_sql_exception $e) {
            echo("Error: "+$e);
            header("Location: inicio.php#contenido4");
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Schibsted+Grotesk:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/favicon.ico">
    <link rel="stylesheet" href="CSS/styleindex.css">
    <title>Mí Pagina Web</title>
</head>

<body>
    <script src="JS/showcontent.js"></script>
    <div class="NavBar">
        <ul style="list-style: none;">
            <div class="Animated">
                <li><a href="javascript:void(0);" onclick="Content('Content3')"><img src="Images/Menu.png" width="30"
                            height="30"></a></li>
                <li><a href="javascript:void(0);" onclick="Content('Content1')"><img src="Images/About me.png"
                            width="30" height="30"></a></li>
                <li><a href="javascript:void(0);" onclick="Content('Content2')"><img src="Images/Skills.png" width="30"
                            height="30"></a></li>
                <li><a href="javascript:void(0);" onclick="Content('Content4')"><img src="Images/build.png" width="30"
                            height="30"></a></li>
                <li><a href="Ucad.html"><img src="Images/School.png"width="30"
                            height="30"></a></li>
                <li><a href="Bandas.html"><img src="Images/Music.png"width="30"
                            height="30"></a></li>
            </div>
        </ul>
    </div>

    <div class="Name_Box">
        <h2>Gustavo Pavel Hernández Solís</h2>
        <a href="https://www.facebook.com/?locale=es_LA"><img src="Images/Facebook.png" width="20" height="20"></a>
        <a href="https://www.instagram.com"><img src="Images/Instagram.png" width="20" height="20"></a>
        <a href="https://mx.linkedin.com"> <img src="Images/Linkedin.png" width="20" height="20"></a>
        <h2>Telefono</h2>
        <p>+52 5574671872 <img src="Images/Call.png" id="Call" width="20" height="20"></p>
    </div>

    <div id="Content3" style="display:block;">
        <h2>Galería</h2>
        <br>
        <div class="gallery">
            <a target="_blank" href="Images/Kyoto.jpg">
                <img src="Images/Kyoto.jpg" alt="Kyoto" width="600" height="400">
            </a>
            <div class="desc">Japón-kyoto</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="Images/Moscú.jpg">
                <img src="Images/Moscú.jpg" alt="Moscú" width="600" height="400">
            </a>
            <div class="desc">Moscú-Rusia</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="Images/Roma.jpg">
                <img src="Images/Roma.jpg" alt="Roma" width="600" height="400">
            </a>
            <div class="desc">Roma-Italia</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="Images/Shanghái.jpg">
                <img src="Images/Shanghái.jpg" alt="Shanghái" width="600" height="400">
            </a>
            <div class="desc">China-Shanghái</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="Images/Copenhague.jpg">
                <img src="Images/Copenhague.jpg" alt="Copenhague" width="600" height="400">
            </a>
            <div class="desc">Dinamarca-Copenhague</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="Images/Barcelona.jpg">
                <img src="Images/Barcelona.jpg" alt="Barcelona" width="600" height="400">
            </a>
            <div class="desc">España-Barcelona</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="Images/York.jpg">
                <img src="Images/York.jpg" alt="York" width="600" height="400">
            </a>
            <div class="desc">EE.UU-Nueva York</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="Images/Berlin.jpg">
                <img src="Images/Berlin.jpg" alt="Berlín" width="600" height="400">
            </a>
            <div class="desc">Alemania-Berlín</div>
        </div>
        
        <div class="gallery">
            <a target="_blank" href="CSS/videos/Japón.mp4">
                <video src="CSS/videos/Japón.mp4" alt="Tokyo" width="600" height="400"></video>
            </a>
            <div class="desc">Japón-Tokyo</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="CSS/videos/moscú.mp4">
                <video src="CSS/videos/moscú.mp4" alt="Moscú" width="600" height="400"></video>
            </a>
            <div class="desc">Rusia-Moscú</div>
        </div>
        
        <div class="gallery">
            <a target="_blank" href="CSS/videos/Roma.mp4">
                <video src="CSS/videos/Roma.mp4" alt="Roma" width="600" height="400"></video>
            </a>
            <div class="desc">Italia-Roma</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="CSS/videos/Shanghai.mp4">
                <video src="CSS/videos/Shanghai.mp4" alt="Shanghai" width="600" height="400"></video>
            </a>
            <div class="desc">China-Shanghái</div>
        </div>
    </div>

    <div id="Content1" style="display:none;">
        <h2>Acerca de mí</h2>
        <p id="Datos">21 años / Pavel / Ing. en sistemas</p>
        <p>
            Hola, si estás viendo esto es porque seguramente te dio algo de curiosidad sobre mí y conocerme un poco. Mi
            nombre es <strong>Gustavo Pavel Hernández Solís</strong>, actualmente soy estudiante en el <strong>último
                cuatrimestre de ingeniería en sistemas.</strong> Estoy muy orgulloso de cursar esta carrera y de
            ejercerla, ya que desde joven me ha interesado mucho la tecnología y la ciencia detrás de ella. Con el paso
            del tiempo, he reafirmado estas creencias al explorar y adentrarme cada vez más en el mundo de la
            informática y la computación. No descuido mis otros hobbies, como los videojuegos, ver películas de drama,
            ciencia ficción, fantasía o de corte hístorico. Además, otro aspecto importante en mi vida es la música, ya
            que también soy practicante de un instrumento: la guitarra.
        </p>
        <br>
        <a href="Bandas.html" style="text-decoration: none;">Si te gustaría saber de mis bandas favoritas puedes dar click aquí</a>
        <h3><img src="Images/College.png" width="45" height="45">Escuela</h3>
        <br>
        <img src="Images/UCAD.png" width="100" height="50" id="img3">
        <ul style="list-style: none;">
            <li>
                <p>Actualmente cursando el noveno cuatrimestre</p>
            </li>
        </ul>
        <h3><img src="Images/Computer.png" width="45" height="45" id="img1"> Experiencia Laboral</h3>
        <p><img src="Images/Hills.png" width="40" height="40" id="img2"> Colgate (División de Hills)<strong
                id="highlight1"> Duración 6 meses</strong></p>
        <ul style="list-style: none;">
            <li>
                <p>- Diseñé y desarrollé un script para filtrar información de múltiples bases de datos.</p>
            </li>
            <li>
                <p>- Contribuí al equipo de IT en la optimización de procesos y la gestión de datos</p>
            </li>
        </ul>
    
    </div>
    <div id="Content2" style="display:none;">
        <h3>Habilidades Interpersonales</h3>
        <br>
        <ul style="list-style-type: thumbs;">
            <li>
                <p>Proactivo</p>
            </li>
            <li>
                <p>Me gusta aprender</p>
            </li>
            <li>
                <p>Resiliente</p>
            </li>
            <li>
                <p>Empático</p>
            </li>
            <li>
                <p>Pensamiento Crítico</p>
            </li>
            <li>
                <p>Buen Orador</p>
            </li>
        </ul>
        <br>
        <h3>Habilidades Técnicas </h3>
        <br>
        <ul style="list-style-type: tools;">
            <li>
                <p>HTML <img src="Images/Html.png" width="20" height="20"></p>
            </li>
            <li>
                <p>CSS <img src="Images/css.png" width="20" height="20"></p>
            </li>
            <li>
                <p>Java Script <img src="Images/JavaScript.png" width="20" height="20"></p>
            </li>
            <li>
                <p>Python <img src="Images/python.png" width="20" height="20"></p>
            </li>
            <li>
                <p>Java <img src="Images/Java.png" width="20" height="20"></p>
            </li>
            <li>
                <p>PHP <img src="Images/php.png" width="20" height="20"></p>
            </li>
            <li>
                <p>MYSQL <img src="Images/Mysql.png" width="20" height="20"></p>
            </li>
            <li>
                <p>Excel <img src="Images/excel.png" width="20" height="20"></p>
            </li>
            <li>
                <p>Google Workspace(Sheets,Docs,Drive,Gmail)<img src="Images/Workspace.png" width="20" height="20"></p>
            </li>
        </ul>
        <br>
        <h3>Idiomas</h3>
        <br>
        <ol reversed>
            <li>
                <p>Ingles <img src="Images/ingles.png" width="20" height="20"></p>
            </li>
            <li>
                <p>Español <img src="Images/espanol.png" width="20" height="20"></p>
            </li>
        </ol>
        <br>
        <h3>Link a mis proyectos realizados</h3>
        <br>
         <a style="color:white; text-decoration: none;"href="https://github.com/GusPavel2002/Portafolio-de-Actividades/commits?author=GusPavel2002"><img src="Images/github.svg" style="align-items:center;" width="40" height="40">Proyectos de Muestra</a>
    </div>
    <div id="Content4" style="display:none;">
        <h3>Demostración técnica de interfaz de bases de datos<h3>
                <form action="inicio.php" method="POST">
                    <label for="username">Usuario</label>
                    <input type="text" name="username" placeholder="User1234" required>

                    <label for="password">Contraseña</label>
                    <input type="password" name="password" placeholder="******" required>

                    <label for="name">Nombre</label>
                    <input type="text" name="name" required>

                    <label for="surname">Apellidos</label>
                    <input type="text" name="surname" required>

                    <label for="cellphone">Teléfono</label>
                    <input type="text" name="cellphone" placeholder="5566778899" required>

                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="example@mail.com" required>

                    <button class="Espacio" type="submit">Registro</button>
                    <br>
                    <button onclick="document.location='Vtabla.php'">Observar en una tabla</button>
                </form>
    </div>
</html>