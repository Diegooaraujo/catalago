<?php
require_once '../autoload.php';
$tabela = filter_input(INPUT_POST, 'tabela');
$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$descricao = filter_input(INPUT_POST, 'descricao');
$img = ($_FILES['imagem']);
$genero = filter_input(INPUT_POST,'genero');
$nome_img = addslashes($_FILES['imagem']['name']);

$processador = filter_input(INPUT_POST, 'processador');
$memoria = filter_input(INPUT_POST, 'memoria');
$armazenamento = filter_input(INPUT_POST, 'armazenamento');
$placa = filter_input(INPUT_POST, 'placa');
$os = filter_input(INPUT_POST, 'os');


move_uploaded_file($_FILES['imagem']['tmp_name'], '../Midia/img/img_' . $tabela . $nome_img);




if ($tabela == "playstation") {
    $stmt = new Playstation;
    $stmt->getConexao();
    
    $stmt->updateJogosPlay($id, $nome, $descricao, $nome_img,$genero,$genero);
    $stmt->updateRequisitosPlay($os, $armazenamento, $id);
}
if ($tabela == "nitendo") {
    $stmt = new Nitendo;
    $stmt->getConexao();
    $jogo = $stmt->updateJogosNitendo($id, $nome, $descricao, $nome_img,$genero);
    $stmt->updateRequisitosNitendo($os, $armazenamento, $id);
}
if ($tabela == 'pc') {
    $stmt = new Pc;
    $stmt->getConexao();
    $stmt->updateRequisitosPc($os, $processador, $placa, $memoria, $armazenamento, $id);
    $stmt->updateJogosPc($id, $nome, $descricao, $nome_img,$genero);
    
}
if ($tabela == 'xbox') {
    $stmt = new Xbox;
    $stmt->getConexao();
    $jogo = $stmt->updateJogosXbox($id, $nome, $descricao, $nome_img,$genero);
    $stmt->updateRequisitosXbox($os, $armazenamento, $id);
}
// $stmt = new Playstation;
// $stmt->getConexao();
// $stmt->updateJogosPlay($id,$nome,$descricao,$nome_img);

header('location:admin.php');
exit;
