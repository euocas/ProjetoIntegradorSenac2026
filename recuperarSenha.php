<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Senha</title>
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
            <h2>REDEFINIR<br><span style="color:#ff5a1f;">SENHA</span></h2>
            <p class="p_login">Informe seu e-mail e defina uma nova senha.</p>

            <?php if (!empty($_GET['status'])): ?>
                <?php if ($_GET['status'] === 'ok'): ?>
                    <div class="alerta-sucesso">Senha alterada com sucesso! <a href="index.php">Fazer login</a></div>
                <?php elseif ($_GET['status'] === 'nao_encontrado'): ?>
                    <div class="alerta-erro">E-mail não encontrado no sistema.</div>
                <?php elseif ($_GET['status'] === 'erro'): ?>
                    <div class="alerta-erro">Ocorreu um erro. Tente novamente.</div>
                <?php endif; ?>
            <?php endif; ?>

            <form action="auth/recuperarSenha.php" method="POST">
                <label>E-MAIL</label>
                <input type="email" name="email" placeholder="seu@email.com.br" required>

                <label>NOVA SENHA</label>
                <div class="campo-senha">
                    <input type="password" name="nova_senha" id="nova-senha" minlength="4" required>
                    <button type="button" class="mostrar-senha" onclick="toggleSenha('nova-senha', this)">Mostrar</button>
                </div>

                <label>CONFIRMAR NOVA SENHA</label>
                <div class="campo-senha">
                    <input type="password" name="confirmar_senha" id="conf-senha" minlength="4" required>
                    <button type="button" class="mostrar-senha" onclick="toggleSenha('conf-senha', this)">Mostrar</button>
                </div>

                <button type="submit">SALVAR NOVA SENHA</button>
            </form>

            <p style="margin-top:20px; font-size:13px; color:#aaa; text-align:center;">
                <a href="index.php" class="link-esqueceu">← Voltar ao login</a>
            </p>
        </div>
    </div>

</div>

<script>
function toggleSenha(id, btn) {
    const input = document.getElementById(id);
    if (input.type === 'password') {
        input.type = 'text';
        btn.textContent = 'Ocultar';
    } else {
        input.type = 'password';
        btn.textContent = 'Mostrar';
    }
}
</script>
</body>
</html>