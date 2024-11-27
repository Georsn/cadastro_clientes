<?php
include_once 'Database.php';
include_once 'Cliente.php';

$database = new Database();                //Alunos: Geovane da Silva Costa - 202403580209
$db = $database->getConnection();          //        Dhony Moreira Bispo - 2024 0354 8208

$cliente = new Cliente($db);

$stmt = $cliente->read();
echo "<ul>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    echo "<li>" . htmlspecialchars($nome) . " - " . htmlspecialchars($email) . " - " . htmlspecialchars($telefone);
    echo " <a href='delete_cliente.php?id=" . $id . "'>Excluir</a></li>";
}
echo "</ul>";
?>
