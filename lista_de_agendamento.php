<?php
include "conexao.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Lista de Agendamentos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="sidebar" id="sidebar">
    <h3>Barbearia do GG</h3>
    <ul class="nav flex-column">
        <li><a href="index.html" class="nav-link">Home</a></li>
        <li><a href="agendar.php" class="nav-link">Agendamento</a></li>
        <li><a href="agenda.php" class="nav-link">Agenda</a></li>
        <li><a href="cadastrar_usuarios.php" class="nav-link">Cadastrar</a></li>
        <li><a href="lista_de_agendamento.php" class="nav-link">Lista de Agendamento</a></li>
    </ul>
</div>

<button id="toggleSidebar">☰</button>

<div class="container mt-3">
  <h2>Lista de Agendamentos</h2>
  <?php

  if (isset($_GET['excluzao'])) {
      $id = intval($_GET['excluzao']); 
      $sql_delete = "DELETE FROM agendamentos WHERE id_agendamento = ?";
      $stmt = $conn->prepare($sql_delete);
      $stmt->bind_param("i", $id);

      if ($stmt->execute()) {
          echo "<div class='alert alert-success'>Agendamento excluído com sucesso!</div>";
      } else {
          echo "<div class='alert alert-danger'>Erro ao excluir o agendamento.</div>";
      }
      $stmt->close();
  }

  $sql = "SELECT agendamentos.id_agendamento, c.nome AS cliente, b.nome AS barbeiro, data, horario
          FROM agendamentos
          INNER JOIN usuarios AS c ON c.id_usuario = agendamentos.id_usuario
          INNER JOIN agendas ON agendas.id_agenda = agendamentos.id_agenda
          INNER JOIN usuarios AS b ON b.id_usuario = agendas.id_usuario";
  $result = $conn->query($sql);
  ?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nome do Cliente</th>
        <th>Nome do Barbeiro</th>
        <th>Data e hora</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo "
                <tr>
                  <td>{$row['cliente']}</td>
                  <td>{$row['barbeiro']}</td>
                  <td>{$row['data']} - {$row['horario']}</td>
                  <td>
                    <a href='lista_de_agendamento.php?excluzao={$row['id_agendamento']}' 
                       class='btn btn-danger' 
                      \">
                       Excluir
                    </a>
                  </td>
                </tr>
              ";
          }
      } else {
          echo "<tr><td colspan='4'>Nenhum agendamento encontrado.</td></tr>";
      }
      ?>
    </tbody>
  </table>
</div>
<script>
        const toggleButton = document.getElementById('toggleSidebar');
        const sidebar = document.querySelector('.sidebar');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
        });
    </script>

</body>

</html>

