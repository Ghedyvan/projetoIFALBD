<?php
include('conexao.php');

if (isset($_POST['matricula']) || isset($_POST['senha']) || isset($_POST['nome']) || isset($_POST['whatsapp'])) {
    if (strlen($_POST['matricula']) == 0) {
        echo "<script>alert('Preencha seu número de matrícula');</script>";
    } else if (strlen($_POST['senha']) == 0) {
        echo "<script>alert('Preencha sua senha');</script>";
    } else if (strlen($_POST['nome']) == 0) {
        echo "<script>alert('Preencha seu nome');</script>";
    } else if (strlen($_POST['whatsapp']) == 0) {
        echo "<script>alert('Preencha seu whatsapp');</script>";
    } else {
        $nome = $mysqli->real_escape_string($_POST['nome']);
        $matricula = $mysqli->real_escape_string($_POST['matricula']);
        $whatsapp = $mysqli->real_escape_string($_POST['whatsapp']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $query = "INSERT INTO login (nome,matricula,whatsapp,senha) VALUES ('$nome','$matricula','$whatsapp','$senha')";
        $sql_query = $mysqli->query($query) or die("Falha na execução do código SQL: " . $mysqli->error);

        if ($sql_query) {
            echo "<script>alert('Usuário cadastrado com sucesso');</script>";
        } else {
            echo "<script>alert('Falha ao cadastrar usuário');</script>";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">


<!-- 
SITE ÓTIMO PARA BAIXAR .SVG
https://storyset.com/illustration/studying/amico -->




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script type="text/javascript" src="scripts.js"></script>
    <title>Login | IFAL-MD</title>
</head>

<body>
    <div class="container" style="height: 100%;">
        <section class="section">
            <container class="container">
                <nav class="level">
                    <p class="level-item has-text-centered">
                        <img src="./imagens/copy2_of_IFAL_Macei_horizontal (1).png" style="max-height: 200px;">
                    </p>
                </nav>
            </container>
            <section class="columns" style="padding-top: 1%;">
                <div class="column is-half">
                    <img src="./imagens/estudantesVetor.webp" />
                </div>
                <div class="column" style="padding-top:6%">
                    <div class="title" style="text-align: center;">
                        Insira seus dados
                    </div>
                    <form action="" method="POST">
                        <div class="column is-half is-offset-one-quarter">
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input" type="text" placeholder="Nome" id="nome" name="nome">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-check"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input" type="text" placeholder="Matrícula" id="matricula"
                                        name="matricula">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-check"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input" type="number" placeholder="WhatsApp" id="whatsapp"
                                        name="whatsapp">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-check"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="password" placeholder="Senha" id="senha" name="senha">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="columns">
                                <div class="column">
                                    <button class="button is-success is-rounded is-fullwidth"
                                        style="padding-block: 0%; background-color: #c8191e;" type="submit">Criar
                                        conta
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
                    <div class="column">
                        <button onclick="window.location.href='index.php'"
                            class="button is-success is-rounded is-fullwidth"
                            style="padding-block: 0%; background-color: #9b53554b;">Voltar
                    </div>

                </div>
    </div>
    </section>
    </section>
    </div>

    <!-- <footer class="footer">
        <div class="content has-text-centered">
          <p>
            <strong>Desenvolvido</strong> pelo setor de <a href="https://www2.ifal.edu.br/acesso-a-informacao/institucional/agenda-da-reitoria/marechal-deodoro">Tecnologia do IFAL- Campus Marechal Deodoro</a>.
          </p>
        </div>
    </footer> -->

</body>

</html>