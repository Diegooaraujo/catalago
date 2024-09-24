<?php
class Conexao {
    private $instancia;
    
    public function __construct()
    {
        

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
    public function getJogos(){
        $dados = array();
        $stmt = $this->instancia->query('SELECT * FROM playstation join requisitos_recomendados ON playstation.fk_id = requisitos_recomendados.id ORDER BY fk_id DESC');

        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $jogojosn=json_encode($dados);
        // $arq = fopen("dadosjg.json",'w+');
        // fwrite($arq,$jogojosn);
        // fclose($arq);
        return $dados;
       
    }
    public function getJogoId($nome_jogo){
        $jogo=array();
        $cmd = $this->instancia->prepare('SELECT * FROM playstation WHERE nome_jogo = :nomejogo');
         $nomejg = implode(":",$nome_jogo);
         $cmd->bindValue(':nomejogo',$nomejg);
         $cmd->execute();
        $jogo = $cmd->fetch(PDO::FETCH_ASSOC);
        // $jogojosn=json_encode($jogo);
        // $arq = fopen("dadosjg.json",'w+');
        // fwrite($arq,$jogojosn);
        // fclose($arq);
        // $json = json_encode($jogo);
        return $jogo;
    }

    public function cadastrar($email,$senha){
        //verificar se ja esta cadastrado
        $sql = $this->instancia->prepare("SELECT id FROM usuarios WHERE email = :email");
        $sql->bindValue(":email",$email);
        $sql->execute();
        if($sql->rowCount()>0)
        {
            return false;
        }
        else
        {
            //caso não, cadastrar
            $sql = $this->instancia->prepare("INSERT INTO usuarios (email,senha) VALUES (:email,:senha)");
            $sql->bindValue(":email",$email);
            $sql->bindValue(":senha",$senha);
            $sql->execute();
            return true;
        }   
        

    }

    public function logar($email,$senha){
        $sql = $this->instancia->prepare('SELECT id FROM usuarios WHERE email = :email AND senha = :senha ');
        $sql->bindValue(":email",$email);
        $sql->bindValue(":senha",$senha);
        $sql->execute();
        if($sql->rowCount()>0)
        {
            $dados=$sql->fetch();
            session_start();
            $_SESSION['id_usuario']=$dados['id'];
            return true;
        }
        else{
            return false;
        }

    }
    public function getJogosplay(){
        $dados = array();
        $stmt = $this->instancia->query('SELECT * FROM playstation');

        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $jogojosn=json_encode($dados);
        // $arq = fopen("dadosjg.json",'w+');
        // fwrite($arq,$jogojosn);
        // fclose($arq);
        return $dados;
       
    }

    public function delete($id,$fk_id){
        $stmt = $this->instancia->prepare('SELECT nome_imagem FROM playstation WHERE id = :id');
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        $nomeImg = $stmt->fetch(PDO::FETCH_ASSOC);
        if(is_file('../Midia/img/'.$nomeImg['nome_imagem'])){
            unlink('../Midia/img/'.$nomeImg['nome_imagem']);
            $stmt = $this->instancia->prepare('DELETE FROM playstation WHERE id = :id');
            $stmt->bindValue(':id',$id);
            $stmt->execute();
            $stmt = $this->instancia->prepare('DELETE FROM requisitos_recomendados WHERE id = :fk_id');
            $stmt->bindValue(':id',$fk_id);
            $stmt->execute();
        }else{
            if(!is_file('../Midia/img/'.$nomeImg['nome_imagem'])){
                echo'a imagem não existe';
                $stmt = $this->instancia->prepare('DELETE FROM playstation WHERE id = :id');
                $stmt->bindValue(':id',$id);
                $stmt->execute();
                $stmt = $this->instancia->prepare('DELETE FROM requisitos_recomendados WHERE id = :fk_id');
                $stmt->bindValue(':fk_id',$fk_id);
                $stmt->execute();
            }
            echo'deu errado';
            
        }
        //  $stmt = $this->instancia->prepare('DELETE FROM playstation WHERE id = :id');

        //  $stmt->bindValue(':id',$id);
        //  $stmt->execute();
    }
     


    public function editarJogoPlay($id){
        $stmt = $this->instancia->prepare('SELECT p.nome,p.descricao,p.nome_imagem,p.genero,p.id,p.fk_id,r.OS,r.processador,r.placa_video,r.memoria,r.armazenamento FROM playstation as p join requisitos_recomendados as r ON p.fk_id = r.id where fk_id = :id');
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $dados = $stmt->fetch(PDO::FETCH_ASSOC);
            return $dados;
        }else{
            header('location: admin.php');
        }
    }
    public function updateJogosPlay($id,$nome,$desc,$img){
        $stmt = $this->instancia->prepare('UPDATE playstation SET nome = :nome, descricao = :descricao, nome_imagem = :img WHERE id = :id');
        $stmt->bindValue(':nome',$nome);
        $stmt->bindValue('descricao',$desc);
        $stmt->bindValue(':img',$img);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        //header('location:admin.php');
        
    }
    public function cadastrarRequisitos($os,$processador,$placa_video,$memoria,$armazenamento){
        $stmt = $this->instancia->prepare('INSERT INTO requisitos_recomendados (OS,processador,placa_video,memoria,armazenamento) VALUES (:os,:processador,:placa_video,:memoria,:armazenamento)');
        $stmt->bindValue(':os',$os);
        $stmt->bindValue(':processador',$processador);
        $stmt->bindValue(':placa_video',$placa_video);
        $stmt->bindValue(':memoria',$memoria);
        $stmt->bindValue(':armazenamento',$armazenamento);
        $stmt->execute();
        $fk_id = $this->instancia->lastInsertId();
        return $fk_id;

    }
    

