<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account | Stackz Clothing</title>
    <link rel="icon" type="image\x-icon" href="icons/favicon.ico">
    <link rel="stylesheet" href="css/styles.css"/>
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
                <a href="vest.php" class="vestuario">VESTUÁRIO</a>
             </ul>

             <!-- SEC ACESSÓRIOS -->
             <ul>
                <a href="acess.php" class="acess">ACESSÓRIOS</a>
             </ul>
    </header>
    <!-- HEADER -->

    <h2>
    <a href="logout.php">LOGOUT</a>
    </h2>
</body>
</html>