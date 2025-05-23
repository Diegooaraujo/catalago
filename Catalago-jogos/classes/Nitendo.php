<?php
    class Nitendo{
        private $instancia;
    
    public function __construct()
    {
        

    }
    public function getJogosNitendo(){
        $dados = array();
        $stmt = $this->instancia->query('SELECT * FROM nitendo join requisitos_recomendados_nitendo ON nitendo.fk_id = requisitos_recomendados_nitendo.id ORDER BY fk_id DESC');

        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $jogojosn=json_encode($dados);
        // $arq = fopen("dadosjg.json",'w+');
        // fwrite($arq,$jogojosn);
        // fclose($arq);
        return $dados;
       
    }
    public function getConexao()
    {
        $dbname = 'dbjogos';
        $host = '127.0.0.1';
        $user = "root";
        $pas = '';
        try{
            $this->instancia = new PDO('mysql:dbname='.$dbname.';host='.$host,$user,$pas);
        }catch(PDOException $e){
            echo "erro".$e->getMessage();
        }
        
    }
        public function cadastrarRequisitosNitendo($os,$armazenamento){
        $stmt = $this->instancia->prepare('INSERT INTO requisitos_recomendados_nitendo (OS,armazenamento) VALUES (:os,:armazenamento)');
        $stmt->bindValue(':os',$os);
        $stmt->bindValue(':armazenamento',$armazenamento);
        $stmt->execute();
        $fk_id = $this->instancia->lastInsertId();
        return $fk_id;

    }
    public function cadastrarJogo($nome, $descr, $img,$genero,$fk_id,$desenvolvedor ){
        $stmt = $this->instancia->prepare("INSERT INTO nitendo (nome, descricao,nome_imagem,fk_id,genero,desenvolvedor ) values (:nome, :descr, :img,:fk_id,:genero,:desenvolvedor)");
        $stmt->bindValue(':nome',$nome);
        $stmt->bindValue(':descr',$descr);
        $stmt->bindValue(':img',$img);
        $stmt->bindValue(':fk_id',$fk_id);
        $stmt->bindValue(':genero',$genero);
        $stmt->bindValue(':desenvolvedor',$desenvolvedor);
            // $stmt->bindValue(':img',$img);
        $stmt->execute();
       
        
        
    }
    public function editarJogoNitendo($id){
        $stmt = $this->instancia->prepare('SELECT p.nome,p.descricao,p.nome_imagem,p.genero,p.desenvolvedor,p.id,p.fk_id,r.OS,r.armazenamento FROM nitendo as p join requisitos_recomendados_nitendo as r ON p.fk_id = r.id where fk_id = :id');
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $dados = $stmt->fetch(PDO::FETCH_ASSOC);
            return $dados;
        }else{
            header('location: admin.php');
        }
    }
    public function updateJogosNitendo($id,$nome,$desc,$img,$genero,$desenvolvedor){
        // $stmt = $this->instancia->prepare('UPDATE nitendo SET nome = :nome, descricao = :descricao, nome_imagem = :img WHERE fk_id = :id');
        if($img){
            if($nome == ''&& $desc == '' && $genero == ''){
                header('location: admin.php');
            }
            else if($desc != "" && $nome==''  && $genero ==''){
                $stmt = $this->instancia->prepare('UPDATE nitendo SET  descricao = :descricao,nome_imagem = :img WHERE fk_id = :id');
                $stmt->bindValue('descricao',$desc);
                $stmt->bindValue(':img',$img);
                $stmt->bindValue(':id',$id);
                $stmt->execute();
            }
            else if($genero != '' && $nome =='' && $desc == ""){
                $stmt = $this->instancia->prepare('UPDATE nitendo SET nome_imagem = :img,genero = :genero WHERE fk_id = :id');
                
                $stmt->bindValue(':img',$img);
                $stmt->bindValue(':genero',$genero);
                $stmt->bindValue(':id',$id);
                $stmt->execute();
            }
            else if($nome !='' && $desc == '' && $genero ==''){
                $stmt = $this->instancia->prepare('UPDATE nitendo SET nome = :nome,  nome_imagem = :img WHERE fk_id = :id');
                $stmt->bindValue(':nome',$nome);
                $stmt->bindValue(':img',$img);
                $stmt->bindValue(':id',$id);
                $stmt->execute();
            }
            else if($nome !='' && $desc != '' && $genero !=''){
                $stmt = $this->instancia->prepare('UPDATE nitendo SET nome = :nome, descricao = :descricao, nome_imagem = :img, genero = :genero, desenvolvedor = :dev WHERE fk_id = :id');
                $stmt->bindValue(':nome',$nome);
                $stmt->bindValue('descricao',$desc);
                $stmt->bindValue(':img',$img);
                $stmt->bindValue(':genero',$genero);
                $stmt->bindValue(':id',$id);
                $stmt->bindValue(':dev',$desenvolvedor);
                $stmt->execute();
            }else if($img !='' && $desc == '' && $genero ==''){
                $stmt = $this->instancia->prepare('UPDATE nitendo SET nome_imagem = :img WHERE fk_id = :id');
             
                $stmt->bindValue(':img',$img);
                
                $stmt->bindValue(':id',$id);
               
                $stmt->execute();
            }
        }else{
            if($nome == ''&& $desc == '' && $genero == ''){
                header('location: admin.php');
            }
            else if($desc != "" && $nome==''  && $genero ==''){
                $stmt = $this->instancia->prepare('UPDATE nitendo SET  descricao = :descricao WHERE fk_id = :id');
                $stmt->bindValue('descricao',$desc);
                $stmt->bindValue(':id',$id);
                $stmt->execute();
            }
            else if($genero != '' && $nome =='' && $desc == ""){
                $stmt = $this->instancia->prepare('UPDATE nitendo SET genero = :genero WHERE fk_id = :id');
                $stmt->bindValue(':genero',$genero);
                $stmt->bindValue(':id',$id);
                $stmt->execute();
            }
            else if($nome !='' && $desc == '' && $genero ==''){
                $stmt = $this->instancia->prepare('UPDATE nitendo SET nome = :nome WHERE fk_id = :id');
                $stmt->bindValue(':nome',$nome);
                $stmt->bindValue(':id',$id);
                $stmt->execute();
            }
            else if($nome !='' && $desc != '' && $genero !=''){
                $stmt = $this->instancia->prepare('UPDATE nitendo SET nome = :nome, descricao = :descricao, genero = :genero, desenvolvedor = :dev WHERE fk_id = :id');
                $stmt->bindValue(':nome',$nome);
                $stmt->bindValue('descricao',$desc);
                $stmt->bindValue(':genero',$genero);
                $stmt->bindValue(':id',$id);
                $stmt->bindValue(':dev',$desenvolvedor);
                $stmt->execute();
            }
        }
        
        // $stmt->bindValue(':nome',$nome);
        // $stmt->bindValue('descricao',$desc);
        // $stmt->bindValue(':img',$img);
        // $stmt->bindValue(':id',$id);
        // $stmt->execute();
        //header('location:admin.php');
        
    } public function updateRequisitosNitendo($os,$armazenamento,$id){

        if($os == "" && $armazenamento == ''){
            header('location: admin.php');
        }else if($os != '' && $armazenamento != ''){
            $stmt = $this->instancia->prepare('UPDATE requisitos_recomendados_nitendo SET OS =:os, armazenamento=:armazenamento Where id = :id');
            $stmt->bindValue(':os',$os);
            $stmt->bindValue(':armazenamento',$armazenamento);
            $stmt->bindValue(':id',$id);
            $stmt->execute();
           
        }else if($os == '' && $armazenamento != ''){
            $stmt = $this->instancia->prepare('UPDATE requisitos_recomendados_nitendo SET armazenamento=:armazenamento Where id = :id');
            $stmt->bindValue(':armazenamento',$armazenamento);
            $stmt->bindValue(':id',$id);
            $stmt->execute();
        }else if($os != '' && $armazenamento == ''){
            $stmt = $this->instancia->prepare('UPDATE requisitos_recomendados_nitendo SET OS =:os,  Where id = :id');
            $stmt->bindValue(':os',$os);
            $stmt->bindValue(':id',$id);
            $stmt->execute();
        }
       
        // $stmt->bindValue(':processador',$processador);
        // $stmt->bindValue(':placa_video',$placa_video);
        // $stmt->bindValue(':memoria',$memoria);
       
    
    }

}


?>