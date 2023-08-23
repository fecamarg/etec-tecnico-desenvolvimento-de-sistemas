<!-- 
    Fichário – Agenda 02 – Desenvolvimento de Sistemas II
    Nome: Felipe Camargo de Godoy
    Turma: CZL - TO230014590D2
    Desenvolvimento de Sistemas - Módulo 02
 -->

    <?php
    // Inicialize as variáveis
    $nome = "";
    $sobrenome = "";
    $email = "";
    $formacao = "";
    $ultimo_emprego = "";

    // Verifica se o formulário foi enviado
    if (isset($_POST["txtNome"]) && isset($_POST["txtSobrenome"]) && isset($_POST["txtEmail"]) && isset($_POST["txtFormacao"]) && isset($_POST["txtEmprego"])) {

        // Obtem os dados do formulário
        $nome = $_POST["txtNome"];
        $sobrenome = $_POST["txtSobrenome"];
        $email = $_POST["txtEmail"];
        $formacao = $_POST["txtFormacao"];
        $ultimo_emprego = $_POST["txtEmprego"];

        // Armazena os dados em variáveis
        $nome = $_POST["txtNome"];
        $sobrenome = $_POST["txtSobrenome"];
        $email = $_POST["txtEmail"];
        $formacao = $_POST["txtFormacao"];
        $ultimo_emprego = $_POST["txtEmprego"];

        // Exibe uma mensagem de confirmação
        echo "<h2>Cadastro confirmado com sucesso!</h2>";
        echo "<p>Seus dados são:</p>";
        echo "<ul>";
        echo "<li>Nome: $nome</li>";
        echo "<li>Sobrenome: $sobrenome</li>";
        echo "<li>Email: $email</li>";
        echo "<li>Formação: $formacao</li>";
        echo "<li>Último emprego: $ultimo_emprego</li>";
        echo "</ul>";
    }
    ?>