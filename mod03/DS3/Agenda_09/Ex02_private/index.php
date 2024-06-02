<body>
  <?php
  include_once 'Pessoa.php';

  $p = new Pessoa();
  $p->setNome("Zeca");
  $p->setSobrenome("Silva");

  echo $p->getNome() . ' ' . $p->getSobrenome();
  ?>
</body>