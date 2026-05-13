<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sidebar ERP</title>

    <link rel="stylesheet" href="/projetointegradorsenac2026/assets/css/sidebar.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <aside class="sidebar">
        <div>
            <!-- LOGO -->
            <div class="logo">
                <img src="/projetointegradorsenac2026/assets/img/logo.png" alt="Logo">
            </div>
            <hr>
            <br>

            <!-- MENU PRINCIPAL -->
            <ul class="menu">
                <li>
                    <a href="../dashboard/dashboard.php" class="active">
                        <i class="fa-solid fa-table-columns"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="../clientes/clientes.php">
                        <i class="fa-solid fa-people-line"></i>
                        Clientes
                    </a>
                </li>
                <li>
                    <a href="../obras/obras.php">
                        <i class="fa-solid fa-building"></i>
                        Obras
                    </a>
                </li>
                <li>
                    <a href="../veiculos/veiculos.php">
                        <i class="fa-solid fa-car"></i>
                        Veículos
                    </a>
                </li>
                <li>
                    <a href="../funcionarios/funcionarios.php">
                        <i class="fa-solid fa-users"></i>
                        Funcionários
                    </a>
                </li>
                <li>
                    <a href="../financeiro/financeiro.php">
                        <i class="fa-solid fa-wallet"></i>
                        Financeiro
                    </a>
                </li>

            </ul>

            <!-- CONFIGURAÇÕES -->
            <div class="menu-title">
                CONFIGURAÇÕES
            </div>

            <ul class="menu">

                <li>
                    <a href="#">
                        <i class="fa-regular fa-circle-user"></i>
                        Usuários
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa-regular fa-building"></i>
                        Empresas
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa-solid fa-list-check"></i>
                        Logs do sistema
                    </a>
                </li>

                <li>
                    <a href="../logout.php">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        Sair
                    </a>
                </li>

            </ul>

        </div>

        <!-- USUÁRIO -->
        <div class="user">

            <div class="avatar">
            <i class="fa-solid fa-user"></i>
            </div>

            <div class="user-info">
                <h3>Administrador</h3>
                <span>adm</span>
            </div>
        </div>
    </aside>
</body>
</html>