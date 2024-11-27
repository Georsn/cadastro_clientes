<?php
include_once 'Database.php';      //Alunos: Geovane da Silva Costa - 202403580209
include_once 'Cliente.php';       //        Dhony Moreira Bispo - 2024 0354 8208

$database = new Database();
$db = $database->getConnection();

$cliente = new Cliente($db);
$cliente->id = isset($_GET['id']) ? $_GET['id'] : die();

if ($cliente->delete()) {
    echo "Cliente excluído com sucesso.";
} else {
    echo "Erro ao excluir cliente.";
}
header("Location: index.php");
?>
