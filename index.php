<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet">
    <title>Projeto_5</title>
</head>
<body>

    <header>
        <div class="container">
            <div class="logo">
                <img src="imagens/logo.jpg">
            </div><!--logo-->

            <nav class="desktop">
                <ul>
                    <li><a style="color: #EB2D2D;" href="index.html">Home</a></li>
                    <li><a href="venda.html">Vendas</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a goto="contato" href="">Contato</a></li>
                </ul>
            </nav><!--desktop-->
            <nav class="mobile">
                <ul>
                    <li><a style="color: #EB2D2D;" href="index.html">Home</a></li>
                    <li><a href="venda.html">Vendas</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a goto="contato"href="">Contato</a></li>
                </ul>
            </nav><!--mobile-->
            <div class="clear"></div>
        </div><!--container-->
    </header>
<?php
        if(isset($_GET['url'])){
            if(file_exists($url)){
                include($url. '.html');
            }else{
                include('404.html');
            }
        }else{
            include('home.html');
        }
?>
<footer>
        <div class="container">
            <nav>
                <ul>
                    <li><a style="color: #EB2D2D;" href="index.html">Home</a></li>
                    <li><a href="venda.html">Vendas</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <p>Todos os Direitos Reservados</p>
            <div class="clear"></div>
        </div><!--container-->
    </footer>
    
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/functions.js"></script>
</body>
</html>
/*Não estar funcionando*/