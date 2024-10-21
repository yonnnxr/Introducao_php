<?php
    class Pessoa{

        public $nome;
        public $idade;

        public function __construct($nome,$idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function Printinfo(){
            echo $this->nome;
            echo '<br>';
            echo $this->idade;
        }
    }
    $pessoa = new Pessoa('Carlos',26);
    $pessoa->Printinfo();
?>