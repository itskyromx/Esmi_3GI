<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/>
    <title>Stackz Clothing</title>
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

    <video autoplay loop playsinline muted id="VideoFixe">
        <source src="videos/davidcoco.mp4" type="video/mp4">
    </video>

    <section id="home" class="hero">
        <div class="container">
            <h2>Bem-vindo à Stackz Clothing</h2>
            <p>Explore nossos produtos exclusivos.</p>
            <a href="#produtos" class="btn">Ver Produtos</a>
        </div>
    </section>

    <section id="produtos" class="produtos">
        <div class="container">
            <h2>Produtos</h2>
            <div class="grid">
                <?php
                // Simulação de produtos dinâmicos
                $produtos = [
                    ["nome" => "Shape Pro Model", "preco" => "R$ 299,90"],
                    ["nome" => "Camiseta Skate Co.", "preco" => "R$ 99,90"],
                    ["nome" => "Boné Original", "preco" => "R$ 79,90"],
                ];

                foreach ($produtos as $produto) {
                    echo "<div class='produto'>";
                    echo "<h3>{$produto['nome']}</h3>";
                    echo "<p>{$produto['preco']}</p>";
                    echo "<a href='#' class='btn'>Comprar</a>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </section>

    <section id="sobre" class="sobre">
        <div class="container">
            <h2>Sobre Nós</h2>
            <p>Somos apaixonados pelo skate e dedicados a oferecer produtos de alta qualidade para skatistas de todos os níveis.</p>
        </div>
    </section>

    <section id="contato" class="contato">
        <div class="container">
            <h2>Contato</h2>
            <form action="contato.php" method="post">
                <input type="text" name="nome" placeholder="Seu Nome" required>
                <input type="email" name="email" placeholder="Seu Email" required>
                <textarea name="mensagem" placeholder="Sua Mensagem" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Stackz Clothing. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>