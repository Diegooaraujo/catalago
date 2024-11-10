
<?php
    require_once './autoload.php';
    $con = new Conexao();
    $con->getConexao();
    $play = new Playstation();
    $play->getConexao();
    $jogosPlay = $play->getJogosPlay();
     if(!file_exists('playstation.json')){
        $jsonPlay = fopen("playstation.json","w+");
        fwrite($jsonPlay,json_encode($jogosPlay));
        fclose($jsonPlay);
     }else{
        $caminhoN ='playstation.json';
        unlink($caminhoN);
        $jsonPlay = fopen("playstation.json","w+");
        fwrite($jsonPlay,json_encode($jogosPlay));
        fclose($jsonPlay);
    }
  
    $nitendo = new Nitendo();
    $nitendo->getConexao();
    $jogosNitendo = $nitendo->getJogosNitendo();
    if(!file_exists('nitendo.json')){
        $jsonNitendo = fopen("nitendo.json","w+");
        fwrite($jsonNitendo,json_encode($jogosNitendo));
        fclose($jsonNitendo);
    }else{
        $caminhoN ='nitendo.json';
        unlink($caminhoN);
        $jsonNitendo = fopen("nitendo.json","w+");
        fwrite($jsonNitendo,json_encode($jogosNitendo));
        fclose($jsonNitendo); 
    }
    

    $xbox = new Xbox;
    $xbox->getConexao();
    $jogosXbox =$xbox->getJogosXbox();
    if(!file_exists('xbox.json')){
        $jsonXbox = fopen("xbox.json","w+");
        fwrite($jsonXbox,json_encode($jogosXbox));
        fclose($jsonXbox);
    }else{
        $caminhoX ='xbox.json';
        unlink($caminhoX);
        $jsonXbox = fopen("xbox.json","w+");
        fwrite($jsonXbox,json_encode($jogosXbox));
        fclose($jsonXbox); 
    }

    $pc = new Pc;
    $pc->getConexao();
    $jogosPc = $pc->getJogosPc();
    if(!file_exists('pc.json')){
        $jsonPc = fopen("pc.json","w+");
        fwrite($jsonPc,json_encode($jogosPc));
        fclose($jsonPc);
    }else{
        $caminhoPc = 'pc.json';
        unlink($caminhoPc);
        $jsonPc = fopen("pc.json","w+");
        fwrite($jsonPc,json_encode($jogosPc));
        fclose($jsonPc);
    }

         
    // if(0 == 0){

    //     if(file_exists('./Views/playstation.json')){
    //         $caminhoP = './Views/playstation.json';
    //         unlink($caminhoP);
    //     }
    //     if(file_exists('./Views/nitendo.json')){
    //         $caminhoN ='./Views/nitendo.json';
    //         unlink($caminhoN);  
    //     }
    //     if(file_exists('./Views/xbox.json')){
    //         $caminhoB = './Views/xbox.json';S
    //         unlink($caminhoB);
    //     }
    //     if(file_exists('./Views/pc.json')){
    //         $caminhoPc = './Views/pc.json';
    //         unlink($caminhoPc);
    //     }
    // }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="Formatacao/css/index.css">
    <script src="./scripts/cardsIndex.js" defer></script>
    <script src="./scripts/slide.js" defer></script>
    <script src = "./scripts/filtrarIndex.js" defer></script>
    
    

    
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
                    <a href="./Views/nitendo.php"><img class="img-desktop" src="Midia/img/slide/nitendo.png" alt="slide 1"></a>
                </div>

                <div class="slide-box">
                    <a href="./Views/playstation.php"><img class="img-desktop" src="Midia/img/slide/playstation.png" alt="slide 1"></a>
                </div>

                <div class="slide-box">
                    <a href="./Views/xbox.php"><img class="img-desktop" src="Midia/img/slide/xbox.png" alt="slide 1"></a>
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
                <div class="jogosTitle">
                    <h1><i class="fa-brands fa-playstation"></i> Playstation</h1>
                </div>
                <div class="conteinerJg">
                    <div class="jogos">
                        <img class="img" src="./Midia/img/img_playstation/<?php echo $jogosPlay[0]['nome_imagem']?>" alt="<?php echo $jogosPlay[0]['nome_imagem']?>">
                        <button class="titleJogo playstation" id="<?php echo$jogosPlay[0]['fk_id'] ?>"><?php echo $jogosPlay[0]['nome']?> </button>
                    </div>
                    <div class="jogos">
                        <img class="img" src="Midia/img/img_playstation/<?php echo $jogosPlay[1]['nome_imagem']?>" alt="<?php echo $jogosPlay[1]['nome_imagem']?>">
                        <button class="titleJogo playstation" id="<?php echo$jogosPlay[1]['fk_id'] ?>"><?php echo $jogosPlay[1]['nome']?> </button>
                    </div>
                    <div class="jogos"> 
                        <img class="img" src="Midia/img/img_playstation/<?php echo  $jogosPlay[2]['nome_imagem']?>" alt="<?php echo $jogosPlay[2]['nome_imagem']?>">
                        <button class="titleJogo playstation" id="<?php echo$jogosPlay[2]['fk_id'] ?>"><?php echo $jogosPlay[2]['nome']?> </button>
                    </div>
                    <div class="jogos"><div class="img" ><a href="Views/playstation.php" class="vermais">Ver todos os jogos desta coleção</a></div></div>
                </div>
                
                
            </div>
            <div class="nitendo">
                <div class="jogosTitle">
                    <h1><i class="fa-solid fa-gamepad"></i> Nitendo</h1>
                </div>
                <div class="conteinerJg">
                    <div class="jogos">
                        <img class="img" src="Midia/img/img_nitendo/<?php echo $jogosNitendo[0]['nome_imagem']?>" alt="<?php echo $jogosNitendo[0]['nome_imagem']?>">
                        <button class="titleJogo nitendos" id="<?php echo$jogosNitendo[0]['fk_id'] ?>"><?php echo $jogosNitendo[0]['nome']?> </button>
                    </div>
                    <div class="jogos"> 
                        <img class="img" src="Midia/img/img_nitendo/<?php echo $jogosNitendo[1]['nome_imagem']?>" alt="<?php echo $jogosNitendo[1]['nome_imagem']?>">
                        <button class="titleJogo nitendos" id="<?php echo$jogosNitendo[1]['fk_id'] ?>"><?php echo $jogosNitendo[1]['nome']?> </button>
                    </div>
                    <div class="jogos">
                        <img class="img" src="Midia/img/img_nitendo/<?php echo $jogosNitendo[2]['nome_imagem']?>" alt="<?php echo $jogosNitendo[2]['nome_imagem']?>">
                        <button class="titleJogo nitendos" id="<?php echo$jogosNitendo[2]['fk_id'] ?>"><?php echo $jogosNitendo[2]['nome']?> </button>
                    </div>
                    <div class="jogos">
                        <div class="img" ><a href="./Views/nitendo.php" class="vermais">Ver todos os jogos desta coleção</a></div>
                    </div>
                </div>
            </div>
            <div class="xbox">
                <div class="jogosTitle">
                    <h1><i class="fa-brands fa-xbox"></i> Xbox</h1>
                </div>
                <div class="conteinerJg">
                    <div class="jogos">
                        <img class="img" src="Midia/img/img_xbox/<?php echo $jogosXbox[0]['nome_imagem']?>" alt="<?php echo $jogosXbox[0]['nome_imagem']?>">
                        <button class="titleJogo xboxs" id="<?php echo$jogosXbox[0]['fk_id'] ?>"><?php echo $jogosXbox[0]['nome']?></button>
                    </div>
                    <div class="jogos">
                        <img class="img" src="Midia/img/img_xbox/<?php echo $jogosXbox[1]['nome_imagem']?>" alt="<?php echo $jogosXbox[1]['nome_imagem']?>">
                        <button class="titleJogo xboxs" id="<?php echo$jogosXbox[1]['fk_id'] ?>"><?php echo $jogosXbox[1]['nome']?> </button>
                    </div>
                    <div class="jogos">
                        <img class="img" src="Midia/img/img_xbox/<?php echo $jogosXbox[2]['nome_imagem']?>" alt="<?php echo $jogosXbox[2]['nome_imagem']?>">
                        <button class="titleJogo xboxs" id="<?php echo$jogosXbox[2]['fk_id'] ?>"><?php echo $jogosXbox[2]['nome']?> </button>
                    </div>
                    <div class="jogos">
                        <div class="img" ><a href="./Views/xbox.php" class="vermais">Ver todos os jogos desta coleção</a></div>
                    </div>
                </div>
                
            </div>
            <div class="pc">
                <div class="jogosTitle">
                    <h1><i class="fa-solid fa-computer"></i> Pc</h1>
                </div>
                <div class="conteinerJg">
                    <div class="jogos">
                        <img class="img" src="Midia/img/img_pc/<?php echo $jogosPc[0]['nome_imagem']?>" alt="<?php echo $jogosPc[0]['nome_imagem']?>">
                        <button class="titleJogo pcs" id="<?php echo$jogosPc[0]['fk_id'] ?>"><?php echo $jogosPc[0]['nome']?> </button>
                    </div>
                    <div class="jogos">
                        <img class="img" src="Midia/img/img_pc/<?php echo $jogosPc[1]['nome_imagem']?>" alt="<?php echo $jogosPc[1]['nome_imagem']?>">
                        <button class="titleJogo pcs" id="<?php echo$jogosPc[1]['fk_id'] ?>"><?php echo $jogosPc[1]['nome']?> </button>
                    </div>
                    <div class="jogos">
                        <img class="img" src="Midia/img/img_pc/<?php echo $jogosPc[2]['nome_imagem']?>" alt="<?php echo $jogosPc[2]['nome_imagem']?>">
                        <button class="titleJogo pcs" id="<?php echo$jogosPc[1]['fk_id'] ?>"><?php echo $jogosPc[1]['nome']?> </button>
                    </div>
                    <div class="jogos"><div class="img" ><a href="./Views/pc.php" class="vermais">Ver todos os jogos desta coleção</a></div></div>
                </div>

            </div>
        </div>
    </section>
    <footer>
        <p>Siga-nos nas redes sociais</p>
    </footer>
</body>
</html>
