<?php

    if(isset($_POST['submit']))
    {
        print_r($_POST['usuario']);
        print_r($_POST['senha']);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- link css -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/rodape.css ">

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
                <img src="/images/logo.png" alt="Bom Menu" class="logo" onclick="goHome()">
            </div>
            <div class="box-btn-login">
                <a href="#">
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
                <h2>Página de login</h2>
                <h3>Faça seu login para acessar nosso cardápio</h3>
            </div>

            <div class="card-content">
                <div class="card-content-area">
                    <label for="usuario">Email</label>
                    <input type="email" id="usuario" name="usuario" autocomplete="off">
                </div>

                <div class="card-content-area">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="senha" autocomplete="off">
                </div>
            </div>

            <div class="card-footer">
                <input name="submit" type="submit" value="Acessar" class="submit">
                <div style="align-items: center; justify-content: center; display: flex; margin: 10px;">- OU -</div>

                <div class="crie-aqui">
                    <div>Não tem conta? <a>Crie aqui</a></div>
                </div>

                <a href="#" class="recuperar_senha">Esqueceu sua senha?</a>
                <img src="/images/logo.png" alt="">
            </div>
        </form>
    </fieldset>
</div>

    <!-- final login -->


    <!-- linkando o php -->



    <script src="/js/script.js"></script>

    </script>
</body>

</html>