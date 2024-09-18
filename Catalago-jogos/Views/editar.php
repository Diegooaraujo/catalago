<?php
    require_once 'Conexao.php';

    $id = filter_input(INPUT_GET,'id');
    

    if($id){
        $stmt = new Conexao;
        $stmt->getConexao();
        $jogo = $stmt->editarJogoPlay($id);
        

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
    <link rel="stylesheet" href="editar.css">
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
        <p>processador: <?=$jogo['processador']?></p>
        <p>Placa de Video: <?=$jogo['placa_video']?></p>
        <p>Memoria: <?=$jogo['memoria']?></p>
        <p>Armazenamento: <?=$jogo['armazenamento']?></p>
    </div>

    <form method="POST" action="editarAction.php" enctype="multipart/form-data" >

        <input type="hidden" name="id" value="<?=$jogo['fk_id']?>">

        <label for="nome">
            Nome:<input type="text" name="nome" id="nome">
        </label>

        <label for="imagem" id="imagem-label">
            imagem: <input type="file" name="imagem" id="imagem">
        </label>

        <label for="textarea"></br>Descrição: </label>
        <textarea id='textarea' name="descricao" id=""></textarea>

        <label for="genero">Genero:</label>
        <input type="text" name="genero" id="genero">

        <h2>Requisitos:</h2>
    <label for="os">Os:</label>
        <input type="text" name="os" id="os">

        <label for="processador">Processador:</label>
        <input type="text" name="processador" id="processador">

        <label for="placa">Placa de video:</label>
        <input type="text" name="placa" id="placa">

        <label for="memoria">Memoria:</label>
        <input type="text" name="memoria" id="memoria">

        <label for="armazenamento">Armazenamento:</label>
        <input type="text" name="armazenamento" id="armazenamento">
        <button>atualizar</button>
        
    </form>

</div>

</body>
</html>



