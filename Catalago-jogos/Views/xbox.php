<?php
    //  require_once '../autoload.php';
    //  $jogo = new Xbox();
    //  $jogo->getConexao();
    //  $jogosXbox = $jogo->getJogosXbox();
    //  if(!file_exists('xbox.json')){
    //     $jsonXbox = fopen("xbox.json","w+");
    //     fwrite($jsonXbox,json_encode($jogosXbox));
    //     fclose($jsonXbox);
    //  }
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Formatacao/css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../scripts/cardsXbox.js" defer ></script>
    <script src = "../scripts/filtarXbox.js" defer></script>
    <script src="../scripts/filtroRequisitos.js" defer></script>
    
    
</head>
<header>
    <div class="navbar">
        <div class="header">
            <div class="logo">
                <a href="../index.php"><img src="../Midia/img/logo.png" alt="logotipo"></a>
            </div>
            <nav class="nav">
                <ul>
                <a href="nitendo.php">
                        <li id="switch" ><i class="fa-solid fa-gamepad"></i> Nitendo </li>
                    </a>
                    <a href="playstation.php">
                        <li id="plays"><i class="fa-brands fa-playstation"></i> PlayStation</li>
                    </a>
                    <a href="xbox.php">
                        <li id="xbox"><i class="fa-brands fa-xbox"></i> Xbox</li>
                    </a>
                    <a href="pc.php">
                        <li id="pc"> <i class="fa-solid fa-desktop"></i> Pc</li>
                    </a>
                </ul>

            </nav>
            <div class="filter">
                <div class="input">
                    <div class='input-icon'>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <input type=" text" id="serch" class="input-field" placeholder="pesquisar" onkeyup="pesquisa()">
                </div>
                <ul class="items">
                    <!-- <li class="item">
                        <div class="item-img">
                            <img src="../Midia/img/img-xboxVALORANT_Logo_V.png" alt="">
                        </div>
                        <div class="item-content">
                            <h2 class="item-tile">valorant</h2>
                            <p class="item-desc">descrição</p>
                        </div>
                    </li> -->

                    <li id="no_result"><p>Nenhum resultado encontrado.</p></li>
                </ul>
                
               
            </div>
            <div class="nav-icon">
                <img id="list" src="../Midia/img/icon/list.svg"  alt="">
            </div>
        </div>

    </div>
</header>
    <!--barra lateral-->
    <div id="menuOculto" class="menuOculto">
        <span class="btnFechar" >&times;</span>
        <form class="filtroForm">
            
           

            <h2>Filtrar Por:</h2>
            <label for="requisitos" >Requisitos:</label>
            <select name="requisitos" id="requisitos">
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
            </select>

            <label for="os" id="forOs">Os:</label>
            <select name="os" id="os">
                <option value="xbox 360">Xbox 360</option>
                <option value="xbox one">Xbox One</option>
                <option value="xbox s">Xbox S</option>
                <option value="xbox x">Xbox X</option>
               
            </select>


            <label for="armazenamento" id="forArmazenamento">armazenamento:</label>
            <select name="armazenamento" id="armazenamento">
                <option value="128gb">128gb</option>
                <option value="256gb">256gb</option>
                <option value="500gb">500gb</option>
                <option value="1tb">1tb</option>
                <option value="2tb">2tb</option>
            </select>

            <label for="generoSearch" >Genero:</label>
            <select name="generoSearch" id="generoSearch">
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
            </select>

            <label for="genero" id="forGenero">Genero:</label>
            <input type="text" name="genero" id="genero">

            <button id='botao-form'>Enviar</button>
        </form>
        <div class="conteinerFiltro">
            <ul class="results">
            </ul>
        </div>
        
    </div>

    <!--fim barra lateral-->
<section id="principal">
    <h1 class="tabela xbox" >Xbox</h1>
    <div class='conteiner'>
        <!-- <div class="card">
            <div class="conteiner_img">
                <img class="img" src="god-of-war.jpg" alt="">
            </div>
            
            <button >god fo war</button>
        </div> -->

        <!-- <div class="con-jogo">
            <div class="imagem">
                <img src="god-of-war.jpg" class="img-jg" alt="">
            </div>
            <div class="conteiner-desc">
                <h1 class="title-jogo">Gof of war</h1>
                
                <p class="desc-jg">lalalalallalalalllalalalalallal</p>
                <div class="requisitos">
                    <h3>requisitos recomendados:</h3>
                    <p>intel</p>
                </div>
            </div>
            
            

        </div> -->
        
    
    </div>


</section>
<footer>
    <p>Siga-nos nas redes sociais</p>
</footer>
<!-- <script src="script.js"></script> -->
 

