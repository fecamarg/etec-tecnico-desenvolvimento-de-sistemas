<body>
  <?php
  include_once 'Pessoa.php';
  include_once 'Fisica.php';
  include_once 'Juridica.php';

  // Perceba que não foi mais necessário utilizar o include da classe pessoa, já que não instanciamos nenhum objeto de sua classe.
  // Nesse código já percebemos, de forma clara, o uso da herança, visto que as classes filhas (Fisica e Juridica) não possuem o método setNome e nem o atributo nome; porém, como a classe pai “Pessoa” possui este método (setNome) e atributo (nome), as classes filhas (Fisica e Juridica) os recebem como herança, e podem fazer uso deles sem nenhum problema.

  $f = new Fisica();
  $f->setNome("Zeca");
  $f->setCpf("286.050.030-81");
  $f->setSobrenome("Silva");
  echo 'Nome: ' . $f->getNome() . ' ' . $f->getSobrenome() . '<br>';
  echo 'CPF: ' . $f->getCpf();

  echo '<br>';

  $j = new Juridica();
  $j->setNome("Industria do Zeca");
  $j->setCnpj("66.742.467/0001-15");
  echo 'Nome: ' . $j->getNome() . '<br>';
  echo 'CNPJ: ' . $j->getCnpj();
  ?>
</body>