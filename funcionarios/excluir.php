<?php

include_once "../config/conexao.php";

$id = $_GET['id'];

$sql = $pdo->prepare("
    DELETE FROM funcionarios
    WHERE idFuncionario = ?
");

$sql->execute([$id]);

header("Location: funcionarios.php");