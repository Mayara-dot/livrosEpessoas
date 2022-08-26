<?php 
class Pessoa {
    
    ///ATRIBUTOS
    private $nome;
    private $idade;
    private $pronome;

    //construtor
    public function Pessoa($nome, $idade, $pronome) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setPronome($pronome);
    }

    //GETTERS E SETTERS
    public function getNome(){
        return $this->nome;
    }
    pubLic function setNome($nome) {
        $this->nome = $nome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function getpronome() {
        return $this->pronome;
    }
    public function setPronome($pronome) {
        $this->pronome = $pronome;
    }


    //METODOS
    public function fazerAniversario() { 
        $this->setIdade($this->getIdade() + 1);
        echo "<p>Feliz Aniversário!!, Agora você tem {$this->getIdade()} anos...</p>";
    }
}

?>