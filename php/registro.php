<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- link css -->
    <link rel="stylesheet" href="../css/style.css">
   <link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="../css/login.css">

    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- titulo txt-exp -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@1,700&display=swap" rel="stylesheet">

    <!-- txt-exp -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">

</head>

<body>

    <!--sidebar-->
    <nav class="menu-lateral">
        <div class="btn-expandir">
            <i class="bi bi-list" id="btn-exp1"></i> <!-- botao de expandir sidebar -->
        </div>
        <ul>
            <li class="item-menu ativo">
                <a href="index.html">
                    <span class="icon"><i class="bi bi-house"></i></span>
                    <span class="txt-link">Home</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="/html/promocoes.html">
                    <span class="icon"><i class="bi bi-tag"></i></span>
                    <span class="txt-link">Promoções</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="/html/pontos.html">
                    <span class="icon"><i class="bi bi-trophy"></i></span>
                    <span class="txt-link">Pontos</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="/html/">
                    <span class="icon"><i class="bi bi-person"></i></span>
                    <span class="txt-link">Sobre</span>
                </a>
            </li>
    </nav>
    <!-- fim sidebar -->

    <!-- começo navbar -->
    <header class="box-navbar">
        <nav class="navbar">
            <div class="btn-expandir">
                <i class="bi bi-list" id="btn-exp"></i> <!-- botao de expandir sidebar -->
            </div>
            <div class="box-logo">
                <img src="../images/logo.png" alt="Bom Menu" class="logo" onclick="goHome()">
            </div>
            <div class="box-btn-login">
                <a href="../php/login.php">
                    <button type="button" class="btn-login">Login</button>
                </a>
            </div>
        </nav>
    </header>
    <br>
    <!-- fim navbar -->

    <!-- comeco login -->
    <div id="login">
        <fieldset>
            <form class="card" action="login.php" method="post">
                <div class="card-header">
                    <h2>Página de Registro</h2>
                </div>

                <div class="card-content">
                    <div class="card-content-area">
                        <label for="usuario">Email</label>
                        <input type="email" id="usuario" name="email" autocomplete="off">
                    </div>

                    <div class="card-content-area">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="senha" autocomplete="off">
                    </div>
                </div>

                <div class="card-footer">
                    <input name="submit" type="submit" value="Registrar" class="submit">
                    <img src="../images/logo.png" alt="">
                </div>
            </form>
        </fieldset>
    </div>
    <!-- final login -->

    <!-- Seu script PHP agora está no final do arquivo -->

    </body>

    <!-- Seu link para o script.js permanece inalterado -->
    <script src="/js/script.js"></script>
</html>

<?php
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro criado com sucesso!";
    } else {
        echo "Erro ao criar registro: " . $conn->error;
    }
}
?>