<body>
  <?php
  include_once 'Pessoa.php';

  $p = new Pessoa();
  $p->nome = "Zeca";
  $p->sobrenome = "Silva";

  echo $p->nome . ' ' . $p->sobrenome;
  ?>
</body>