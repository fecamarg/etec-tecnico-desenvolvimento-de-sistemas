<?php
class Pessoa
{
  // Note que o atributos nome e sobrenome estão com o modificador private, ou seja, não é possível acessá-los de fora da classe, sendo necessário usar os métodos getters e setter para acessá-lo.
  private $nome;
  private $sobrenome;

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
