<?php
require 'db.php';
if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    // Consulta para eliminar el usuario
    $sql = "DELETE FROM usuarios WHERE User_ID = $user_id";

    if ($mysqli->query($sql) === TRUE) {
        echo "Usuario eliminado correctamente.";
        header("Location:Vtabla.php");
        
    } else {
        echo "Error al eliminar el usuario: " . $mysqli->error;
    
    }
} else {
    echo "No se proporcionó un ID de usuario válido.";

}
$mysqli->close();
?>