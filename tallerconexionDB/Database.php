<?php
class Database {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "examen_pr2");
        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }

    public function insertarPersona($nombre, $email, $edad) {
        $sql = "INSERT INTO personas (nombre, email, edad) VALUES ('$nombre', '$email', $edad)";
        return $this->conn->query($sql);
    }

    public function obtenerPersonas() {
        $sql = "SELECT nombre, email, edad FROM personas";
        return $this->conn->query($sql);
    }

    public function cerrarConexion() {
        $this->conn->close();
    }
}
?>