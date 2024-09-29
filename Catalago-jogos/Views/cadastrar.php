

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar jogo</title>
    <link rel="stylesheet" href="../Formatacao/css/cadastrar.css">
</head>
<body>
    <header>
        <nav>
            <a id="sair" href="sair.php">Sair</a>
            
        </nav>
        
        <h1>Cadastrar jogo</h1>
    </header>
    <form method="POST" action="cadastrarProduto.php" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao"></textarea>

        <label class='img-label' for="img">imagem:</label>
        <input type="file" name="img" id="img">

        <label for="genero">Genero:</label>
        <input type="text" name="genero" id="genero">


        <select name="tabela" id="tabela">
            <option value="playstation">Playstation</option>
            <option value="pc">PC</option>
            <option value="nitendo">Nitendo</option>
            <option value="xbox">Xbox</option>
        </select>

    <h2>Requisitos:</h2>
    <label for="os">Os:</label>
        <input type="text" name="os" id="os">

        <label for="processador">Processador:</label>
        <input type="text" name="processador" id="processador">

        <label for="placa">Placa de video:</label>
        <input type="text" name="placa" id="plca">

        <label for="memoria">Memoria:</label>
        <input type="text" name="memoria" id="memoria">

        <label for="armazenamento">Armazenamento:</label>
        <input type="text" name="armazenamento" id="armazenameto">


        <button>enviar</button>
    </form>
</body>
</html>


    