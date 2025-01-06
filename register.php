<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | Stackz Clothing</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="icon" type="image\x-icon" href="image/favicon.ico">
</head>

<body>
    <header>
        <class="container">
            <nav>
                <ul>
                <a href=<?php echo isset($_SESSION['id']) ? 'dashboard.php' : 'login.php'; ?>>
                    <img src="image/login_icon.png" alt="Login" class="login">
                </a>
                </ul>
                
                <ul>
                <a href="#">
                    <img src="image/search_icon.png" alt="Search" class="search">
                </a>
                </ul>

                <ul>
                <a href="#">
                    <img src="image/cart_icon.png" alt="Cart" class="cart">
                </a>
                </ul>
            </nav>
            <a href="index.php">
                <img src="image/stackz_logo.png" alt="Logo" class="logo">
            </a>
        </div>
    </header>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="verify_register.php" method="POST">
                <h1>Registro</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                </div>
                <input type="text" name="username" placeholder="Insere o teu nome">
                <input type="email" name="email" placeholder="Insere o teu email">
                <input type="password" name="password" placeholder="Insere a password">
                <button type="submit" name="register" type="register">Registro</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <p>&copy; 2024 Stackz Clothing. Todos os direitos reservados.</p>
            <ul>
                <li><a href="privacy.php">Política de Privacidade</a></li>
                <li><a href="terms.php">Termos de Uso</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>