<?php
require_once '../autoload.php';
$tabela = filter_input(INPUT_POST, 'tabela');
$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$descricao = filter_input(INPUT_POST, 'descricao');
$img = ($_FILES['imagem']);
$genero = filter_input(INPUT_POST,'genero');
$desenvolvedor = filter_input(INPUT_POST,'desenvolvedor');
$nome_img = addslashes($_FILES['imagem']['name']);

$processador = filter_input(INPUT_POST, 'processador');
$memoria = filter_input(INPUT_POST, 'memoria');
$armazenamento = filter_input(INPUT_POST, 'armazenamento');
$placa = filter_input(INPUT_POST, 'placa');
$os = filter_input(INPUT_POST, 'os');

if(empty($nome_img)||$nome_img ==''){

}else{
    if($tabela == "xbox"){
        move_uploaded_file($_FILES['imagem']['tmp_name'],'../Midia/img/'. $nome_img);
        $origem = '../Midia/img/'.$nome_img;
        $destino = '../Midia/img/img_xbox/'.$nome_img;
        copy($origem,$destino);

    }else if($tabela =="playstation"){
        move_uploaded_file($_FILES['imagem']['tmp_name'],'../Midia/img/'. $nome_img);
        $origem = '../Midia/img/'.$nome_img;
        $destino = '../Midia/img/img_playstation/'.$nome_img;
        copy($origem,$destino);
    }else if($tabela =="pc"){
        move_uploaded_file($_FILES['imagem']['tmp_name'],'../Midia/img/'. $nome_img);
        $origem = '../Midia/img/'.$nome_img;
        $destino = '../Midia/img/img_pc/'.$nome_img;
        copy($origem,$destino);
    }else if($tabela =="nitendo"){
        move_uploaded_file($_FILES['imagem']['tmp_name'],'../Midia/img/img_nintendo'. $nome_img);
        $origem = '../Midia/img/'.$nome_img;
        $destino = '../Midia/img/img_nitendo/'.$nome_img;
        copy($origem,$destino);
    }
    unlink('../Midia/img/'.$nome_img);
}





if ($tabela == "playstation") {
    $stmt = new Playstation;
    $stmt->getConexao();
    
    $stmt->updateJogosPlay($id, $nome, $descricao, $nome_img,$genero,$genero,$desenvolvedor);
    $stmt->updateRequisitosPlay($os, $armazenamento, $id);
}
if ($tabela == "nitendo") {
    $stmt = new Nitendo;
    $stmt->getConexao();
    $jogo = $stmt->updateJogosNitendo($id, $nome, $descricao, $nome_img,$genero,$desenvolvedor);
    $stmt->updateRequisitosNitendo($os, $armazenamento, $id);
}
if ($tabela == 'pc') {
    $stmt = new Pc;
    $stmt->getConexao();
    $stmt->updateRequisitosPc($os, $processador, $placa, $memoria, $armazenamento, $id);
    $stmt->updateJogosPc($id, $nome, $descricao, $nome_img,$genero,$desenvolvedor);
    
}
if ($tabela == 'xbox') {
    $stmt = new Xbox;
    $stmt->getConexao();
    $jogo = $stmt->updateJogosXbox($id, $nome, $descricao, $nome_img,$genero,$desenvolvedor);
    $stmt->updateRequisitosXbox($os, $armazenamento, $id);
}
// $stmt = new Playstation;
// $stmt->getConexao();
// $stmt->updateJogosPlay($id,$nome,$descricao,$nome_img);

header('location:admin.php');
exit;
