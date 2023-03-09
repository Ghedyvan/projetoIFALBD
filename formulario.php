<?php
include('conexao.php');

if (isset($_POST['assunto']) || isset($_POST['data']) || isset($_POST['horario'])) {
    if (strlen($_POST['assunto']) == 0) {
        echo "<script>alert('Preencha o assunto');</script>";
    } else if (strlen($_POST['data']) == 0) {
        echo "<script>alert('Selecione a data');</script>";
    } else if (strlen($_POST['horario']) == "Selecione") {
        echo "<script>alert('Selecione o horário');</script>";
    } else {
        echo "<script>alert('Entramo fml');</script>";
        $assunto = $mysqli->real_escape_string($_POST['assunto']);
        $data = $mysqli->real_escape_string($_POST['data']);
        $horario = $mysqli->real_escape_string($_POST['horario']);
        $observacao = $mysqli->real_escape_string($_POST['observacao']);
        $matricula = $_SESSION['matricula'];
        $nome = $_SESSION['nome'];
        $whatsapp = $_SESSION['whatsapp'];

        $query = "INSERT INTO monitoria (nome,whatsapp,disciplina,assunto,data,horario,observacao) VALUES ('$nome','$whatsapp',$assunto','$data','$horario','$observacao')";
        $sql_query = $mysqli->query($query) or die("Falha na execução do código SQL: " . $mysqli->error);

        if ($sql_query) {
            echo "<script>alert('Monitoria agendada com sucesso');</script>";
        } else {
            echo "<script>alert('Falha ao agendar monitoria');</script>";
        }
    }
}
else{
  echo "<script>alert('Ferrou brother');</script>";
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script type="text/javascript" src="scripts.js"></script>
  <title>Login | IFAL-MD</title>
</head>

<body>
  <div class="container" style="height: 100%;">
    <section class="section">
      <center>
        <div class="container" style="padding-top: 10%;"><img src="./imagens/copy2_of_IFAL_Macei_horizontal (1).png" class="img-fluid" alt="LogoIfal" style="max-height: 200px;"></div>
        <div class="h1" style="padding-top: 10%; padding-bottom: 3%; color: #299626; padding-bottom: 10%;"
          id="disciplina">Monitorias agendadas
        </div>
      </center>
      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Assunto</th>
              <th scope="col">Data</th>
              <th scope="col">Hora</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Números complexos</td>
              <td>20/02</td>
              <td>13:30</td>
              <td><button type="button" class="btn btn-light">Entrar</button></td>
            </tr>
            <tr>
              <td>Trigonometria</td>
              <td>21/02</td>
              <td>13:30</td>
              <td><button type="button" class="btn btn-light">Entrar</button></td>
            </tr>
            <tr>
              <td>Conjuntos</td>
              <td>21/02</td>
              <td>14:30</td>
              <td><button type="button" class="btn btn-light">Entrar</button></td>
            </tr>
          </tbody>
        </table>
        <center>
          <div class="h1" style="padding-top: 10%; padding-bottom: 3%; color: #299626; padding-bottom: 10%;"
            id="disciplina">Agendar nova monitoria
          </div>
        </center>

        <form action="" method="POST">
          <div class="mb-3">
            <label for="assunto" class="form-label">Assunto</label>
            <input type="text" class="form-control" id="assunto" aria-describedby="assunto" name="assunto" >
          </div>
          <div class="row">
            <div class="col">
              <label for="data" class="form-label">Data</label>
              <input type="date" class="form-control" id="data" aria-describedby="emailHelp" name="data">
            </div>
            <div class="col">
              <label for="horario" class="form-label">Horário</label>
              <select class="form-select" id="horario" name="horario">
                <option selected>Selecione</option>
                <option value="1">08:00h - 09:10h</option>
                <option value="2">09:10h - 10:00h</option>
                <option value="3">10:10h - 11:20h</option>
                <option value="4">13:30h - 14:30h</option>
                <option value="5">14:40h - 15:40h</option>
                <option value="6">15:50h - 16:50h</option>
              </select>
            </div>
          </div>

          <div class="mb-3" style="padding-top: 3%;">
            <label for="exampleInputEmail1" class="form-label">Observações</label>
            <input type="text" class="form-control" id="assuntoMonitoria" aria-describedby="emailHelp"
              placeholder="Campo opcional" name="observacao">
          </div>
          <div class="div" style="padding-bottom: 70px;""><button type="submit" class="btn btn-primary">Confirmar</button></div>
          
        </form>
      </div>


    </section>
  </div>
  <footer>

  </footer>


</body>

</html>