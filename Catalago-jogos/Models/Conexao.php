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
    public function getJogosPlay(){
        $dados = array();
        $stmt = $this->instancia->query('SELECT * FROM playstation');
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $jogojosn=json_encode($dados);
        // $arq = fopen("dadosjg.json",'w+');
        // fwrite($arq,$jogojosn);
        // fclose($arq);
        return $dados;
       
    }
    public function getJogosPc(){
        $dados = array();
        $stmt = $this->instancia->query('SELECT * FROM pc');
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
       
    }
    public function getJogosXbox(){
        $dados = array();
        $stmt = $this->instancia->query('SELECT * FROM xbox');
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
       
    }
    public function getJogosnitendo(){
        $dados = array();
        $stmt = $this->instancia->query('SELECT * FROM nitendo');

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


}

?>