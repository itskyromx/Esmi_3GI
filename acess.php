<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessórios | Stackz Clothing</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="icons/favicon.ico">
</head>
<body>
    <!-- HEADER -->
    <header>
        <class="container">
            <nav>
                <!-- LOGIN -->
                <ul>
                <a href=<?php echo isset($_SESSION['id']) ? 'dashboard.php' : 'login.php'; ?>>
                    <img src="icons/login_icon.png" alt="Login" class="login">
                </a>
                </ul>
                
                <!-- SEARCH -->
                <ul>
                <a href="#">
                    <img src="icons/search_icon.png" alt="Search" class="search">
                </a>
                </ul>

                <!-- CART -->
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

</body>
</html>