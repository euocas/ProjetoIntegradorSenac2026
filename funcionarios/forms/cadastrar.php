<?php

include_once "../config/session.php";
include_once "../config/conexao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Funcionarios</title>

    <!-- sidebar.css PRIMEIRO (layout base) -->
    <link rel="stylesheet" href="../assets/css/sidebar.css">

    <!-- style.css DEPOIS (formulário, complementa sem conflitar) -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> -->

</head>

<body>

    <div class="layout">

        <?php include_once "../includes/sidebar.php"; ?>

        <main class="content">

            <h1 class="titulo-pagina-func">
                Cadastrar Funcionários - IDE<span class="destaque">A</span>L - Soluções Elétricas
            </h1>

            <div class="page-card">

                <form class="form-funcionario" action="salvar.php" method="POST">

                    <div class="form-grid">

                        <!-- Nome -->
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="nome" minlength="3" pattern="[A-Za-zÀ-ÿ\s]+"
                                title="Digite apenas letras" placeholder="Digite apenas letras">
                        </div>


                        <!-- Sexo -->
                        <div class="form-group">
                            <label>Sexo</label>
                            <select name="sexo">
                                <option>Selecione</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                                <option>Outro</option>
                            </select>
                        </div>


                        <!-- Data nascimento -->
                        <div class="form-group">
                            <label>Data Nascimento</label>
                            <input type="date" name="data_nascimento">
                        </div>

                        <!-- Naturalidade -->
                        <div class="form-group">
                            <label for="naturalidade">Naturalidade</label>
                            <input type="text" name="naturalidade" minlength="3" title="Digite apenas letras"
                                placeholder="Digite apenas o nome da cidade">
                        </div>

            <!-- Estado de Nascimento -->
                        <div class="form-group">
                            <label>Estado de Nasc</label>

                            <select name="estado_nasc" required>
                                <option value="">Selecione o Estado</option>

                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                        <!-- Cargo -->
                        <div class="form-group">
                            <label>Cargo / Função</label>
                            <select name="cargo">
                                <option>Selecione</option>
                                <option>Azulegista</option>
                                <option>Eletrecista</option>
                                <option>Marceneiro</option>
                                <option>Pintor</option>

                            </select>
                        </div>



                        <!-- Endereço -->
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" minlength="3" title="Digite apenas letras"
                                placeholder="Digite apenas o nome do endereço">
                        </div>

                        <!-- Número -->
                        <div class="form-group">
                            <label>Número</label>
                            <input type="text" name="numero">
                        </div>

                        <!-- Complemento -->
                        <div class="form-group">
                            <label>Complemento</label>
                            <input type="text" name="complemento">
                        </div>

                        <!-- Cidade -->
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" name="cidade">
                        </div>

                        <!-- CEP -->
                        <div class="form-group">
                            <label>CEP</label>
                            <input type="text" name="cep">
                        </div>

                        <!-- Estado -->
                        <div class="form-group">
                            <label>Estado</label>

                            <select name="estado" required>
                                <option value="">Selecione o Estado</option>

                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" minlength="5" maxlength="100"
                                placeholder="seuemail@dominio.com" title="Digite um e-mail válido"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        </div>



                        <!-- Tipo contrato -->
                        <div class="form-group">
                            <label>Tipo Contrato</label>
                            <select name="tipo_contrato">
                                <option>Selecione</option>
                                <option>CLT</option>
                                <option>Contrato Temporário</option>
                                 <option>Pessoa Jurídica</option>
                                <option>Tercerizada</option>
                               

                            </select>
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status">
                                <option>Selecione</option>
                                <option>Ativo</option>
                                <option>Inativo</option>

                            </select>
                        </div>

                    </div>

                    <!-- Observações + Botões -->
                    <div class="bottom-row">

                        <div class="obs-group">
                            <label>Observações</label>
                            <textarea name="observacoes" placeholder="Digite observações..." minlength="10" maxlength="300"></textarea>
                        </div>

                        <div class="buttons">
                            <button type="submit" class="btn btn-dark">CADASTRAR</button>
                            <!-- <button type="button" class="btn btn-blue">ALTERAR</button> -->
                            <!-- <button type="button" class="btn btn-green">PESQUISAR</button> -->
                            <!-- <button type="button" class="btn btn-red">EXCLUIR</button> -->
                        </div>

                    </div>

                </form>

            </div>

        </main>

    </div>

</body>

</html>