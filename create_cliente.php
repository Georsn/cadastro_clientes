<?php
include_once 'Database.php';    //Alunos: Geovane da Silva Costa - 202403580209
include_once 'Cliente.php';     //        Dhony Moreira Bispo - 2024 0354 8208

$database = new Database();
$db = $database->getConnection();

$cliente = new Cliente($db);

$cliente->nome = $_POST['nome'];
$cliente->email = $_POST['email'];
$cliente->telefone = $_POST['telefone'];

if ($cliente->create()) {
    echo "Cliente cadastrado com sucesso.";
} else {
    echo "Erro ao cadastrar cliente.";
}
header("Location: index.php");
?>
