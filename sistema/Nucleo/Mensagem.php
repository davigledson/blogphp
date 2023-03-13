<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Curso de PHP 8 Aula 039 Introdução as Classes
    class Mensagem
    {   
        public $texto='ola, sou um atributo publico dentro da classe'; // public significa que o atributo e publico e pode ser acessado fora da classe

        
        private $css; //private - somente dentro da classe, se dará o acesso ao tributo (normalmente usado)
    }
    ?>

</body>

</html>