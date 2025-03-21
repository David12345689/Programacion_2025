<?php
require_once "Database.php";

$db = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $edad = $_POST["edad"];

        if ($db->insertarPersona($nombre, $email, $edad)) {
            echo "Registro guardado con éxito.<br>";
        } else {
            echo "Error al guardar el registro.<br>";
        }
    }

    if (isset($_POST["mostrar_registros"])) {
        $resultados = $db->obtenerPersonas();
        if ($resultados->num_rows > 0) {
            while ($row = $resultados->fetch_assoc()) {
                echo "Nombre: " . $row['nombre'] . "<br>";
                echo "Email: " . $row['email'] . "<br>";
                echo "Edad: " . $row['edad'] . "<br>";
                echo "-------------------------<br>";
            }
        } else {
            echo "No hay registros en la base de datos.<br>";
        }
    }
}

$db->cerrarConexion();
?>