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
    <header>
        <class="container">
            <nav>
                <ul>
                <a href=<?php echo isset($_SESSION['id']) ? 'dashboard.php' : 'login.php'; ?>>
                    <img src="icons/login_icon.png" alt="Login" class="login">
                </a>
                </ul>
                
                <ul>
                <a href="#">
                    <img src="icons/search_icon.png" alt="Search" class="search">
                </a>
                </ul>

                <ul>
                <a href="#">
                    <img src="icons/cart_icon.png" alt="Cart" class="cart">
                </a>
                </ul>
            </nav>
            <a href="index.php">
                <img src="icons/stackz_logo.png" alt="Logo" class="logo">
            </a>
        </div>
    </header>
    <h2>
    <a href="logout.php">LOGOUT</a>
    </h2>
</body>
</html>