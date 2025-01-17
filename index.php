<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Barbearia do GG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
     body {
        background-image: url(BARBEARIA-ARACAJU-BARBEIRO-MESTRE.png);
     }
    </style>
    
</head>

<body>
    <div class="sidebar" id="sidebar">
        <h3>Barbearia do GG</h3>
        <ul class="nav flex-column">
            <li><a href="#" class="nav-link">Home</a></li>
            <li><a href="agendar.php" class="nav-link">Agendamento</a></li>
            <li><a href="agenda.php" class="nav-link">Agenda</a></li>
            <li><a href="cadastrar_usuarios.php" class="nav-link">Cadastrar</a></li>
            <li><a href="lista_de_agendamento.php" class="nav-link">Lista de Agendamento</a></li>
        </ul>
    </div>

    <button id="toggleSidebar" >☰</button><br>

    <div class="content">
        <h1>Bem-vindo à Barbearia do GG</h1>
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
