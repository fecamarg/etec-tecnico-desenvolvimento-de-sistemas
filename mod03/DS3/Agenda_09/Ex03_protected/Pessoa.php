<?php
class Pessoa
{
  //   A visibilidade protected faz com que todos os herdeiros vejam as propriedades ou métodos protegidos como se fossem públicos.
  //   Em PHP não é diferente, toda classe poderá ser herdada, seu uso se resume na declaração de uma nova classe que será uma extensão da outra, utilizando a palavra chave “extends”.
  protected $nome;
  protected $sobrenome;

  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function setSobrenome($sobrenome)
  {
    $this->sobrenome = $sobrenome;
  }

  public function getSobrenome()
  {
    return $this->sobrenome;
  }
}
