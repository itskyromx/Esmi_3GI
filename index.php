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
    <link rel="stylesheet" href="css/styles.css"/>
    <title>Stackz Clothing</title>
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
              <a href="acess.php" class="acess" >ACESSÓRIOS</a>
            </ul>
    </header>
    <!-- HEADER -->

    <!-- VIDEO -->
    <video autoplay loop playsinline muted id="VideoFixe">
        <source src="videos/davidcoco.mp4" type="video/mp4">
    </video>
    <!-- VIDEO -->

    <section id="home" class="hero">
        <div class="container">
            <h2>Bem-vindo à Stackz Clothing</h2>
            <p>Explore nossos produtos exclusivos.</p>
            <a href="#produtos" class="btn">Ver Produtos</a>
        </div>
    </section>

    <!-- PRODUTOS -->
    <section id="produtos" class="produtos">
        <div class="container">
            <h2>Produtos</h2>
            <div class="grid">
            <div class="product-center">
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/shirt-1.png" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>SHIRTS</span>
            <a href="" class="hyperlink">Brown Mitchell Shirt</a>
            <h4>45€</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/hoodie.png" alt="" />
            </a>
          </div>

          <div class="product-info">
            <span>HOODIES</span>
            <a href="">Team AOP Hoodie - Roxo</a>
            <h4>70€</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/jacket-1.png" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>JACKETS</span>
            <a href="">Carhartt Helson Jacket - Preto</a>
            <h4>115€</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/tshirt-1.png" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>SHIRTS</span>
            <a href="">Ringer Tee - Cloud White/Navy</a>
            <h4>40€</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/jeans-1.png" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>JEANS</span>
            <a href="">Spider Denim Jeans - Castanho</a>
            <h4>110€</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/jorts-1.png" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>JORTS</span>
            <a href="">Garyville Jorts - Azul</a>
            <h4>60€</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/socks-1.png" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>SOCKS</span>
            <a href="">Meias com Logo - Brancas</a>
            <h4>14€</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/jeans-2.png" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>JEANS</span>
            <a href="">Big Boy Jeans - Vermelho</a>
            <h4>135€</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
      </div>
    </section>
    <!-- PRODUTOS -->

    <!-- SOBRE -->
    <section id="sobre" class="sobre">
        <div class="container">
            <h2>Sobre Nós</h2>
            <p></p>
        </div>
    </section>
    <!-- SOBRE -->

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