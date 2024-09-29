<?php
require_once './classes/Conexao.php';
$stmt = new Conexao;


if(isset ($_POST['nome'])){
    $tabela = addslashes($_POST['tabela']);
    $nome = addslashes($_POST['nome']);
    $descricao = addslashes($_POST['descricao']);
    $img = ($_FILES['img']);
    $nome_img = addslashes($_FILES['img']['name']);
    $genero = addslashes($_POST['genero']);

    $os = addslashes($_POST['os']);
    $processador = addslashes($_POST['processador']);
    $placa_video = addslashes($_POST['placa']);
    $memoria = addslashes($_POST['memoria']);
    $armazenamento = addslashes($_POST['armazenamento']);



    
    $stmt->getConexao();
    $fk_id = $stmt->cadastrarRequisitos($os,$processador,$placa_video,$memoria,$armazenamento);
    
    
    
    
    

    move_uploaded_file($_FILES['img']['tmp_name'],'../Midia/img/'.$nome_img);
    
    $stmt->cadastrarJogo($nome,$descricao,$tabela,$nome_img,$genero, $fk_id);

    
    
}else{
    
}



//array com esxtensões permitidas
$_UP['exntensões'] = array('png','jpg','jpeg')
?>

?>