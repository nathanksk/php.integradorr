<?php

require_once 'classes/Cliente.php';
require_once 'classes/Produto.php';
require_once 'classes/Pedido.php';

// 👤 Criar cliente
$cliente = new Cliente(1, "Maria Oliveira", "maria@email.com");

// 📦 Criar produtos
$produto1 = new Produto(1, "Celular", 2000);
$produto2 = new Produto(2, "Fone de Ouvido", 150);
$produto3 = new Produto(3, "Carregador", 80);

// 🧾 Criar pedido
$pedido = new Pedido(101, $cliente);

// ➕ Adicionar produtos ao pedido
$pedido->adicionarProduto($produto1);
$pedido->adicionarProduto($produto2);
$pedido->adicionarProduto($produto3);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pedidos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>🛒 Sistema de Pedidos</h1>
    </header>

    <main>
        <?php $pedido->exibirResumo(); ?>
    </main>

    <footer>
        <p>© <?php echo date("Y"); ?> - Loja Virtual</p>
    </footer>

</body>
</html>