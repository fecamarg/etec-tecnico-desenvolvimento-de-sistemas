<?php
class OutrasFormacoes
{
  private $idoutrasformacoes;
  private $idusuario;
  private $inicio;
  private $fim;
  private $descricao;

  public function setIDOutrasFormacoes($idoutrasformacoes)
  {
    $this->idoutrasformacoes = $idoutrasformacoes;
  }

  public function getIDOutrasFormacoes()
  {
    return $this->idoutrasformacoes;
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

    $sql = "INSERT INTO outrasformacoes (idusuario, inicio, fim, descricao) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $this->idusuario, $this->inicio, $this->fim, $this->descricao);

    if ($stmt->execute() === true) {
      $this->idoutrasformacoes = $conn->insert_id;
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

    $sql = "DELETE FROM outrasformacoes WHERE idoutrasformacoes = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute() === true) {
      $stmt->close();
      $conn->close();
      return true;
    } else {
      $stmt->close();
      $conn->close();
      return false;
    }
  }

  public function listarOutrasFormacoes($idusuario)
  {
    require_once 'ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM outrasformacoes WHERE idusuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idusuario);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $conn->close();
    return $result;
  }
}
