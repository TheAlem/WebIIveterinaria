<?php
class Database
{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    private $conn;

    public function __construct()
    {
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }

    function connect()
    {
        try {
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);
            if ($this->conn->connect_error) {
                die("Conexión fallida: " . $this->conn->connect_error);
            }
            return $this->conn;
        } catch (PDOException $e) {
            echo "<script>alert('Error de conexión: " . $e->getMessage() . "');</script>";
        }
    }
}

?>