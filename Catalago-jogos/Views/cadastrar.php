

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar jogo</title>
    <link rel="stylesheet" href="cadastrar.css">
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

        <select name="tabela" id="tabela">
            <option value="playstation">Playstation</option>
            <option value="pc">PC</option>
            <option value="nitendo">Nitendo</option>
            <option value="xbox">Xbox</option>
        </select>

        <button>enviar</button>
    </form>
</body>
</html>


    