<?php
session_start(); //para saber que voce esta logado quando entra no site
include "conexao.php";

$Email = $_POST['Email']; //guarda o nome de usuario em uma variavel
$Senha = $_POST['Senha']; // colocar o md5 quando a tela de cadastro tiver criada e mandando no banco de dados

$sql = "SELECT * FROM funcionarios WHERE email='$Email' AND Senha='$Senha'"; //verifica no banco de dados se o usuario e a senha que a pessoa digitou esta coerente com o que esta no banco de dados

$result = $conn->query($sql); // envia pro banco de dados e guarda a resposta

//Se encontrou alguém → redireciona pra index_sistema.php (entrou com sucesso!) Se não → mostra a mensagem de erro.    
if ($result->num_rows > 0) {
    $_SESSION['Email'] = $Email;
    $_SESSION['msg'] = "Login realizado com sucesso!";
    $_SESSION['status'] = "ok";

    header("Location: sistema/index_sistema.php");
} else {
    $_SESSION['msg'] = "Usuário ou senha incorretos!";
    $_SESSION['status'] = "erro";

    header("Location: index_cadastro.php");
}
exit;
