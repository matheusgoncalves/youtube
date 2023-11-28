<?php
    //PHP = Personal Home Page

    //Variáveis
    //Variável de variável
    //Concatenar
    //Comparar valores
    //>= <= == !=
    //=== !==
    //Looping
    //Funções
    //Classes

    /*
    for($i = 0; $i <= 10; $i++){
        echo $i;
        $echo '<hr>'
    }
    */

    /*
    $i = 0;
    while($i <= 10){
        echo $i;
        $i++;
    }
    */

    /*
    printNumero(30);
    echo '<hr>';
    printNumero(50);
    function printNumero($n) {
        echo $n;
    }
    */

    class Pessoa{
        public $nome; // public = pode ser acessado de qualquer lugar
        public $idade;

        public function __construct($nome, $idade){ 
            $this->nome = $nome; // $this->nome é a variável da classe, $nome é a variável do método
            $this->idade = $idade; 
        }

        public function printNomeEIdade(){
            echo $this->nome; 
            echo '<br>';
            echo $this->idade; 
        }
    }

    /*
    $pessoa = new Pessoa('Guilherme', 26);

    $pessoa->printNomeEIdade();
    echo '<br>';
    $pessoa2 = new Pessoa('João', 30);

    $pessoa2->printNomeEIdade();
    */

    $arr = ['guilherme', 'joao', 'felipe'];

    echo $arr[1];
?>