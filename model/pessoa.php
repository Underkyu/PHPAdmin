<?php
//Importa arquivo "conexao.php"
require_once "../controler/conexao.php";

//Classe que serve como modelo da entidade pessoa
class Pessoa{

    //Declaração de variáveis relativas aos atributos da entidade pessoa
    private $id;
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    //Variável que armazenará um objeto da classe "Conexao"
    private $conexao;
    
    /*
    Getters e setters de cada variável
    Getter: Retorna o valor da variável
    Setter: Muda o valor da variável para o parametro passado
    */
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->$id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->$nome = $nome;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->$endereco = $endereco;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($bairro){
        $this->$bairro = $bairro;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        $this->$cep = $cep;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->$cidade = $cidade;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->$estado = $estado;
    }
    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->$telefone = $telefone;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function setCelular($celular){
        $this->$celular = $celular;
    }

    //Método construtor (executado quando a classe é instanciada)
    public function __construct(){
        $this->conexao = new Conexao(); //Cria um objeto da classe "Conexao" e armazena ele dentro da variável "conexao"
    }

    //Função para inserir os dados da classe pessoa no banco de dados
    public function inserir(){
        $sql = "INSERT INTO pessoa(`nome`,`endereco`,`bairro`,`cep`,`cidade`,`estado`,`telefone`,`celular`) VALUES(?,?,?,?,?,?,?,?)";  // Declaração SQL que prepara a inserção de dados
        $stmt = $this->conexao->getConexao()->prepare($sql); //Prepara a declaração anterior
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular); //Insere o dados no banco, relacionando as variveis aos atributos que representam
        return $stmt->execute(); //Executa a declaração e retorna resultado da execução
    }

    
}

?>