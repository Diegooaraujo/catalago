<?php


    
   


if (isset($_POST['nome'])) {
    $tabela = addslashes($_POST['tabela']);
    $nome = addslashes($_POST['nome']);
    $descricao = addslashes($_POST['descricao']);
    $img = ($_FILES['img']);
    $nome_img = addslashes($_FILES['img']['name']);
    $genero = addslashes($_POST['genero']);
    move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/' . $nome_img);
    $origem = '../Midia/img/'.$nome_img;
    
    

    $os = addslashes($_POST['os']);
    $processador = addslashes($_POST['processador']);
    $placa_video = addslashes($_POST['placa']);
    $memoria = addslashes($_POST['memoria']);
    $armazenamento = addslashes($_POST['armazenamento']);
    //multiplataforma
    $plataforma = addslashes($_POST['plataforma']);
    $osMultiplataforma = addslashes($_POST['osPlataform']);
    $armazenamentoMulti = addslashes($_POST['armazenamentoPlataform']);
    $placa_videoMulti = addslashes($_POST['placaPlataform']);
    $memoriaMulti = addslashes($_POST['memoriaPlataform']);
    $armazenamentoMulti = addslashes($_POST['armazenamentoPlataform']);
    $selectPlataforma = addslashes($_POST['selectPlataforma']);
    
    //fim multipolatafoma

    

    if ($tabela == 'nitendo') {
        require '../classes/Nitendo.php';
        $conn = new Nitendo;
        $conn->getConexao();
        $fk_id = $conn->cadastrarRequisitosNitendo($os, $armazenamento);
        // move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_nitendo' . $nome_img);
        $destino = '../Midia/img/img_nitendo/'.$nome_img;
        copy($origem,$destino);
        
        $conn->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
    } elseif ($tabela == 'playstation') {
        require '../classes/Playstation.php';
        $stmt = new Playstation;
        $stmt->getConexao();
        $fk_id = $stmt->cadastrarRequisitosPlay($os, $armazenamento);
        // move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_playstation' . $nome_img);
        $destino = '../Midia/img/img_playstation/'.$nome_img;
        copy($origem,$destino);
        $stmt->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
    } elseif ($tabela == 'xbox') {
        require '../classes/Xbox.php';
        $stmt = new Xbox;
        $stmt->getConexao();
        $fk_id = $stmt->cadastrarRequisitosXbox($os, $armazenamento);
        // move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_xbox/' . $nome_img);
        $destino = '../Midia/img/img_xbox/'.$nome_img;
        copy($origem,$destino);
        $stmt->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
    } elseif ($tabela == 'pc') {
        require '../classes/Pc.php';
        $stmt = new Pc;
        $stmt->getConexao();
        $fk_id = $stmt->cadastrarRequisitosPc($os, $processador, $placa_video, $memoria, $armazenamento);
        // move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_pc/' . $nome_img);
        $destino = '../Midia/img/img_pc/'.$nome_img;
        copy($origem,$destino);
        $stmt->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
        
    }


    if ($plataforma == "sim") {

        if ($selectPlataforma == "nitendo") {
           
            require '../classes/Nitendo.php';
            $conn = new Nitendo;
            $conn->getConexao();
            $fk_id = $conn->cadastrarRequisitosNitendo($osMultiplataforma, $armazenamentoMulti);
            // move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_nitendo/' . $nome_img);
            $destino = '../Midia/img/img_nitendo/'.$nome_img;
            copy($origem,$destino);
            $conn->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
           
        } elseif ($selectPlataforma == "playstation") {
            require '../classes/Playstation.php';
            $stmt = new Playstation;
            $stmt->getConexao();
            $fk_id = $stmt->cadastrarRequisitosPlay($osMultiplataforma, $armazenamentoMulti);
            // move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_playstation' . $nome_img);
            $destino = '../Midia/img/img_playstation/'.$nome_img;
            copy($origem,$destino);
            $stmt->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
          
        } elseif ($selectPlataforma == "xbox") {
            $destino = '../Midia/img/img_xbox'.$nome_img;
            require '../classes/Xbox.php';
            $stmt = new Xbox;
            $stmt->getConexao();
            $fk_id = $stmt->cadastrarRequisitosXbox($osMultiplataforma, $armazenamentoMulti);
            // move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_xbox/' . $nome_img);
            $destino = '../Midia/img/img_xbox/'.$nome_img;
            copy($origem,$destino);
            $stmt->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
          
        } elseif ($selectPlataforma == "pc") {
            $processadorMulti = addslashes($_POST['processadorPlataform']);
            $placa_videoMulti = addslashes($_POST['placaPlataform']);
            $memoriaMulti = addslashes($_POST['memoriaPlataform']);
            $armazenamentoMulti = addslashes($_POST['armazenamentoPlataform']);
            require '../classes/Pc.php';
            $stmt = new Pc;
            $stmt->getConexao();
            $fk_id = $stmt->cadastrarRequisitosPc($osMultiplataforma, $processadorMulti, $placa_videoMulti, $memoriaMulti, $armazenamentoMulti);
            // move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_pc/' . $nome_img);
            $destino = '../Midia/img/img_pc/'.$nome_img;
            copy($origem,$destino);
            $stmt->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
         
        }
    }

    //adicinionar plataforma 
    $plataforma2 = addslashes($_POST['plataforma2']);
    if($plataforma2 == 'sim'){
        $selectPlataforma2 = addslashes($_POST['selectPlataforma2']);
        if($selectPlataforma2 == 'nitendo'){
            $osAdcPlataforma = addslashes($_POST["osPlataform2"]);
            $armAdcPlataforma = addslashes($_POST["memoriaPlataform2"]);
            require '../classes/Nitendo.php';
            $conn = new Nitendo;
            $conn->getConexao();
            $fk_id = $conn->cadastrarRequisitosNitendo($osAdcPlataforma, $armAdcPlataforma);
            // move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_nitendo/' . $nome_img);
            $destino = '../Midia/img/img_nitendo/'.$nome_img;
            copy($origem,$destino);
            $conn->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);

        }elseif ($selectPlataforma2 == "playstation") {
            $osAdcPlataforma = addslashes($_POST["osPlataform2"]);
            $armAdcPlataforma = addslashes($_POST["memoriaPlataform2"]);
            require '../classes/Playstation.php';
            $stmt = new Playstation;
            $stmt->getConexao();
            $fk_id = $stmt->cadastrarRequisitosPlay($osAdcPlataforma, $armAdcPlataforma);
            // move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_playstation' . $nome_img);
            $destino = '../Midia/img/img_plsyataion/'.$nome_img;
            copy($origem,$destino);
            $stmt->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
          
        } elseif ($selectPlataforma2 == "xbox") {
            $osAdcPlataforma = addslashes($_POST["osPlataform2"]);
            $armAdcPlataforma = addslashes($_POST["memoriaPlataform2"]);
            require '../classes/Xbox.php';
            $stmt = new Xbox;
            $stmt->getConexao();
            $fk_id = $stmt->cadastrarRequisitosXbox($osAdcPlataforma, $armAdcPlataforma);
            // move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_xbox/' . $nome_img);
            $destino = '../Midia/img/img_xbox/'.$nome_img;
            copy($origem,$destino);
            $stmt->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
          
        } elseif ($selectPlataforma2 == "pc") {
            $destino = '../Midia/img/img_pc';
            $osAdcPlataforma = addslashes($_POST["osPlataform2"]);
            $armAdcPlataforma = addslashes($_POST["memoriaPlataform2"]);
            $placa_videoAdc = addslashes($_POST['placaPlataform2']);
            $memoriAdc = addslashes($_POST['memoriaPlataform2']);
            $armazenamentoAdc = addslashes($_POST['armazenamentoPlataform2']);
            $processadorAdc = addslashes($_POST['processadorPlataform2']);
            require '../classes/Pc.php';
            $stmt = new Pc;
            $stmt->getConexao();
            $fk_id = $stmt->cadastrarRequisitosPc($osAdcPlataforma, $processadorAdc, $placa_videoAdc, $memoriaaAdc, $armazenamentoAdc);
            // move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_pc/' . $nome_img);
            $destino = '../Midia/img/img_pc/'.$nome_img;
            copy($origem,$destino);
            $stmt->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
         
        }
    }
    $plataforma3 = addslashes($_POST['plataforma3']);
    if($plataforma3 == "sim"){
        $selectPlataforma3 = addslashes($_POST['selectPlataforma3']);
        if($selectPlataforma3 == 'nitendo'){
            $osAdcPlataforma2 = addslashes($_POST["osPlataform3"]);
            $armAdcPlataforma2 = addslashes($_POST["memoriaPlataform3"]);
            require '../classes/Nitendo.php';
            $conn = new Nitendo;
            $conn->getConexao();
            $fk_id = $conn->cadastrarRequisitosNitendo($osAdcPlataforma2, $armAdcPlataforma2);
            // move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_nitendo/' . $nome_img);
            $destino = '../Midia/img/img_nitendo/'.$nome_img;
            copy($origem,$destino);
            $conn->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);

        }elseif ($selectPlataforma3 == "playstation") {
            $osAdcPlataforma2 = addslashes($_POST["osPlataform3"]);
            $armAdcPlataforma2 = addslashes($_POST["memoriaPlataform3"]);
            require '../classes/Playstation.php';
            $stmt = new Playstation;
            $stmt->getConexao();
            $fk_id = $stmt->cadastrarRequisitosPlay($osAdcPlataforma2, $armAdcPlataforma2);
            // move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_playstation' . $nome_img);
            $destino = '../Midia/img/img_playstation/'.$nome_img;
            copy($origem,$destino);
            $stmt->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
          
        } elseif ($selectPlataforma3 == "xbox") {
            $osAdcPlataforma2 = addslashes($_POST["osPlataform3"]);
            $armAdcPlataforma2 = addslashes($_POST["memoriaPlataform3"]);
            require '../classes/Xbox.php';
            $stmt = new Xbox;
            $stmt->getConexao();
            $fk_id = $stmt->cadastrarRequisitosXbox($osAdcPlataforma2, $armAdcPlataforma2);
            // move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_xbox/' . $nome_img);
            $destino = '../Midia/img/img_xbox/'.$nome_img;
            copy($origem,$destino);
            $stmt->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
          
        } elseif ($selectPlataforma3 == "pc") {
            $osAdcPlataforma2 = addslashes($_POST["osPlataform3"]);
            $armAdcPlataforma2 = addslashes($_POST["armazenamentoPlataform3"]);
            $placa_videoAdc2 = addslashes($_POST['placaPlataform3']);
            $memoriAdc2 = addslashes($_POST['memoriaPlataform3']);
            $armazenamentoAdc2 = addslashes($_POST['armazenamentoPlataform3']);
            $processadorAdc2 = addslashes($_POST['processadorPlataform3']);
            require '../classes/Pc.php';
            $stmt = new Pc;
            $stmt->getConexao();
            $fk_id = $stmt->cadastrarRequisitosPc($osAdcPlataforma2, $processadorAdc2, $placa_videoAdc2, $memoriaaAdc2, $armazenamentoAdc2);
            // move_uploaded_file($_FILES['img']['tmp_name'], '../Midia/img/img_pc/' . $nome_img);
            $destino = '../Midia/img/img_pc/'.$nome_img;
            copy($origem,$destino);
            $stmt->cadastrarJogo($nome, $descricao, $nome_img, $genero, $fk_id);
         
        }
    }
    unlink('../Midia/img/'.$nome_img);
    header("location: admin.php");
    
}





//array com esxtensões permitidas
// $_UP['exntensões'] = array('png','jpg','jpeg')
