<?php

include_once "../config/conexao.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cargo = $_POST['cargo'];
$departamento = $_POST['departamento'];

$sql = $pdo->prepare("
    INSERT INTO funcionarios
    (
        nome,
        cpf,
        cargo,
        departamento
    )

    VALUES
    (?, ?, ?, ?)
");

$sql->execute([
    $nome,
    $cpf,
    $cargo,
    $departamento
]);

header("Location: funcionarios.php");