<?php 
namespace sistema\Nucleo;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    /**
     * Controlar coisas 
     *@author Davi Gledson 
     */
    class Controlador{
        //Curso de PHP 8 Aula 046 Introdução ao Método Mágico construct
        public function __construct(string $tema =null) //aceita parâmetros também 
        {
            //__construct - toda vez que instanciar a classe será realizado alguma ação
            //exemplo
            echo $tema;
            ;
        }
    }
    
    
    
    
    ?>
</body>
</html>