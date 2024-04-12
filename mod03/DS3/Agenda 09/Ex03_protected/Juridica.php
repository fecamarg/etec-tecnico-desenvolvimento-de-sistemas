<?php
require_once 'Pessoa.php';

//   Em PHP toda classe poderá ser herdada, seu uso se resume na declaração de uma nova classe que será uma extensão da outra, utilizando a palavra chave “extends”
class Juridica extends Pessoa
{
  private $cnpj;

  public function setCnpj($cnpj)
  {
    $this->cnpj = $cnpj;
  }
  public function getCnpj()
  {
    return $this->cnpj;
  }
}
