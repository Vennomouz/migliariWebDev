<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Migliari Web Dev</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="fontawesome/css/all.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Vesper+Libre:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
    </head>

    <header>
        <div class="menuPrincipal" id="home">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#content">Sobre mim</a></li>
                <li><a href="">Serviços</a></li>
            </ul>
            <div class="iconRedes">
                <a href="https://www.facebook.com/julio.augusto.12576"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/julio_migliari/"><i class="fab fa-instagram"></i></a>        
                <a href="https://www.linkedin.com/in/julio-migliari-ab4783159/"><i class="fab fa-linkedin-in"></i></i></a>
                <a href="https://github.com/Vennomouz"><i class="fab fa-github"></i></a>
            </div>
        </div>
        <div class="menuMobile">
            <ul>
                <li><i class="fas fa-bars" onclick="clickMenu()"></i></li>
            </ul>
            <div class="itensMenumobile">
                <ul>
                    <li><i class="fas fa-home"></i> Home</li>
                    <li><i class="fas fa-mug-hot"></i> Sobre mim</li>
                    <li><i class="fas fa-file-code"></i> Serviços</li>
                    <li><a href="https://www.facebook.com/julio.augusto.12576"><i class="fab fa-facebook"></i></a> Facebook</li>
                    <li><a href="https://www.instagram.com/julio_migliari/"><i class="fab fa-instagram"></i></a> Instagram</li>
                    <li><a href="https://www.linkedin.com/in/julio-migliari-ab4783159/"><i class="fab fa-linkedin-in"></i></a> LinkedIn</li>
                    <li><a href="https://github.com/Vennomouz"><i class="fab fa-github"></i></a> GitHub</li>
                </ul>
            </div>
        </div>
        
        <div class="tituloBanner">
            <h1>Soluções em Desenvolvimento Web</h1>
            <h2><a>user.name</a> = "Julio Migliari"</h2>
        </div>
    </header>

    <body>
        <div class="content" id="content">
            <div class="sobreMim">
                <div class="profilePic"><img src="imagens/profilepic.jpg" alt=""></div>
                <h2>Sobre mim</h2>
                <hr>
                <!-- <p>Meu nome é Julio Migliari, tenho 23 anos e sou programador. </p>
                <p>Estou cursando Análise e Desenvolvimento de sistemas no Instituto Federal de Educação, Ciência e Tecnologia de São Paulo</p>
                <p>Tenho alguns hobbies como tocar bateria, e alguns gostos nerds como jogar video game e assistir séries e animes.</p>
                <p>Meu principal objetivo é estar sempre me aprimorando na área da tecnologia, pois todos os dias novas tecnologias surgem no mercado.</p> -->
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
        </div>
    </body>

</html> 

<script>
    function clickMenu(e){
        e.preventDefault;
        const botaoMenuMobile = document.querySelector('itensMenumobile');

    }

</script>