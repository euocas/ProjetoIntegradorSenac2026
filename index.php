<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Empreiteira</title>
    <link rel="shortcut icon" href="assets/icons/empreiteira.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
<div class="container">

    <div class="left">
        <div class="conteudo">
            <span class="tag">• CONSTRUINDO DESDE 2000 •</span>

            <h1>OBRAS QUE<br>RESISTEM AO<br><span>TEMPO.</span></h1>

            <p>Materiais de alta performance para projetos
            que exigem precisão, durabilidade e confiança.</p>
        </div>
    </div>

    <div class="right">
        <div class="login-box">
            <h2>ACESSE SUA<br><span style="color:#ff5a1f;">ÁREA EXCLUSIVA</span></h2>
            <p class="p_login">Acompanhe obras, contratos e documentações.</p>

            <?php if (!empty($_GET['erro'])): ?>
                <div class="alerta-erro">
                    <?php
                        $erros = [
                            'senha'   => 'Senha incorreta. Tente novamente.',
                            'usuario' => 'Usuário não encontrado.',
                        ];
                        echo htmlspecialchars($erros[$_GET['erro']] ?? 'Erro ao fazer login.');
                    ?>
                </div>
            <?php endif; ?>

            <form action="auth/login.php" method="POST">
                <label>E-MAIL</label>
                <input
                    type="email"
                    name="email"
                    placeholder="seu@email.com.br"
                    value="<?= htmlspecialchars($_GET['email'] ?? '') ?>"
                    required
                >

                <label>SENHA</label>
                <input type="password" name="senha" required>

                <div class="opcoes-login">
                    <label class="manter-conectado">
                        <input type="checkbox" name="manter_conectado" value="1">
                        Manter conectado
                    </label>
                    <a href="recuperarSenha.php" class="link-esqueceu">Esqueceu a senha?</a>
                </div>

                <button type="submit">ENTRAR NO PORTAL</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>