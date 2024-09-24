

    



<?php

    require_once 'Views/autoload.php';
    require_once 'Views/Conexao.php';

        

    $con = new Conexao();
    $con->getConexao();
    $jogos = $con->getJogos(PDO::FETCH_ASSOC);
    $json = fopen("dados.json","w+");
    fwrite($json,json_encode($jogos));
    fclose($json);
   




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="Formatacao/css/index.css">
    <script src="slide.js" defer></script>
    
</head>
<body>
    <div class="navbar">
        <div class="header">
            <div class="logo">
                <img src="Midia/img/logo.png" alt="logotipo">
            </div>
            <nav class="nav">
                <ul>
                    <li id="switch"><i class="fa-solid fa-gamepad"></i> Nitendo </li>
                    <a href="Views/playstation.html"><li id="plays"><i class="fa-brands fa-playstation"></i> PlayStation</li></a>
                    <li id="xbox"><i class="fa-brands fa-xbox"></i> Xbox</li>
                    <li id="pc"> <i class="fa-solid fa-desktop"></i> Pc</li>
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
                    <img class="img" src="Midia/img/<?php echo $jogos[0]['nome_imagem']?>" alt="<?php echo $jogos[0]['nome_imagem']?>">
                    <h3 class="titleJogo"><?php echo $jogos[0]['nome']?></h3>
                </div>
                <div class="jogos">
                    <img class="img" src="Midia/img/<?php echo $jogos[1]['nome_imagem']?>" alt="<?php echo $jogos[1]['nome_imagem']?>">
                    <h3 class="titleJogo"><?php echo $jogos[1]['nome']?></h3>
                </div>
                <div class="jogos"> 
                    <img class="img" src="Midia/img/<?php echo  $jogos[2]['nome_imagem']?>" alt="<?php echo $jogos[2]['nome_imagem']?>">
                    <h3 class="titleJogo"><?php echo $jogos[2]['nome']?></h3>
                </div>
                <div class="jogos"><div class="img" ><a href="Views/playstation.html" id="vermais">Ver todos os jogos desta coleção</a></div></div>
                
            </div>
            <div class="nitendo">
                <div class="jogos"><div class="img" id="superMario"></div></div>
                <div class="jogos"><div class="img" id="pokemon"></div></div>
                <div class="jogos"><div class="img" id="hyrule"></div></div>
                <div class="jogos"><div class="img" ><p id="vermais">Ver todos os jogos desta coleção</p></div></div>
            </div>
            <div class="xbox">
                <div class="jogos"><div class="img" id="fc24"></div></div>
                <div class="jogos"><div class="img" id="payDay"></div></div>
                <div class="jogos"><div class="img" id="seaOfThieves"></div></div>
                <div class="jogos"><div class="img" ><p id="vermais">Ver todos os jogos desta coleção</p></div></div>
            </div>
            <div class="pc">
                <div class="jogos"><div class="img" id="gta"></div></div>
                <div class="jogos"><div class="img" id="valorant"></div></div>
                <div class="jogos"><div class="img" id="read_dead"></div></div>
                <div class="jogos"><div class="img" ><p id="vermais">Ver todos os jogos desta coleção</p></div></div>
            </div>
        </div>
    </section>
    <footer>
        <p>Siga-nos nas redes sociais</p>
    </footer>
</body>
</html>

