<?php
//Importa arquivo "pessoa.php"
require_once '../model/pessoa.php';

//Classe que atribui os valores passados no "index.php" aos atributos da classe "Pessoa"
class PessoaController{
    private $pessoa; //Variável que armazenará objeto da classe "Pessoa"

    //Método construtor (executado quando a classe é instanciada)
    public function __construct() {

        $this->pessoa = new Pessoa(); //Objeto da classe "Pessoa" é armazenado na variável "pessoa"
        $this->inserir(); //Função inserir (linha 15)
    }

    public function inserir(){
    //Pega os valores passados no formulario do arquivo "index.php" e os atribui aos atributos da classe "Pessoa"
    $this->pessoa->setNome($_POST['nome']);
        
    $this->pessoa->setEndereco($_POST['endereco']);
        
    $this->pessoa->setBairro($_POST['bairro']);
    
    $this->pessoa->setCep($_POST['cep']);
    
    $this->pessoa->setCidade($_POST['cidade']);
    
    $this->pessoa->setEstado($_POST['estado']);
    
    $this->pessoa->setTelefone($_POST['telefone']);
    
    $this->pessoa->setCelular($_POST['celular']);
    
    //Executa função "inserir" da classe "Pessoa"
    $this->pessoa->inserir();
    }
}

//Instancia a classe "PessoaController"
new PessoaController();
?>