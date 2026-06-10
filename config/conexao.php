<?php
$servidor = "10.140.169.47";
$Email = "root";
$Senha = "1234";
$banco = "rfid_ferramentas";
$porta = 3307;

$conn = new mysqli($servidor, $Email, $Senha, $banco, $porta);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
