<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionarios</title>
    <link rel="stylesheet" href="../assets/css/sidebar.css">
     <link rel="stylesheet" href="../assets/css/style.css">
   
</head>

<body>

    <?php
    include_once "../config/session.php";
    include_once "../config/conexao.php";
    // $_GET = array que pega o que o usuário clicar (os pseudo botões = cadastrar, alterar, excluir e pesquisar)
    // O $_GET['acao'] pega o valor cadastrar e guarda na variável $acao.
    $acao = $_GET['acao'] ?? '';
    ?>

    <div class="layout"> <!-- ← envolve TUDO -->

        <?php include_once "../includes/sidebar.php"; ?>

        <div class="content-funcionarios <?= $acao ? 'sem-fundo' : '' ?>">
              <!-- A IMAGEM NÃO PARECE POIS ESTÁ COM UMA AÇÃO ATIVA(CADASTRAR, ALTERAR, EXCLUIR, PESQUISAR) -->

                <div class="menu_funcionario">
                    <!-- <a href="?acao=cadastrar" class="<?= $acao === 'cadastrar' ? 'active' : '' ?>">Cadastrar</a>
                     explicando: Se a ação recebida for cadastrar, adiciona a classe active no botão Cadastrar, 
                     deixando-o visualmente destacado."
                    -->
                    <a href="?acao=cadastrar" class="<?= $acao === 'cadastrar' ? 'active' : '' ?>">Cadastrar</a>
                    <a href="?acao=alterar" class="<?= $acao === 'alterar' ? 'active' : '' ?>">Alterar</a>
                    <a href="?acao=excluir" class="<?= $acao === 'excluir' ? 'active' : '' ?>">Excluir</a>
                    <a href="?acao=pesquisar" class="<?= $acao === 'pesquisar' ? 'active' : '' ?>">Pesquisar</a>
                </div>

                <div class="area-formulario <?= !$acao ? 'com-fundo' : '' ?>"> 
                    <!-- A IMAGEM SÓ APARECE SE A PÁGINA NÃO TIVER NENHUMA AÇÃO ATIVA -->
                    <?php

                    // O array $forms_permitidos é uma lista de valores aceitos — 
                    //segurança para evitar que alguém passe ?acao=../config/conexao na URL e acesse arquivos indevidos. 
                    //O in_array verifica se $acao está na lista antes de fazer o include.

                    $forms_permitidos = ['cadastrar', 'alterar', 'excluir', 'pesquisar'];
                    if (in_array($acao, $forms_permitidos)) {
                        include "forms/{$acao}.php"; // ← isso que carrega o formulário
                    }
                    ?>
            </div>

        </div>

    </div>


</body>

</html>