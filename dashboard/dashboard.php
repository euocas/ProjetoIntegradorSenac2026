<?php
include_once "../config/session.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">

    <title>IDEAL</title>

    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>

<div class="layout">

    <?php include_once "../includes/sidebar.php"; ?>

    <div class="content">

        <h1>
            Bem-vindo,
            <?php echo $_SESSION['usuario']; ?>
        </h1>

        <br>

        <h2 class="titulo-pagina">
            Sistema ERP  - IDEAL - Soluções elétricas
        </h2>

    </div>

</div>

</body>
</html>