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
        date_default_timezone_set('America/Sao_Paulo'); // e preciso setar o timezone antes para a função "date"  pega o horário direito
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
        // atalho = ALt + shift + f = para indentar o código
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

        if (mb_strlen($textoLimpo) <= $limite) {
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
    /**
     * Formata um valor com ponto e virgula
     * @param float $valor
     * @return string
     */
    function formatarValor(float $valor = null): string // o null atribuir o valor 0, caso o valor não exista
    {
        return number_format(($valor ? $valor : 0), 2, ',', '.'); //number_format() - Formatar um número com milhares agrupados, pede o valor, a quantidade de casas flutuantes e os separadores
        //exemplo de função com operador ternário - essa mesma pode ser importante para banco de dados (um simples $valor = null, acho que resolveria - ainda não fiz a conexão com o banco de dados ainda)
    }
    /**
     * Formata um numero com pontos
     * @param int $numero
     * @return string
     */
    function formatarNumero(int $numero = null): string
    {
        return number_format($numero, 0, '.', '.');
    }


    function separadorLinha(string $titulo = null)
    {
        echo "<strong>$titulo</strong><hr>";
    }

/**
 * Conta o tempo decorrido de uma data
 * @param string $data
 * @return string 
 */
    function contarTempo(string $data): string
    {
        $agora = strtotime(date('Y-m-d H:i:s')); //date em formato americano
        separadorLinha();
        $tempo = strtotime($data); // strtotime() - converte qualquer descrição de data e hora textual em inglês o tempo para segundos
        $diferenca = $agora - $tempo;

        $segundos = $diferenca;
        $minutos = round($diferenca / 60); // 60 segundos - round - arredonda
        $horas = round($diferenca / 3600); //3600 segundos - uma hora
        $dias = round($diferenca / 86400); //86400 segundos - 24 horas
        $semanas = round($diferenca / 604800); //604800 segundos - 7 dias
        $meses = round($diferenca / 2419200); //2419200 segundos - 4 semanas
        $anos = round($diferenca / 29030400); //29030400 segundos = 12meses

        if ($segundos <= 60) {
            return 'agora';
        } elseif ($minutos <= 60) {
            return $minutos == 1 ? 'há 1 minuto' : 'há ' . $minutos . ' minutos';
        } elseif ($horas <= 24) {
            return $horas == 1 ? 'há 1 hora' : 'há ' . $horas . ' horas';
        } elseif ($dias <= 7) {
            return $dias == 1 ? 'ontem' : 'há ' . $dias . ' dias';
        } elseif ($semanas <= 4) {
            return $semanas == 1 ? 'há 1 semana' : 'há ' . $semanas . ' semanas';
        } elseif ($meses <= 12) {
            return $meses == 1 ? 'há 1 mês' : 'há ' . $meses . ' meses';
        } else {
            return $anos == 1 ? 'há 1 ano' : 'há ' . $anos . ' anos';
        }
    }
    ?>



</body>

</html>