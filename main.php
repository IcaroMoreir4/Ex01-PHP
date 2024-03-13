<?php

class Jogador{
  public $nome;
  public $posicao;
  public $numero;
  public $time;

  public function meuJogador() {
    echo "O nome do jogador é " . $this->nome . ", ele joga na posição " . $this->posicao . ", ele tem a camisa " . $this->numero . ", do time " . $this->time."\n";
  }
}

$jogador1 = new Jogador();
$jogador1->nome = "Magrão";
$jogador1->posicao = "Goleiro";
$jogador1->numero = "1";
$jogador1->time = "Sport Recife.";

$jogador1->meuJogador();

$jogador2 = new Jogador();
$jogador2->nome = "Vaca Magra";
$jogador2->posicao = "Atacante";
$jogador2->numero = "69";
$jogador2->time = "Torcida Jovem.";

$jogador2->meuJogador();
