<?php
include ('conexao.php');

if(isset($_POST['matricula']) || isset($_POST['senha'])) {
    if(strlen($_POST['matricula']) == 0){
        echo "Preencha seu número de matrícula";
    }
    else if(strlen($_POST['matricula']) == 0){
        echo "Preencha a sua senha";
    }
    else{
        $matricula = $mysqli->real_escape_string($_POST['matricula']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM login WHERE matricula = '$matricula' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            header("Location: monitoria.php");
        }
        else{
            echo "Falha no login, email e/ou senha incorretos.";
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
    <link href="style.css" rel="stylesheet" type="text/css"/>
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
                    <img src="./imagens/estudantesVetor.webp">
                </div>
                <div class="column" style="padding-top:6%">
                    <div class="title" style="text-align: center;">
                        Faça login
                    </div>
                    <div class="column is-half is-offset-one-quarter">
                        <form action="" method="POST">
                            <input type="text" name="matricula" placeholder="Numero de matricula">
                            <input type="password" name="senha" placeholder="Senha">
                            <button type="submit">Entrar</button>
                        </form>
                        <!-- <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="text" placeholder="Usuário" id="userAdm">
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
                                <input class="input" type="password" placeholder="Senha" id="senhaAdm">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </p>
                        </div> -->
                        <div class="columns">
                            <div class="column is-half">
                                <button class="button is-success is-rounded is-fullwidth"
                                style="padding-block: 0%; background-color: #299626;" onclick="login()">Entrar
                            </button>
                            </div>
                            <div class="column is-half">
                                <button class="button is-success is-rounded is-fullwidth"
                                style="padding-block: 0%; background-color: #c8191e;" onclick="criarConta()">Criar conta
                            </button>
                            </div>
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