


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário - Barbearia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="sidebar" id="sidebar">
        <h3>Barbearia do GG</h3>
        <ul class="nav flex-column">
            <li><a href="index.html" class="nav-link ">Home</a></li>
            <li><a href="agendar.php" class="nav-link">Agendamento</a></li>
            <li><a href="agenda.php" class="nav-link">Agenda</a></li>
            <li><a href="cadastrar_usuarios.php" class="nav-link">Cadastrar</a></li>
            <li><a href="lista_de_agendamento.php" class="nav-link">Lista de Agendamento</a></li>
        </ul>
    </div>

<button id="toggleSidebar">☰</button>

<div class="content" id="content">
    <div class="login-container">
        <div class="login-image">
            <img src="3121d66d-7f92-4f4b-af97-dfec48c02adc.png" alt="">
        </div>
       
        <div class="login-form">
            <?php
        if(isset($_GET['status']) && $_GET['status'] == 1)
            echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Successo!</strong> O agendamento foi criado com sucesso.
            </div>';

            ?>
            <h2>Cadastro do Usuário</h2>
            <form action="cadastrar_usuario.php" method="post">
                <div class="mb-3">
                    <label for="tipo">Tipo:</label>
                    <select class="form-select" name="id_grupo">
                        <option>Selecione o grupo</option>
                        <option value="1">Admin</option>
                        <option value="2">Barbeiro</option>
                        <option value="3">Cliente</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nome">Nome do Usuário:</label>
                    <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome">
                </div>
                <div class="mb-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Digite o e-mail" name="email">
                </div>
                <div class="mb-3">
                    <label for="data_de_nascimento">Data de Nascimento:</label>
                    <input type="date" class="form-control" id="data_de_nascimento" name="data_de_nascimento">
                </div>
                <div class="mb-3">
                    <label for="nome_do_banco">Nome do Banco:</label>
                    <select id="nome_do_banco" name="nome_do_banco" class="form-select">
                        <option>Selecione um Banco</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="numero_agencia">Número da Agência:</label>
                    <input type="text" class="form-control" id="numero_agencia" placeholder="Digite o número da agência" name="numero_agencia">
                </div>
                <div class="mb-3">
                    <label for="numero_conta">Número da Conta:</label>
                    <input type="number" class="form-control" id="numero_conta" placeholder="Digite o número da conta" name="numero_conta">
                </div>
                <div class="mb-3">
                    <label for="chave_pix">Chave Pix:</label>
                    <input type="text" class="form-control" id="chave_pix" placeholder="Digite a chave PIX" name="chave_pix">
                </div>
                <button  type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>

<script>

    const toggleButton = document.getElementById('toggleSidebar');
    const sidebar = document.querySelector('.sidebar');

    toggleButton.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
    });
</script>
  <script src="bancos.js"></script>
</body>
</html>
