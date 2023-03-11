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

    {   date_default_timezone_set('America/Sao_Paulo'); // e preciso setar o timezone antes para a função "date"  pega o horário direito
        $hora = date('h');
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

        return "$hora Hora, $saudacao.";
        
    }


    /**
     *    Resume um texto
     *      @param string $texto texto para resumir
     *      @param int $limite quantidade limite de caracteres
     *      @param string $continue opcional - o que deve ser exibido ao final do resumo
     *      @return string texto resumido
     */
    function resumirTexto(string $texto, int $limite, string $continue = '...'/*variável /parâmetro / argumento*/): string
    {   
        $textoLimpo = trim(strip_tags($texto));

        if(mb_strlen($textoLimpo) <= $limite){
            return $textoLimpo;
        }
        // strip_tags() - Retirar tags HTML e PHP de uma string
        //mb_substr() - permite corta os caracteres das string
        //mb_strlen() - conta os caracteres das strings
        //mb_strrpos() - permite encontrar a ultima ocorrência de um caractere ou texto  - em caso de não encontrado retorna um vazio

        $resumirTexto = mb_substr($textoLimpo, 0, $limite); // jeito mais simples que eu pensei
        
        /*
        $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite),''));
        - Jeito do professor de fazer
        - aula sobre funções dentro de funções 
        */
        return $resumirTexto . $continue;
    }


    //Curso de PHP 8 Aula 026 Operador Ternário
    function formatarValor(float $valor = null):string // o null atribuir o valor 0, caso o valor não exista
    {
        return number_format(($valor ? $valor : 0),2,',','.'); //number_format() - Formatar um número com milhares agrupados, pede o valor, a quantidade de casas flutuantes e os separadores
        //exemplo de função com operador ternário - essa mesma pode ser importante para banco de dados (um simples $valor = null, acho que resolveria - ainda não fiz a conexão com o banco de dados ainda)
    }

    function formataNumero(int $numero = null):string{
            return number_format($numero,0,'.','.');
    }


    function separadorLinha()
    {
        echo '<hr>';
    }
    ?>
    

</body>

</html>