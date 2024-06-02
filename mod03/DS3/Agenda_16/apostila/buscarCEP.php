<?php
session_start();

function get_endereco($cep)
{
  // Formatar o CEP para conter apenas números
  $cep = preg_replace("/[^0-9]/", "", $cep);

  // Montar a URL para a requisição
  $url = "http://viacep.com.br/ws/$cep/xml/";

  // Fazer a requisição e obter os dados em XML
  $xml = simplexml_load_file($url);

  // Retornar o XML
  return $xml;
}

if (isset($_POST["btnBuscar"])) {
  $endereco = get_endereco($_POST["txtCEP"]);

  $_SESSION["nome"] = $_POST["txtNome"];
  $_SESSION["cep"] = $_POST["txtCEP"];
  $_SESSION["logradouro"] = (string)$endereco->logradouro;
  $_SESSION["numero"] = $_POST["txtNumero"];
  $_SESSION["bairro"] = (string)$endereco->bairro;
  $_SESSION["cidade"] = (string)$endereco->localidade;
  $_SESSION["estado"] = (string)$endereco->uf;

  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastro de Clientes</title>
</head>

<body>
  <form action="buscarCEP.php" method="post">
    <input name="txtNome" type="text" placeholder="Nome Completo" value="<?php echo $_SESSION["nome"] ?? ''; ?>">
    <input name="txtCEP" type="text" placeholder="CEP Ex.: 140000" value="<?php echo $_SESSION["cep"] ?? ''; ?>">
    <button name="btnBuscar">Buscar</button>
    <input name="txtLogradouro" type="text" placeholder="Rua, Avenida e etc." value="<?php echo $_SESSION["logradouro"] ?? ''; ?>">
    <input name="txtNumero" type="text" placeholder="Número ex (1111)" value="<?php echo $_SESSION["numero"] ?? ''; ?>">
    <input name="txtBairro" type="text" placeholder="Bairro" value="<?php echo $_SESSION["bairro"] ?? ''; ?>">
    <input name="txtCidade" type="text" placeholder="Cidade" value="<?php echo $_SESSION["cidade"] ?? ''; ?>">
    <input name="txtEstado" type="text" placeholder="Estado" value="<?php echo $_SESSION["estado"] ?? ''; ?>">
  </form>
</body>

</html>