<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once "../config/conexao.php";

// Recebe os dados do formulário
$email          = $_POST['email'] ?? '';
$nova_senha     = $_POST['nova_senha'] ?? '';
$confirmar      = $_POST['confirmar_senha'] ?? '';

// Validação básica
if (empty($email) || empty($nova_senha) || empty($confirmar)) {
    header("Location: ../recuperarSenha.php?status=erro");
    exit;
}

// Verifica se as senhas coincidem
if ($nova_senha !== $confirmar) {
    header("Location: ../recuperarSenha.php?status=erro");
    exit;
}

// Verifica se o e-mail existe
$sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
$sql->execute([$email]);

$usuario = $sql->fetch();

if (!$usuario) {
    header("Location: ../recuperarSenha.php?status=nao_encontrado");
    exit;
}

// Atualiza a senha
// SEM HASH (mantendo compatível com seu login atual)
$upd = $pdo->prepare("UPDATE usuarios SET senha = ? WHERE email = ?");

$ok = $upd->execute([$nova_senha, $email]);

// Retorno
if ($ok) {
    header("Location: ../recuperarSenha.php?status=ok");
} else {
    header("Location: ../recuperarSenha.php?status=erro");
}

exit;