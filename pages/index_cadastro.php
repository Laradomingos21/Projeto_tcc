<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>

<body>
    <div class="container">
        <h2>Sistema de Monitoramento</h2>
        <h4>Sistema de monitoramento de ferramentas RFID</h4>
        <h2> Bem-Vindo!</h2>
        <h4> Faça login para acessar o sistema de monitoramento de ferramentas</h4>



        <form id="formulario_de_Cadastro" action="autenticar.php" method="POST">
            <label>Email:</label>
            <input type="text" id="Email" name="Email" placeholder="seu.email@empresa.com">
            <small id="erroNome"></small>

            <label>Senha:</label>
            <input type="password" id="Senha" name="Senha" placeholder="Senha">
            <small id="forcaSenha"></small>

            <?php
            $msg = $_SESSION['msg'] ?? '';
            $status = $_SESSION['status'] ?? '';

            // limpa depois de usar (importante!)
            unset($_SESSION['msg'], $_SESSION['status']);
            ?>

            <div id="mensagem" data-status="<?= $status ?>">
                <?= $msg ?>
            </div>

            <button type="submit"> Cadastrar </button>

        </form>
    </div>
<script src="main.js"></script>
</body>

</html>