<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="css/styletabla.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <body>
        <?php
        require 'db.php';
        $tbl = "SELECT * FROM usuarios";
        $result = $mysqli->query($tbl);
        if ($result->num_rows > 0) {
            echo '<div id="contenido4" style="display:block;">'; // Contenedor con estilo
            echo '<table>';
            echo '<tr><th>User_Id</th><th>Nombre</th><th>Apellidos</th><th>Telefono</th><th>Email</th><th>Password</th><th></th></tr>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["User_Id"] . '</td><td>' . $row["Name"] . '</td><td>' . $row["Surname"] . '</td><td>' . $row["Cellphone"] . '</td><td>' . $row["Email"] . '</td><td>' . $row["Pass"] . '</td>';
                echo '<td><form method="post" action="eliminar.php"><input type="hidden" name="user_id" value="' . $row["User_Id"] . '"><button id="eliminar" type="submit">Eliminar</button></form>';
                echo '</tr>';
            }
                echo '</table>';
                echo '</div>'; // Cierra el contenedor
            }else {
             echo 'No se encontraron registros.';
        }
        $mysqli->close();
        ?>
        <button onclick="document.location='inicio.php'">Volver</button>
    </body>
</head>