

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
            <h2>Adicionar plataforma</h2>
            <select name="plataforma2" id="plataforma2">
                <option value="sim" selected>Sim</option>
                <option value="nao" >Não</option>
            </select> 
            <select name="selectPlataforma2" id="selectPlataforma2">
                <option value="playstation">Playstation</option>
                <option value="pc" >PC</option>
                <option value="nitendo" selected>Nitendo</option>
                <option value="xbox">Xbox</option>
            </select> 
            <label id="forOsPlataform2" for="osPlataform2">Os:</label>
            <input type="text" name="osPlataform2" id="osPlataform2">

            <label id="forProcessadorPlataform2" for="processadorPlataform2">Processador:</label>
            <input type="text" name="processadorPlataform2" id="processadorPlataform2">

            <label id="forPlacaPlataform2" for="placaPlataform2">Placa de video:</label>
            <input type="text" name="placaPlataform2" id="placaPlataform2">

            <label id="forMemoriaPlataform2" for="memoriaPlataform2">Memoria:</label>
            <input type="text" name="memoriaPlataform2" id="memoriaPlataform2">

            <label id="forArmazenamentoPlataform2" for="armazenamentoPlataform2">Armazenamento:</label>
            <input type="text" name="armazenamentoPlataform2" id="armazenamentoPlataform2">



            <span class="alert"></span>
            <button class="btnEnviar">enviar</button>
        </form>

    </div>

    
</body>
</html>


    