<?php
class ExperienciaProfissional
{
  private $id;
  private $idusuario;
  private $inicio;
  private $fim;
  private $empresa;
  private $descricao;

  public function setID($id)
  {
    $this->id = $id;
  }

  public function getID()
  {
    return $this->id;
  }

  public function setIdUsuario($idusuario)
  {
    $this->idusuario = $idusuario;
  }

  public function getIdUsuario()
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

  public function setEmpresa($empresa)
  {
    $this->empresa = $empresa;
  }

  public function getEmpresa()
  {
    return $this->empresa;
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

    $sql = "INSERT INTO experienciaprofissional (idusuario, inicio, fim, empresa, descricao) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issss", $this->idusuario, $this->inicio, $this->fim, $this->empresa, $this->descricao);

    if ($stmt->execute() === true) {
      $this->id = $conn->insert_id;
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

    $sql = "DELETE FROM experienciaprofissional WHERE idexperienciaprofissional = ?";
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

  public function listarExperiencias($idusuario)
  {
    require_once 'ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM experienciaprofissional WHERE idusuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idusuario);
    $stmt->execute();
    $re = $stmt->get_result();
    $stmt->close();
    $conn->close();
    return $re;
  }
}
