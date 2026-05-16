<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start(); 
include_once "../config/conexao.php";

$email         = $_POST['email'] ?? '';
$nova_senha    = $_POST['nova_senha'] ?? '';
$confirmar     = $_POST['confirmar_senha'] ?? '';


if (empty($email) || empty($nova_senha) || empty($confirmar)) {
    header("Location: ../recuperarSenha.php?status=erro");
    exit;
}


if ($nova_senha !== $confirmar) {
    header("Location: ../recuperarSenha.php?status=erro");
    exit;
}

$sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
$sql->execute([$email]);
$usuario = $sql->fetch();

if (!$usuario) {
    header("Location: ../recuperarSenha.php?status=nao_encontrado");
    exit;
}


$senhaCripto = password_hash($nova_senha, PASSWORD_DEFAULT);

$upd = $pdo->prepare("UPDATE usuarios SET senha = ? WHERE email = ?");
$ok = $upd->execute([$senhaCripto, $email]);

// 6. Retorno para o usuário
if ($ok) {
    header("Location: ../recuperarSenha.php?status=ok");
} else {
    header("Location: ../recuperarSenha.php?status=erro");
}
exit;