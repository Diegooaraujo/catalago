
<?php
    require_once './autoload.php';
    $con = new Conexao();
    $con->getConexao();
    $play = new Playstation();
    $play->getConexao();
    $jogosPlay = $play->getJogosPlay();
  
    $nitendo = new Nitendo();
    $nitendo->getConexao();
    $jogosNitendo = $nitendo->getJogosNitendo();
    

    $xbox = new Xbox;
    $xbox->getConexao();
    $jogosXbox =$xbox->getJogosXbox();

    $pc = new Pc;
    $pc->getConexao();
    $jogosPc = $pc->getJogosPc();

    if(0 == 0){

        if(file_exists('./Views/playstation.json')){
            $caminhoP = './Views/playstation.json';
            unlink($caminhoP);
        }
        if(file_exists('./Views/nitendo.json')){
            $caminhoN ='./Views/nitendo.json';
            unlink($caminhoN);  
        }
        if(file_exists('./Views/xbox.json')){
            $caminhoB = './Views/xbox.json';
            unlink($caminhoB);
        }
        if(file_exists('./Views/pc.json')){
            $caminhoPc = './Views/pc.json';
            unlink($caminhoPc);
        }
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="Formatacao/css/index.css">
    <script src="./scripts/slide.js" defer></script>
    <script src="./scripts/carregar-banco.js" defer type="module"></script>

    
</head>
<body>
    <div class="navbar">
        <div class="header">
            <div class="logo">
                <img src="Midia/img/logo.png" alt="logotipo">
            </div>
            <nav class="nav">
                <ul>
                    
                    <a href="Views/playstation.php"><li id="plays"><i class="fa-brands fa-playstation"></i> PlayStation</li></a>
                    <a href="Views/xbox.php"> <li id="xbox"><i class="fa-brands fa-xbox"></i> Xbox</li></a>
                    <a href="Views/nitendo.php"><li id="switch"><i class="fa-solid fa-gamepad"></i> Nitendo </li></a>
                    <a href="Views/pc.php"><li id="pc"> <i class="fa-solid fa-desktop"></i> Pc</li></a>
                   
                    
                </ul>

            </nav>
            <div class="nav-icon">
                <img id="list" src="Midia/img/icon/list.svg" alt="">
            </div>
        </div>

    </div>
    <header >
        <section class="slider">
            <div class="slider-content">
                <input type="radio" name="btn-radio" id="radio1" >
                <input type="radio" name="btn-radio" id="radio2" >
                <input type="radio" name="btn-radio" id="radio3" >
                <!--imagens-->
                <div class="slide-box primeiro">
                    <a href="#"><img class="img-desktop" src="Midia/img/slide/nitendo.png" alt="slide 1"></a>
                </div>

                <div class="slide-box">
                    <a href="../Catalago-jogos/Views/playstation.html"><img class="img-desktop" src="Midia/img/slide/playstation.png" alt="slide 1"></a>
                </div>

                <div class="slide-box">
                    <a href="#"><img class="img-desktop" src="Midia/img/slide/xbox.png" alt="slide 1"></a>
                </div>

                <!--nav-auto-->

                <div class="nav-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                </div>

                <div class="nav-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                </div>
            </div>

        </section>

    </header>
    <section>
        <div class="conteiner">
            <div class="play">
                <div class="jogos">
                    <img class="img" src="Midia/img/<?php echo $jogosPlay[0]['nome_imagem']?>" alt="<?php echo $jogosPlay[0]['nome_imagem']?>">
                    <h3 class="titleJogo"><?php echo $jogosPlay[0]['nome']?></h3>
                </div>
                <div class="jogos">
                    <img class="img" src="Midia/img/<?php echo $jogosPlay[1]['nome_imagem']?>" alt="<?php echo $jogosPlay[1]['nome_imagem']?>">
                    <h3 class="titleJogo"><?php echo $jogosPlay[1]['nome']?></h3>
                </div>
                <div class="jogos"> 
                    <img class="img" src="Midia/img/<?php echo  $jogosPlay[2]['nome_imagem']?>" alt="<?php echo $jogosPlay[2]['nome_imagem']?>">
                    <h3 class="titleJogo"><?php echo $jogosPlay[2]['nome']?></h3>
                </div>
                <div class="jogos"><div class="img" ><a href="Views/playstation.html" id="vermais">Ver todos os jogos desta coleção</a></div></div>
                
            </div>
            <div class="nitendo">
                <div class="jogos"> <img class="img" src="Midia/img/img_nitendo/<?php echo $jogosNitendo[0]['nome_imagem']?>" alt="<?php echo $jogosNitendo[0]['nome_imagem']?>">
                <h3 class="titleJogo"><?php echo $jogosNitendo[0]['nome']?></h3>
            </div>
                <div class="jogos"> <img class="img" src="Midia/img/img_nitendo/<?php echo $jogosNitendo[1]['nome_imagem']?>" alt="<?php echo $jogosNitendo[1]['nome_imagem']?>">
                <h3 class="titleJogo"><?php echo $jogosNitendo[1]['nome']?></h3></div>
                <div class="jogos"> <img class="img" src="Midia/img/img_nitendo/<?php echo $jogosNitendo[2]['nome_imagem']?>" alt="<?php echo $jogosNitendo[2]['nome_imagem']?>">
                <h3 class="titleJogo"><?php echo $jogosNitendo[2]['nome']?></h3></div>
                <div class="jogos"><div class="img" ><p id="vermais">Ver todos os jogos desta coleção</p></div></div>
            </div>
            <div class="xbox">
                <div class="jogos"><img class="img" src="Midia/img/img_xbox/<?php echo $jogosXbox[0]['nome_imagem']?>" alt="<?php echo $jogosXbox[0]['nome_imagem']?>">
                <h3 class="titleJogo"><?php echo $jogosXbox[0]['nome']?></h3></div>
                <div class="jogos"><img class="img" src="Midia/img/img_xbox/<?php echo $jogosXbox[1]['nome_imagem']?>" alt="<?php echo $jogosXbox[1]['nome_imagem']?>">
                <h3 class="titleJogo"><?php echo $jogosXbox[1]['nome']?></h3></div>
                <div class="jogos"><img class="img" src="Midia/img/img_xbox/<?php echo $jogosXbox[2]['nome_imagem']?>" alt="<?php echo $jogosXbox[2]['nome_imagem']?>">
                <h3 class="titleJogo"><?php echo $jogosXbox[2]['nome']?></h3></div>
                <div class="jogos"><div class="img" ><p id="vermais">Ver todos os jogos desta coleção</p></div></div>
            </div>
            <div class="pc">
                <div class="jogos">
                    <img class="img" src="Midia/img/img_pc/<?php echo $jogosPc[0]['nome_imagem']?>" alt="<?php echo $jogosPc[0]['nome_imagem']?>">
                    <h3 class="titleJogo"><?php echo $jogosPc[0]['nome']?></h3>
                </div>
                <div class="jogos">
                    <img class="img" src="Midia/img/img_pc/<?php echo $jogosPc[1]['nome_imagem']?>" alt="<?php echo $jogosPc[1]['nome_imagem']?>">
                    <h3 class="titleJogo"><?php echo $jogosPc[1]['nome']?></h3>
                </div>
                <div class="jogos">
                    <img class="img" src="Midia/img/img_pc/<?php echo $jogosPc[2]['nome_imagem']?>" alt="<?php echo $jogosPc[2]['nome_imagem']?>">
                    <h3 class="titleJogo"><?php echo $jogosPc[2]['nome']?></h3>
                </div>
                <div class="jogos"><div class="img" ><p id="vermais">Ver todos os jogos desta coleção</p></div></div>
            </div>
        </div>
    </section>
    <footer>
        <p>Siga-nos nas redes sociais</p>
    </footer>
</body>
</html>
