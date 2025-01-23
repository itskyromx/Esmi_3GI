<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Stackz Clothing</title>
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
    </header>
    <!-- HEADER -->

    <!-- LOGIN -->
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="verifylogin.php" method="POST"> 
                <h1>Login</h1>
                <div class="space">
                </div>
                <input type="text" name="email" placeholder="Insere o email">
                <input type="password" name="password" placeholder="Insere a password">
                <button type="submit" name="login" value="login">Login</button>
                <div class="space">
                </div>
                <a href="register.php">Criar Conta</a>
            </form>
        </div>
    </div>
    <!-- LOGIN -->

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