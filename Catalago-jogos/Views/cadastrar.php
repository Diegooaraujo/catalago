<?php
    session_start();
    if(!isset($_SESSION['id_usuario'])){
         header("location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar jogo</title>
    <link rel="stylesheet" href="../Formatacao/css/cadastrar.css">
    <script src="../scripts/plataforma.js" defer></script>
</head>
<body>
    <header>
        <nav>
            <a id="sair" href="sair.php">Sair</a>
            
        </nav>
        
        <h1>Cadastrar jogo</h1>
    </header>

    <div class="formularios">
        <form method="POST" action="cadastrarProduto.php" enctype="multipart/form-data">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">

            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao"></textarea>

            <label class='img-label' for="img">imagem:</label>
            <input type="file" name="img" id="img">

            <label for="genero">Genero:</label>
            <input type="text" name="genero" id="genero">

            <!-- <div class="tabela">
                <input type="radio" name ="tabela" id='play' value = 'playstation' > playstation
                <input type="radio" name ="tabela" id='nitendo' value='nitendo'> nitendo
                <input type="radio" name ="tabela" id='pc' value='pc' checked> pc
                <input type="radio" name ="tabela" id='xbox' value="xbox"> xbox
            </div> -->
            
            <select name="tabela" id="tabela">
                <option value="playstation">Playstation</option>
                <option value="pc" selected>PC</option>
                <option value="nitendo">Nitendo</option>
                <option value="xbox">Xbox</option>
            </select> 

            <h2>Requisitos:</h2>
            <label id="forOs" for="os">Os:</label>
            <input type="text" name="os" id="os">

            <label id="forProcessador" for="processador">Processador:</label>
            <input type="text" name="processador" id="processador">

            <label id="forPlaca" for="placa">Placa de video:</label>
            <input type="text" name="placa" id="placa">

            <label id="forMemoria" for="memoria">Memoria:</label>
            <input type="text" name="memoria" id="memoria">

            <label id="forArmazenamento" for="armazenamento">Armazenamento:</label>
            <input type="text" name="armazenamento" id="armazenamento">

            
            <h2>multiplataforma</h2>
            <select name="plataforma" id="plataforma">
                <option value="sim" selected>Sim</option>
                <option value="nao" >Não</option>
            </select> 
            
            <select name="selectPlataforma" id="selectPlataforma">
                <option value="playstation">Playstation</option>
                <option value="pc" selected>PC</option>
                <option value="nitendo">Nitendo</option>
                <option value="xbox">Xbox</option>
            </select> 
            
            <label id="forOsPlataform" for="osPlataform">Os:</label>
            <input type="text" name="osPlataform" id="osPlataform">

            <label id="forProcessadorPlataform" for="processadorPlataform">Processador:</label>
            <input type="text" name="processadorPlataform" id="processadorPlataform">

            <label id="forPlacaPlataform" for="placaPlataform">Placa de video:</label>
            <input type="text" name="placaPlataform" id="placaPlataform">

            <label id="forMemoriaPlataform" for="memoriaPlataform">Memoria:</label>
            <input type="text" name="memoriaPlataform" id="memoriaPlataform">

            <label id="forArmazenamentoPlataform" for="armazenamentoPlataform">Armazenamento:</label>
            <input type="text" name="armazenamentoPlataform" id="armazenamentoPlataform">
            
            <h2 class="titleAdicionar">Adicionar plataforma</h2>
            <select name="plataforma2" id="plataforma2">
                <option value="sim" >Sim</option>
                <option value="nao" selected>Não</option>
            </select> 
            <select name="selectPlataforma2" id="selectPlataforma2" class="hide">
                <option value="playstation">Playstation</option>
                <option value="pc" >PC</option>
                <option value="nitendo" selected>Nitendo</option>
                <option value="xbox">Xbox</option>
            </select> 
            <label id="forOsPlataform2" for="osPlataform2" class="hide">Os:</label class="hide">
            <input type="text" name="osPlataform2" id="osPlataform2" class="hide">

            <label id="forProcessadorPlataform2" for="processadorPlataform2" class="hide">Processador:</label>
            <input type="text" name="processadorPlataform2" id="processadorPlataform2" class="hide">

            <label id="forPlacaPlataform2" for="placaPlataform2" class="hide">Placa de video:</label>
            <input type="text" name="placaPlataform2" id="placaPlataform2" class="hide">

            <label id="forMemoriaPlataform2" for="memoriaPlataform2" class="hide">Memoria:</label>
            <input type="text" name="memoriaPlataform2" id="memoriaPlataform2" class="hide">

            <label id="forArmazenamentoPlataform2" for="armazenamentoPlataform2" class="hide">Armazenamento:</label>
            <input type="text" name="armazenamentoPlataform2" id="armazenamentoPlataform2" class="hide">


            <h2 class="titleAdicionar3">Adicionar plataforma</h2>
            <select name="plataforma3" id="plataforma3">
                <option value="sim" >Sim</option>
                <option value="nao" selected>Não</option>
            </select> 
            <select name="selectPlataforma3" id="selectPlataforma3" class="hide"> 
                <option value="playstation">Playstation</option>
                <option value="pc" >PC</option>
                <option value="nitendo" selected>Nitendo</option>
                <option value="xbox">Xbox</option>
            </select> 
            <label id="forOsPlataform3" for="osPlataform3" class="hide">Os:</label>
            <input type="text" name="osPlataform3" id="osPlataform3" class="hide">

            <label id="forProcessadorPlataform3" for="processadorPlataform3" class="hide">Processador:</label>
            <input type="text" name="processadorPlataform3" id="processadorPlataform3" class="hide">

            <label id="forPlacaPlataform3" for="placaPlataform3" class="hide">Placa de video:</label>
            <input type="text" name="placaPlataform3" id="placaPlataform3" class="hide">

            <label id="forMemoriaPlataform3" for="memoriaPlataform3" class="hide">Memoria:</label>
            <input type="text" name="memoriaPlataform3" id="memoriaPlataform3" class="hide">

            <label id="forArmazenamentoPlataform3" for="armazenamentoPlataform3" class="hide">Armazenamento:</label>
            <input type="text" name="armazenamentoPlataform3" id="armazenamentoPlataform3" class="hide">



            <span class="alert"></span>
            <button class="btnEnviar">enviar</button>
        </form>

    </div>

    
</body>
</html>


    