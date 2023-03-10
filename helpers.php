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
    echo ' arquivo de funções';

    function saudacao(): string // retorna o tipo de dado em retorno em string

    {
        $hora = 13;
        //$saudacao =''; // caso a condição der errado, ira retorna um valor vazio
        if ($hora >= 0 and $hora <= 5) { // && pode ser and ou AND tbm
            $saudacao = 'boa madrugada';
        } else if ($hora >= 6 and $hora <= 12) {
            $saudacao = 'bom dia';
        } elseif ($hora >= 13 and $hora <= 18) {
            $saudacao = 'boa tarde';
        } else {
            $saudacao = 'boa noite';
        }
        // ALt + shift + f = para indentar o código
        // if($hora >= 6 && $hora <= 12){ // && = and
        //     $saudacao ='bom dia';
        // } 

        return $saudacao;
    }

    function resumirTexto(string $texto, float $limite, string $continue = '...'/*variável /parâmetro / argumento*/): string
    {
        return $texto . $limite . $continue;
    }


    ?>


</body>

</html>