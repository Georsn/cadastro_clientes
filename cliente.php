<?php
class Cliente {
    private $conn;                        //Alunos: Geovane da Silva Costa - 202403580209
    private $table_name = "clientes";    //        Dhony Moreira Bispo - 2024 0354 8208

    public $id;
    public $nome;
    public $email;
    public $telefone;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Método para criar um cliente
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (nome, email, telefone) VALUES (:nome, :email, :telefone)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telefone', $this->telefone);

        return $stmt->execute();
    }

    // Método para listar clientes
    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Método para excluir cliente
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }
}
?>
