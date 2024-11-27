<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <h1>Cadastro de Clientes</h1>
    <form action="create_cliente.php" method="POST">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="text" name="telefone" placeholder="Telefone" required>
        <button type="submit">Cadastrar</button>
    </form>

    <h2>Lista de Clientes</h2>
    <?php include 'read_clientes.php'; ?>    
</body>
</html>
