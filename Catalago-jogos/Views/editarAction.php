<?php
    require_once 'Conexao.php';

    $id = filter_input(INPUT_POST,'id');
    $nome =filter_input(INPUT_POST,'nome'); 
    $descricao =filter_input(INPUT_POST,'descricao');
    $img = ($_FILES['imagem']);
    $nome_img = addslashes($_FILES['imagem']['name']);
    

    move_uploaded_file($_FILES['imagem']['tmp_name'],'../Midia/img'.$nome_img);
    

    if($id || $nome || $nome_img || $descricao){
        $stmt = new Conexao;
        $stmt->getConexao();
        $stmt->updateJogosPlay($id,$nome,$descricao,$nome_img);
        
        header('location:admin.php');
        exit;
    }
    else{
        echo 'algo deu errado';
    }

?>