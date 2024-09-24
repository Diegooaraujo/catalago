<?php
    require_once("Conexao.php");
    session_start();
    if(!isset($_SESSION['id_usuario'])){
        // header("location: login.php");
        exit;
    }
    $con = new Conexao;
    $con->getConexao();
    $jogosPlay = $con->getJogosplay();

    

    


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<body>
    
    <header>
        <nav>
            <a id="sair" href="sair.php">Sair</a>
            <a id='cadastrar' href="cadastrar.php">Cadastrar Jogo</a>
        </nav>
        
        <h1>Editar jogos</h1>
    </header>
    
    <div class="conteiner">
        <h2>playstation:</h2>
        <table>
            <tr>
                <th class="titulo">ID</th>
                <th class="titulo">Nome</th>
                <th class="titulo">Descrição</th>
                <th class="titulo">Ações</th>
            </tr>
            <?php 
                foreach($jogosPlay as $jogo)
                { ?>
                    <tr>
                        <td><?=$jogo['id']?></td>
                        <td><?=$jogo['nome']?></td>
                        <td><?=$jogo['descricao']?></td>
                        <td class="acao"><a class="editar" href="editar.php?id=<?=$jogo['fk_id']?>">[editar]</a><a class="excluir" href="excluir.php?id=<?=$jogo['id']?>&fk_id=<?=$jogo['fk_id']?>">[excluir]</a></td>
                    </tr>
                    <?php
                } 
                ?>
        </table>
    </div>
    
    <div class="conteiner">
        <h2>Xbox:</h2>
        <table>
            <tr>
                <th class="titulo">ID</th>
                <th class="titulo">Nome</th>
                <th class="titulo">Descrição</th>
                <th class="titulo">Ações</th>
            </tr>
            <?php 
                foreach($jogosPlay as $jogo)
                { ?>
                    <tr>
                        <td><?=$jogo['id']?></td>
                        <td><?=$jogo['nome']?></td>
                        <td><?=$jogo['descricao']?></td>
                        <td class="acao"><a class="editar" href="editar.php?id=<?=$jogo['fk_id']?>">[editar]</a><a class="excluir" href="excluir.php?id=<?=$jogo['id']?>">[excluir]</a></td>
                    </tr>
                    <?php
                } 
                ?>
        </table>
    </div>

    <div class="conteiner">
        <h2>PC:</h2>
        <table>
            <tr>
                <th class="titulo">ID</th>
                <th class="titulo">Nome</th>
                <th class="titulo">Descrição</th>
                <th class="titulo">Ações</th>
            </tr>
            <?php 
                foreach($jogosPlay as $jogo)
                { ?>
                    <tr>
                        <td><?=$jogo['id']?></td>
                        <td><?=$jogo['nome']?></td>
                        <td><?=$jogo['descricao']?></td>
                        <td class="acao"><a class="editar" href="editar.php?id=<?=$jogo['fk_id']?>">[editar]</a><a class="excluir" href="excluir.php?id=<?=$jogo['id']?>">[excluir]</a></td>
                    </tr>
                    <?php
                } 
                ?>
        </table>
    </div>

    <div class="conteiner">
        <h2>Nitendo:</h2>
        <table>
            <tr>
                <th class="titulo">ID</th>
                <th class="titulo">Nome</th>
                <th class="titulo">Descrição</th>
                <th class="titulo">Ações</th>
            </tr>
            <?php 
                foreach($jogosPlay as $jogo)
                { ?>
                    <tr>
                        <td><?=$jogo['id']?></td>
                        <td><?=$jogo['nome']?></td>
                        <td><?=$jogo['descricao']?></td>
                        <td class="acao"><a class="editar" href="editar.php?id=<?=$jogo['fk_id']?>">[editar]</a><a class="excluir" href="excluir.php?id=<?=$jogo['id']?>">[excluir]</a></td>
                    </tr>
                    <?php
                } 
                ?>
        </table>
    </div>



</body>
</html>
