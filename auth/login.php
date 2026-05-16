<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include_once "../config/conexao.php";

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';
$manter = isset($_POST['manter_conectado']);


$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
$sql->execute([$email]);
$usuario = $sql->fetch();

if (!$usuario) {
    header("Location: ../index.php?erro=usuario&email=" . urlencode($email));
    exit;
}

if (!password_verify($senha, $usuario['senha'])) {
    header("Location: ../index.php?erro=senha&email=" . urlencode($email));
    exit;
}

// Login bem-sucedido
$_SESSION['usuario']    = $usuario['nome'];
$_SESSION['usuario_id'] = $usuario['id'];

if ($manter) {
    // Cookie válido por 30 dias
    setcookie('lembrar_email', $email, time() + (86400 * 30), '/');
} else {
    setcookie('lembrar_email', '', time() - 3600, '/');
}

header("Location: ../dashboard/dashboard.php");
exit;