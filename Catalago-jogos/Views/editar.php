<?php
    require_once '../autoload.php';

    $id = filter_input(INPUT_GET,'id');
    $tabela = filter_input(INPUT_GET,'tabela');

    

    if(isset($tabela)){
        if($tabela == "playstation"){
            $stmt = new Playstation;
            $stmt->getConexao();
            $jogo = $stmt->editarJogoPlay($id);
        }
        if( $tabela == "nitendo"){
            $stmt = new Nitendo;
            $stmt->getConexao();
            $jogo = $stmt->editarJogoNitendo($id);
        }
        if($tabela == 'pc'){
            $stmt = new Pc;
            $stmt->getConexao();
            $jogo = $stmt->editarJogoPc($id);
        }
        if($tabela == 'xbox'){
            $stmt = new Xbox;
            $stmt->getConexao();
            $jogo = $stmt->editarJogoXbox($id);
        }

    }
    else{
        // header('location: admin.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar jogo</title>
    <link rel="stylesheet" href="../Formatacao/css/editar.css">
    
</head>
<body>
<header>
    <nav>
        <a href="sair.php">Sair</a>
    </nav>
    <h1>Editar jogo</h1>
</header>

<div class="conteiner">

    <h1>Nome : <?= $jogo['nome'] ?></h1>
    <p>Descrição : <?=$jogo['descricao']?></p>
    <p>Imagem: <?=$jogo['nome_imagem']?></p>
    <p>Genero:<?=$jogo['genero']?></p>
    <div class="desc">
        <h3>requisitos:</h3>
        <p>Os: <?=$jogo['OS']?></p>
        
        <?php  
            if(isset($jogo['processador']) ){
                echo('<p>processador:'. $jogo['processador'].'</p>');
            }else{}
            if(isset($jogo['placa_video'])){
                echo('<p>Placa de Video:'. $jogo['placa_video'].'</p>');
            }else{};
            if(isset($jogo['memoria'])){
                echo('<p>Memoria:'. $jogo['memoria'].'</p>');
            }else{};

        
        ?>

        <p>Armazenamento: <?=$jogo['armazenamento']?></p>
    </div>

    <form method="POST" action="editarAction.php" enctype="multipart/form-data" >

        <input type="hidden" id='fk_id' name="id" value="<?=$jogo['fk_id']?>">
        <input type="hidden" name="tabela" value="<?=$tabela?>">

        <label for="nome">
            Nome:<input type="text" name="nome" id="nome" value="<?=$jogo['nome']?>">
        </label>

        <label for="imagem" id="imagem-label">
            imagem: <input type="file" name="imagem" id="imagem" value="<?=$jogo['nome_imagem']?>">
        </label>

        <label for="textarea"></br>Descrição: </label>
        <textarea id='textarea' name="descricao" ></textarea>

        <label for="genero">Genero:</label>
        <input type="text" name="genero" id="genero" >

        <h2>Requisitos:</h2>
       
        <label for="os">Os:</label>
        <input type="text" name="os" id="os" >
        
         <?php  
            if($tabela == 'pc' ){
                echo('<label for="processador">processador:</label>
                    <input type="text" name="processador" id="processador" >');

                echo('<label for="placa">Placa de Video:</label>
                    <input type="text" name="placa" id="placa">');
                
                echo('<label for="memoria">Memoria:</label>
                    <input type="text" name="memoria" id="memoria">');

            }else{} ?>
        <!-- <label for="processador">Processador:</label>
        <input type="text" name="processador" id="processador"> -->

        <!-- <label for="placa">Placa de video:</label>
        <input type="text" name="placa" id="placa">

        <label for="memoria">Memoria:</label>
        <input type="text" name="memoria" id="memoria"> -->

        <label for="armazenamento">Armazenamento:</label>
        <input type="text" name="armazenamento" id="armazenamento" >
        <button>atualizar</button>
        
    </form>

</div>

</body>
</html>



