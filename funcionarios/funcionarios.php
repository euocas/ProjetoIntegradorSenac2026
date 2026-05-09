<?php

include_once "../config/session.php";
include_once "../config/conexao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">

    <title>Funcionários</title>

    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>

<div class="layout">

    <?php include_once "../includes/sidebar.php"; ?>

    <div class="content">

        <h1>Tela - Funcionários - IDEAL- Soluções Elétricas</h1>

        <br>

        <form action="salvar.php" method="POST">

            <input type="text" name="nome" placeholder="Nome">

            <br><br>

            <input type="text" name="cpf" placeholder="CPF">

            <br><br>

            <input type="text" name="cargo" placeholder="Cargo">

            <br><br>

            <input type="text" name="departamento" placeholder="Departamento">

            <br><br>

            <button type="submit">
                SALVAR
            </button>

        </form>

        <br><br>

        <table border="1" width="100%">

            <tr>

                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Cargo</th>
                <th>Ações</th>

            </tr>

            <?php

            $sql = $pdo->query("
                SELECT * FROM funcionarios
                ORDER BY idFuncionario DESC
            ");

            while($dados = $sql->fetch()){

            ?>

            <tr>

                <td><?php echo $dados['idFuncionario']; ?></td>

                <td><?php echo $dados['nome']; ?></td>

                <td><?php echo $dados['cpf']; ?></td>

                <td><?php echo $dados['cargo']; ?></td>

                <td>

                    <a href="editar.php?id=<?php echo $dados['idFuncionario']; ?>">
                        Editar
                    </a>

                    |

                    <a href="excluir.php?id=<?php echo $dados['idFuncionario']; ?>">
                        Excluir
                    </a>

                </td>

            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>