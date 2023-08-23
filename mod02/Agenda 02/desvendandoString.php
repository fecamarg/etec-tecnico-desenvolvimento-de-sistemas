<?php
$nome = "Zeca";
$email = 'zeca.silva@teste.com';

$texto1 = 'Olá, $nome, seu email é: $email';
$texto2 = "Olá, $nome, seu email é: $email";
echo $texto1."<br>";
echo $texto2."<br>";
?>

<!-- Podemos notar que na primeira linha, na qual a string foi construída utilizando a aspa simples, o texto representado pelo navegador é literal:
“Olá $nome, seu email é: $email”
Mas quando são utilizadas aspas duplas para a construção da string, as variáveis retornam o valor dos seus conteúdos, deixando o resultado desta forma:
“Olá Zeca, seu email é: zeca.silva@teste.com” -->