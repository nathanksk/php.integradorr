<?php

require_once 'Cliente.php';
require_once 'Produto.php';

class Pedido {
    private $numero;
    private $cliente;
    private $produtos = [];

    // 🔧 Construtor
    public function __construct($numero, Cliente $cliente) {
        $this->numero = $numero;
        $this->cliente = $cliente;
    }

    // ➕ Adicionar produto
    public function adicionarProduto(Produto $produto) {
        $this->produtos[] = $produto;
    }

    // 💰 Calcular total
    public function calcularTotal() {
        $total = 0;

        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco();
        }

        return $total;
    }

    // 📄 Exibir resumo
    public function exibirResumo() {
        echo "<div class='card'>";

        echo "<h2>Pedido #" . $this->numero . "</h2>";

        echo "<h3>👤 Cliente</h3>";
        echo "<p><strong>Nome:</strong> " . $this->cliente->getNome() . "</p>";
        echo "<p><strong>Email:</strong> " . $this->cliente->getEmail() . "</p>";

        echo "<h3>📦 Produtos</h3>";
        echo "<ul>";

        foreach ($this->produtos as $produto) {
            echo "<li>" 
                . $produto->getNome() 
                . " - R$ " 
                . number_format($produto->getPreco(), 2, ',', '.') 
                . "</li>";
        }

        echo "</ul>";

        echo "<h3>💰 Total: R$ " . number_format($this->calcularTotal(), 2, ',', '.') . "</h3>";

        echo "</div>";
    }
}