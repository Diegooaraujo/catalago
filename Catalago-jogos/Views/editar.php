<?php
    require_once 'Conexao.php';

    $id = filter_input(INPUT_GET,'id');

    if($id){
        $stmt = new Conexao;
        $stmt->getConexao();
        $jogo = $stmt->editarJogoPlay($id);
    }
    else{
        header('location: admin.php');
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

    <form method="POST" action="editarAction.php" >
        <input type="hidden" name="id" value="<?=$jogo['id']?>">
        <label for="">
            Nome:<input type="text" name="nome">
        </label>

        <label for="">
            imagem: <input type="imagem" name="imagem">
        </label>

        <label for="textarea"></br>Descrição: </label>
        <textarea id='textarea' name="descricao" id=""></textarea>
        <button>atualizar</button>
        
    </form>

</div>

</body>
</html>



