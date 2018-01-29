<?php

    class Pessoa
    {
        var $nome;
        var $sobrenome;
        var $idade;
        var $sexo;
        var $altura;
        var $peso;
        var $cor;
        var $endereco;
        var $telefone;
        var $email;
        var $celular;
        var $cpf;
        var $rg;
        var $estado_civil;
        var $nascimento;
        var $data_inicio_cadastro;
        
        
        function __construct($nome, $idade, $sexo)
        {
            $this->nome  =  (string) $nome;
            $this->idade =  (int)    $idade;
            $this->sexo  =  (string) $sexo;
            
            echo "O objeto [$this->nome] foi iniciado<br>";
        }
        
        function __destruct()
        {
            echo "O objeto [$this->nome] foi finalizado<br>";
        }
        
        
        function debug()
        {
            return var_dump($this);
        }
        
    
        
    }

?>

<?php

       require 'class/Pessoa.php';
       $pessoa = new Pessoa('Fabiano',37,'M');
       $pessoa = new Pessoa('Sara',9,'F');
       $pessoa->debug();

?>