<?php

class Produto {
    private $id;
    private $nome;
    private $preco;

    // 🔧 Construtor
    public function __construct($id, $nome, $preco) {
        $this->id = $id;
        $this->nome = $nome;
        $this->setPreco($preco); // usa o setter para validar
    }

    // 📥 Getters
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    // 📤 Setters
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPreco($preco) {
        if ($preco < 0) {
            throw new Exception("O preço não pode ser negativo!");
        }
        $this->preco = $preco;
    }
}
