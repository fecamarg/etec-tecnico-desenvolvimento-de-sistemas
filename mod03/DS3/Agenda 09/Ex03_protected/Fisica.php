<?php
require_once 'Pessoa.php';

// Em PHP toda classe poderá ser herdada, seu uso se resume na declaração de uma nova classe que será uma extensão da outra, utilizando a palavra chave “extends”.
class Fisica extends Pessoa
{
  private $cpf;

  public function setCpf($cpf)
  {
    $this->cpf = $cpf;
  }
  public function getCpf()
  {
    return $this->cpf;
  }
}
