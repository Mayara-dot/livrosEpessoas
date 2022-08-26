<?php
require_once "Pessoa.php";
require_once "./interfaces/Publicacao.php";

class Livro implements Publicacao {
    //ATRIBUTOS
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    //construtor
    public function Livro($titulo, $autor, $totPaginas, $leitor = null) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setAberto(false);
        $this->setPagAtual(0);
        $this->setLeitor($leitor);
    }


    //GETTERS E SETTERS
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function getAutor() {
        return $this->autor;
    }
    public function setAutor($autor) {
        $this->autor = $autor;
    }
    public function getTotPaginas() {
        return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }
    public function getPagAtual() {
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }
    public function getAberto() {
        return $this->aberto;
    }
    public function setAberto($aberto) {
        $this->aberto = $aberto;
    }
    public function getLeitor() {
        return $this->leitor;
    }
    public function setLeitor($leitor) {
        is_null($leitor) ? $this->leitor = null : $this->leitor = $leitor;
    }

    //METODOS
    public function detalhes() {
        if($this->getLeitor() != null) {
            echo "<hr><p>O título deste livro é {$this->getTitulo()}, </br>
            o autor é {$this->getAutor()}, tendo um total de {$this->getTotPaginas()} páginas. </br>
            Aproveite a leitura {$this->getLeitor()->getNome()}...</p>";

        } else  {
            echo "<hr><p>O título deste livro é {$this->getTitulo()}, </br>
            o autor é {$this->getAutor()}, tendo um total de {$this->getTotPaginas()} páginas. </br>
            Aproveite a leitura...</p>";
        }
        
    }

    //overrides
    public function abrir() {
        if(!$this->getAberto()) {
            $this->setAberto(true);
            echo "<hr><p>Abrindo o livro....</p>";
        } else {
            echo "<hr><p>O livro já está aberto!</p>";
        }
        
    }
    public function fechar() {
        if($this->getAberto()) {
            $this->setAberto(false);
            echo "<hr><p>Fechando o livro... Até a próxima!</p>";
        } else  {
            echo "<hr><p>O livro já está fechado!</p>";
        }
        
    }
    public function folhear($pagina) {
        if($this->getLeitor() != null) {
            if ($this->getTotPaginas() >= $pagina) {
            if($this->getAberto()) {
                $this->setPagAtual($pagina);
                echo "<hr><p>Agora você está na página {$this->getPagAtual()}.</p>";
            } else {
                $this->setAberto(true);
                $this->setPagAtual($pagina);
                echo "<hr><p>Abrindo o livro... Agora você está na página {$this->getPagAtual()}.</p>";
            }
        } else {
            echo "<hr><p>Não foi possível folhear o livro {$this->getTitulo()} até a página $pagina, o total de página é {$this->getTotPaginas()} ....</p>";
        }

        } else {
            echo "<hr><p>Ninguém está lendo este livro...</p>";
        }
    }
    public function avancarPag() {
        if($this->getLeitor() != null) {
            if($this->getPagAtual() == $this->getTotPaginas() || $this->getLeitor == null) {
                echo "<hr><p>Você já está no fim do livro, não da mais para avançar...</p>";
            } else {
                if ($this->getAberto()) {
                    $this->setPagAtual($this->getPagAtual() + 1);
                    echo "<hr><p>A página atual é {$this->getPagAtual()}!</p>";
                } else {
                    echo "<hr><p>Não foi possivel avançar a página, o livro está fechado!!</p>";
                }
            }

        } else {
            echo "<hr><p>Ninguém está lendo este livro....</p>";
        }
    }

    public function voltarPag() {
        if($this->getLeitor() != null) {
            if($this->getPagAtual() == 0) {
                echo "<hr><p>Você já está na primeira página do livro...</p>";
            } else {
                if($this->getAberto()) {
                    $this->setPagAtual($this->getPagAtual() - 1);
                    echo "<hr><p>A página atual é {$this->getPagAtual()}!</p>";
                } else{
                    echo "<hr><p>Não foi possível voltar a página, o livro está fechado!!6</p>";
                }
            }
        } else {
            echo "<hr><p>Ninguém está lendo este livro....</p>";
        }
        
    }

}
?> 