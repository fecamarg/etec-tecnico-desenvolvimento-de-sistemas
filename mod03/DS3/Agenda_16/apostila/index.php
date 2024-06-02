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
    <input name="txtNome" type="text" placeholder="Nome Completo">
    <input name="txtCEP" type="text" placeholder="CEP Ex.: 140000">
    <button name="btnBuscar">Buscar</button>
    <input name="txtLogradouro" type="text" placeholder="Rua, Avenida e etc.">
    <input name="txtNumero" type="text" placeholder="Número ex (1111)">
    <input name="txtBairro" type="text" placeholder="Bairro">
    <input name="txtCidade" type="text" placeholder="Cidade">
    <input name="txtEstado" type="text" placeholder="Estado">
  </form>
</body>

</html>