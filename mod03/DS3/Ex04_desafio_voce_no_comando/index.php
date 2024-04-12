<body>
  <?php
  include_once 'Professor.php';
  include_once 'Aluno.php';

  $p = new Professor();
  $p->setNome("Zeca");
  $p->setCpf("286.050.030-81");
  $p->setFormacao("Engenharia de Software");
  echo 'Nome: ' . $p->getNome() . '<br>';
  echo 'CPF: ' . $p->getCpf() . '<br>';
  echo 'Formação: ' . $p->getFormacao();

  echo '<br><br>';

  $a = new Aluno();
  $a->setNome("Zuleica");
  $a->setCpf("458.635.180-22");
  $a->setCurso("Análise e Desenvolvimento de Sistemas");
  echo 'Nome: ' . $a->getNome() . '<br>';
  echo 'CPF: ' . $a->getCpf() . '<br>';
  echo 'Curso: ' . $a->getCurso();
  ?>
</body>