    public function cadastrarJogo($nome, $descr, $tabela, $img,$genero,$fk_id ){

        if($tabela == 'playstation'){
            $stmt = $this->instancia->prepare("INSERT INTO playstation (nome, descricao,nome_imagem,fk_id,genero ) values (:nome, :descr, :img,:fk_id,:genero)");
            $stmt->bindValue(':nome',$nome);
            $stmt->bindValue(':descr',$descr);
            $stmt->bindValue(':img',$img);
            $stmt->bindValue(':fk_id',$fk_id);
            $stmt->bindValue(':genero',$genero);
            // $stmt->bindValue(':img',$img);
            $stmt->execute();
            header('location:admin.php');
            exit;
        }elseif($tabela == 'nitendo'){
            $stmt = $this->instancia->prepare("INSERT INTO nitendo (nome, descricao,nome_imagem ) values (:nome, :descr, :img,:genero)");
            $stmt->bindValue(':nome',$nome);
            $stmt->bindValue(':descr',$descr);
            $stmt->bindValue(':img',$img);
            $stmt->bindValue(':genero',$genero);
            // $stmt->bindValue(':img',$img);
            $stmt->execute();
            header('location:admin.php');
            exit;
        }elseif($tabela == 'pc'){
            $stmt = $this->instancia->prepare("INSERT INTO pc (nome, descricao,nome_imagem ) values (:nome, :descr, :img,:genero)");
            $stmt->bindValue(':nome',$nome);
            $stmt->bindValue(':descr',$descr);
            $stmt->bindValue(':img',$img);
            $stmt->bindValue(':genero',$genero);
            // $stmt->bindValue(':img',$img);
            $stmt->execute();
            header('location:admin.php');
            exit;
        }elseif($tabela == 'xbox'){
            $stmt = $this->instancia->prepare("INSERT INTO xbox (nome, descricao,nome_imagem ) values (:nome, :descr, :img,:genero)");
            $stmt->bindValue(':nome',$nome);
            $stmt->bindValue(':descr',$descr);
            $stmt->bindValue(':img',$img);
            $stmt->bindValue(':genero',$genero);
            // $stmt->bindValue(':img',$img);
            $stmt->execute();
            header('location:admin.php');
            exit;
        }
       
    }
}
    
    

?>