<?php



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

    $plataforma = addslashes($_POST['plataforma']);
    $osMultiplataforma = addslashes($_POST['osPlataform']);
    $armazenamentoMulti = addslashes($_POST['armazenamentoPlataform']);
    $placa_videoMulti = addslashes($_POST['placaPlataform']);
    $memoriaMulti = addslashes($_POST['memoriaPlataform']);
    $armazenamentoMulti = addslashes($_POST['armazenamentoPlataform']);
    $selectPlataforma = addslashes($_POST['selectPlataforma']);
    

    if($tabela == 'nitendo'){
        require '../classes/Nitendo.php';
        $conn = new Nitendo;
        $conn->getConexao();
        $fk_id = $conn->cadastrarRequisitosNitendo($os,$armazenamento);
        move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_playstation' . $nome_img);
        $conn->cadastrarJogo($nome,$descricao,$nome_img,$genero, $fk_id);
        header("location: admin.php");
    }
    elseif($tabela == 'playstation'){
        require '../classes/Playstation.php';
        $stmt = new Playstation;
        $stmt->getConexao();
        $fk_id = $stmt->cadastrarRequisitosPlay($os,$armazenamento);
        move_uploaded_file($_FILES['img']['tmp_name'],'../Midia/img/img_playstation'.$nome_img);
        $stmt->cadastrarJogo($nome,$descricao,$nome_img,$genero, $fk_id);
        header("location: admin.php");
    }elseif($tabela == 'xbox'){
        require '../classes/Xbox.php';
        $stmt = new Xbox;
        $stmt->getConexao();
        $fk_id = $stmt->cadastrarRequisitosXbox($os,$armazenamento);
        move_uploaded_file($_FILES['img']['tmp_name'],'../Midia/img/img_xbox/'.$nome_img);
        $stmt->cadastrarJogo($nome,$descricao,$nome_img,$genero, $fk_id);
        header('Location:admin.php');
    }elseif($tabela == 'pc'){
        require '../classes/Pc.php';
        $stmt = new Pc;
        $stmt->getConexao();
        $fk_id = $stmt->cadastrarRequisitosPc($os,$processador,$placa_video,$memoria,$armazenamento);
        move_uploaded_file($_FILES['img']['tmp_name'],'../Midia/img/img_pc/'.$nome_img);
        $stmt->cadastrarJogo($nome,$descricao,$nome_img,$genero, $fk_id);
        header("location: admin.php");
    }


    // if(isset($_POST['plataforma'])){
    //     $plataforma = addslashes($_POST['plataforma']);
    //     if ($plataforma == "sim") {
    //         $selectPlataforma = addslashes($_POST['selectPlataforma']);
    //         if ($selectPlataforma == "nitendo") {
    //             require '../classes/Nitendo.php';
    //             $conn = new Nitendo;
    //             $conn->getConexao();
    //             $fk_id = $conn->cadastrarRequisitosNitendo($osMultiplataforma, $armazenamentoMulti);
    //             move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_nitendo/' . $nome_img);
    //             $conn->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
    //             header("location: admin.php");
    //         } elseif ($selectPlataforma == "playstation") {
    //             require '../classes/Playstation.php';
    //             $stmt = new Playstation;
    //             $stmt->getConexao();
    //             $fk_id = $stmt->cadastrarRequisitosPlay($osMultiplataforma, $armazenamentoMulti);
    //             move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_playstation' . $nome_img);
    //             $stmt->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
    //             header("location: admin.php");
    //         } elseif ($selectPlataforma == "xbox") {

    //             require '../classes/Xbox.php';
    //             $stmt = new Xbox;
    //             $stmt->getConexao();
    //             $fk_id = $stmt->cadastrarRequisitosXbox($osMultiplataforma, $armazenamentoMulti);
    //             move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_xbox/' . $nome_img);
    //             $stmt->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
    //             header('Location:admin.php');
    //         } elseif ($selectPlataforma == "pc") {
    //             $placa_videoMulti = addslashes($_POST['placaPlataform']);
    //             $memoriaMulti = addslashes($_POST['memoriaPlataform']);
    //             $armazenamentoMulti = addslashes($_POST['armazenamentoPlataform']);
    //             require '../classes/Pc.php';
    //             $stmt = new Pc;
    //             $stmt->getConexao();
    //             $fk_id = $stmt->cadastrarRequisitosPc($osMultiplataforma, $processadorMulti, $placa_videoMulti, $memoriaMulti, $armazenamentoMulti);
    //             move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_pc/' . $nome_img);
    //             $stmt->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
    //             header("location: admin.php");
    //         }
    //     }
    
    // }
}
        




//array com esxtensões permitidas
// $_UP['exntensões'] = array('png','jpg','jpeg')
?>