<?php
    require_once 'Conexao.php';

    $id = filter_input(INPUT_POST,'id');
    $nome =filter_input(INPUT_POST,'nome'); 
    $descricao =filter_input(INPUT_POST,'descricao'); 
    $imagem =filter_input(INPUT_POST,'imagem'); 
    

    if($id || $nome || $imagem || $descricao){
        $stmt = new Conexao;
        $stmt->getConexao();
        $stmt->updateJogosPlay($id,$nome,$descricao,$imagem);
        
        header('location:admin.php');
        exit;
    }
    else{
        header('location:admin.php');
        echo 'nada';
    }

?>