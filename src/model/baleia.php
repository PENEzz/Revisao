<?php

namespace App\model;

class Baleia {
    private $nome;
    private $tamanho;
    private $peso;
    private $cor;
    private $especie;
    private $idade;

    public function __construct($nome, $tamanho, $peso, $cor, $especie, $idade) {
        $this->nome = $nome;
        $this->tamanho = $tamanho;
        $this->peso = $peso;
        $this->cor = $cor;
        $this->especie = $especie;
        $this->idade = $idade;
    }

    public function fazerBarulho() {
        return "Whoooooooa!";
    }

    public function getInfo() {
        return "Baleia: {$this->nome}, Tamanho: {$this->tamanho} metros, Peso: {$this->peso} kg, Cor: {$this->cor}, Espécie: {$this->especie}, Idade: {$this->idade} anos";
    }
}

