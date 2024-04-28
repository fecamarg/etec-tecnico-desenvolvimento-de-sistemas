<?php

class FormacaoAcad
{
  private $id;
  private $idusuario;
  private $inicio;
  private $fim;
  private $descricao;

  public function setID($id)
  {
    $this->id = $id;
  }

  public function getID()
  {
    return $this->id;
  }

  public function setIDUsuario($idusuario)
  {
    $this->idusuario = $idusuario;
  }

  public function getIDUsuario()
  {
    return $this->idusuario;
  }

  public function setInicio($inicio)
  {
    $this->inicio = $inicio;
  }

  public function getInicio()
  {
    return $this->inicio;
  }

  public function setFim($fim)
  {
    $this->fim = $fim;
  }

  public function getFim()
  {
    return $this->fim;
  }

  public function setDescricao($descricao)
  {
    $this->descricao = $descricao;
  }

  public function getDescricao()
  {
    return $this->descricao;
  }

  public function inserirBD()
  {
    require_once 'ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO formacaoAcademica (idusuario, inicio, fim, descricao) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("isss", $this->idusuario, $this->inicio, $this->fim, $this->descricao);

    if ($stmt->execute() === true) {
      $this->id = $stmt->insert_id;
      $stmt->close();
      $conn->close();
      return true;
    } else {
      $stmt->close();
      $conn->close();
      return false;
    }
  }

  public function excluirBD($id)
  {
    require_once 'ConexaoBD.php';
    $con = new ConexaoBD();
    $conn = $con->conectar();

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM formacaoAcademica WHERE idformacaoAcademica = '" . $id . "';";

    if ($conn->query($sql) === true) {
      $conn->close();
      return true;
    } else {
      $conn->close();
      return false;
    }
  }

  public function listaFormacoes($idusuario)
  {
    require_once 'ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM formacaoAcademica WHERE idusuario = '" . $idusuario . "'";
    $re = $conn->query($sql);
    $conn->close();
    return $re;
  }
}
