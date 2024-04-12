<body>
  <?php
  include_once 'Paciente.php';

  $p1 = new Paciente();
  $p1->setNome("Maria Silva");
  $p1->setRg("25.489.752-8");
  $p1->setCpf("365.820.490-62");
  $p1->setEndereco("Rua das Flores, 123");
  $p1->setProfissao("Enfermeira");

  $p2 = new Paciente();
  $p2->setNome("Carlos Souza");
  $p2->setRg("33.784.965-4");
  $p2->setCpf("478.963.201-45");
  $p2->setEndereco("Avenida Central, 456");
  $p2->setProfissao("Engenheiro");

  $p3 = new Paciente();
  $p3->setNome("Ana Santos");
  $p3->setRg("28.745.963-7");
  $p3->setCpf("587.369.201-32");
  $p3->setEndereco("Travessa dos Passarinhos, 789");
  $p3->setProfissao("Advogada");

  $p4 = new Paciente();
  $p4->setNome("Pedro Oliveira");
  $p4->setRg("40.632.159-2");
  $p4->setCpf("654.987.321-87");
  $p4->setEndereco("Praça da Liberdade, 321");
  $p4->setProfissao("Estudante");

  $p5 = new Paciente();
  $p5->setNome("Joana Oliveira");
  $p5->setRg("37.852.964-1");
  $p5->setCpf("789.456.123-98");
  $p5->setEndereco("Rua das Palmeiras, 567");
  $p5->setProfissao("Médica");

  echo 'Paciente 1:<br>';
  echo 'Nome: ' . $p1->getNome() . '<br>';
  echo 'RG: ' . $p1->getRg() . '<br>';
  echo 'CPF: ' . $p1->getCpf() . '<br>';
  echo 'Endereço: ' . $p1->getEndereco() . '<br>';
  echo 'Profissão: ' . $p1->getProfissao() . '<br>';
  echo '<br>';

  echo 'Paciente 2:<br>';
  echo 'Nome: ' . $p2->getNome() . '<br>';
  echo 'RG: ' . $p2->getRg() . '<br>';
  echo 'CPF: ' . $p2->getCpf() . '<br>';
  echo 'Endereço: ' . $p2->getEndereco() . '<br>';
  echo 'Profissão: ' . $p2->getProfissao() . '<br>';
  echo '<br>';

  echo 'Paciente 3:<br>';
  echo 'Nome: ' . $p3->getNome() . '<br>';
  echo 'RG: ' . $p3->getRg() . '<br>';
  echo 'CPF: ' . $p3->getCpf() . '<br>';
  echo 'Endereço: ' . $p3->getEndereco() . '<br>';
  echo 'Profissão: ' . $p3->getProfissao() . '<br>';
  echo '<br>';

  echo 'Paciente 4:<br>';
  echo 'Nome: ' . $p4->getNome() . '<br>';
  echo 'RG: ' . $p4->getRg() . '<br>';
  echo 'CPF: ' . $p4->getCpf() . '<br>';
  echo 'Endereço: ' . $p4->getEndereco() . '<br>';
  echo 'Profissão: ' . $p4->getProfissao() . '<br>';
  echo '<br>';

  echo 'Paciente 5:<br>';
  echo 'Nome: ' . $p5->getNome() . '<br>';
  echo 'RG: ' . $p5->getRg() . '<br>';
  echo 'CPF: ' . $p5->getCpf() . '<br>';
  echo 'Endereço: ' . $p5->getEndereco() . '<br>';
  echo 'Profissão: ' . $p5->getProfissao() . '<br>';
  echo '<br>';
  ?>

</body>