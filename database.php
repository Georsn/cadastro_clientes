<?php
class Database {
    private $host = "localhost";          //Alunos: Geovane da Silva Costa - 202403580209
    private $db_name = "clientes_db";    //        Dhony Moreira Bispo - 2024 0354 8208  
    private $username = "root"; 
    private $password = ""; 
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Erro de conexão: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
