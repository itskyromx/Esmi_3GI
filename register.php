<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registo | Stackz Clothing</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="icon" href="icons/favicon.ico">
</head>

<body>
    <!-- HEADER -->
    <header>
        <class="container">
            <nav>
                <!-- ICON LOGIN -->
                <ul>
                <a href=<?php echo isset($_SESSION['id']) ? 'dashboard.php' : 'login.php'; ?>>
                    <img src="icons/login_icon.png" alt="Login" class="login">
                </a>
                </ul>
                
                <!-- ICON SEARCH -->
                <ul>
                <a href="#">
                    <img src="icons/search_icon.png" alt="Search" class="search">
                </a>
                </ul>

                <!-- ICON CART -->
                <ul>
                <a href="#">
                    <img src="icons/cart_icon.png" alt="Cart" class="cart">
                </a>
                </ul>
            </nav>

            <!-- LOGO -->
            <a href="index.php">
                <img src="icons/stackz_logo.png" alt="Logo" class="logo">
            </a>

            <!-- SEC VESTUÁRIO -->
            <ul>
                <a href="vest.php" class="vestuario" >VESTUÁRIO</a>
            </ul>

            <!-- SEC ACESSÓRIOS -->
            <ul>
                <a href="acess.php" class="acess">ACESSÓRIOS</a>
            </ul>
        </div>
    </header>
    <!-- HEADER -->

    <!-- REGISTER -->
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="verify_register.php" method="POST">
                <h1>Registo</h1>
                <div class="space">
                </div>
                <input type="text" name="username" placeholder="Insere o teu nome">
                <input type="email" name="email" placeholder="Insere o teu email">
                <input type="password" name="password" placeholder="Insere a password">
                <button type="submit" name="register" type="register">Registrar</button>
                <div class="space">
                </div>
                <a href="login.php">Já tem conta?</a>
            </form>
        </div>
    </div>
    <!-- REGISTER -->

    <!-- FOOTER -->
    <footer>
        <div class="footer-container">
            <p>&copy; 2025 Stackz Clothing. Todos os direitos reservados.</p>
            <ul>
                <li><a href="privacy.php">Política de Privacidade</a></li>
                <li><a href="terms.php">Termos de Uso</a></li>
            </ul>
        </div>
    </footer>
    <!-- FOOTER -->
</body>
</html>