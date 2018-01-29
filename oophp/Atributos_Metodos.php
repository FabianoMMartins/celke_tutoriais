<?php
    class Carro
    {
        //Atributos
            var $fabricante;
            var $modelo;
            var $cor;
            var $anoFabricacao;
            var $preco;
            var $estado;
            var $portas;
            var $direção;
            var $ar_condicionado;
            var $vidros;
            var $bancos;
            var $alarme;
            var $roda_aro;
            var $versao;


            //Metodos e Funcoes 
            function ligar()
            {
                return "O carro $this->modelo está ligando e funcionando, com revisão em dia.";
            }
        
           function Andar()
           {
               return "O $this->modelo tem potencia de 320 quilometros por hora. Ano fabricado $this->anoFabricacao";
           }
         
        }
?>



<?php
    
    include 'Atributos_Metodos.php';

    $carro1 = new Carro();
    $carro1->fabricante = 'Ford';
    $carro1->modelo = 'Ford Tuarus';
    $carro1->anoFabricacao = 1997;
    $carro1->ligar();
   

    $carro2 = new Carro();
    $carro2->fabricante = 'Ford';
    $carro2->modelo = 'KA Flex';
    $carro2->anoFabricacao = 2009;


    $carro3 = new Carro();
    $carro3->fabricante = 'Volks';
    $carro3->modelo = 'Fusca';
    $carro3->anoFabricacao = 1968;
    
    $carro4 new Carro();
    $carro4->fabricante = 'BMW';
    $carro4->modelo = 'BMW';
    $carro4->anoFabricacao = 2018;
    $carro4->Andar();
   
?>