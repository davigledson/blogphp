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
    //todos as funções modificadas em 045 Introdução aos Métodos Estáticos
    // para chamar métodos dentro de outros utiliza-e o self::
    // e o this e para objetos
    class Helpers
    {
        

    public static function saudacao(): string // retorna o tipo de dado em retorno em string

    {
        date_default_timezone_set('America/Sao_Paulo'); // e preciso setar o timezone antes para a função "date"  pega o horário direito
        $hora = date('H');
        //$saudacao =''; // caso a condição der errado, ira retorna um valor vazio

        /*
        if ($hora >= 0 and $hora <= 5) { // && pode ser and ou AND tbm
            $saudacao = 'boa madrugada';
        } elseif ($hora >= 6 and $hora <= 12) {
            $saudacao = 'bom dia';
        } elseif ($hora >= 13 and $hora <= 18) {
            $saudacao = 'boa tarde';
        } else {
            $saudacao = 'boa noite';
        }
        
        */

        //Curso de PHP 8 Aula 035 Estrutura de Controle Switch
        //função refeita utilizando o Switch
        /*
        switch($hora){ 
            case $hora >= 0 and $hora <= 5:
                $saudacao = 'boa madrugada';
                break;
            case $hora >= 6 and $hora <= 12;
                $saudacao = 'bom dia';
                break;
            case $hora >= 13 and $hora <= 18;
                $saudacao = 'boa tarde';
                break;

            default:
                $saudacao = 'boa noite';
            
        }
        */
        //Curso de PHP 8 Aula 036 Estrutura de Controle Match
        // rescrevendo a função utilizando o match - lembra de utilizar ponto e virgula no final
        $saudacao = match(true) {
            $hora >= 0 and $hora <= 5 => 'boa madrugada',
            $hora >= 6 and $hora <= 12 => 'bom dia',
            $hora >= 13 and $hora <= 18 => 'boa tarde',
            
            default => 'boa noite'
        };
        // atalho = ALt + shift + f = para indentar o código
        // if($hora >= 6 && $hora <= 12){ // && = and
        //     $saudacao ='bom dia';
        // } 

        return "$saudacao";
    }


    /**
     *    Resume um texto
     * 
     *      @param string $texto texto para resumir
     *      @param int $limite quantidade limite de caracteres
     *      @param string $continue opcional - o que deve ser exibido ao final do resumo
     *      @return string texto resumido
     */
    public static function resumirTexto(string $texto, int $limite, string $continue = '...'/*variável /parâmetro / argumento*/): string
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
    public static function formatarValor(float $valor = null): string // o null atribuir o valor 0, caso o valor não exista
    {
        return number_format(($valor ? $valor : 0), 2, ',', '.'); //number_format() - Formatar um número com milhares agrupados, pede o valor, a quantidade de casas flutuantes e os separadores
        //exemplo de função com operador ternário - essa mesma pode ser importante para banco de dados (um simples $valor = null, acho que resolveria - ainda não fiz a conexão com o banco de dados ainda)
    }
    /**
     * Formata um numero com pontos
     * @param int $numero
     * @return string
     */
    public static function formatarNumero(int $numero = null): string
    {
        return number_format($numero, 0, '.', '.');
    }


    public static function separadorLinha(string $titulo = null)
    {
        if ($titulo != null) {
            echo "<hr> <strong>$titulo</strong> <hr> ";
        } else

            echo '<hr>';
    }

    /**
     * Conta o tempo decorrido de uma data
     * @param string $data
     * @return string 
     */
    public static function contarTempo(string $data): string
    {
        $agora = strtotime(date('Y-m-d H:i:s')); //date em formato americano

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

    //Curso de PHP 8 Aula 029 Tipos de Filtros
    /**
     * Valida um endereço de e-mail
     * @param string $email
     * @return bool
     */
    public static function validarEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL); //FILTER_VALIDATE_EMAIL - função interna para validar email
    }
    /**
     * Valida um url
     * @param string $url
     * @return bool
     */
    public static function validarUrl(string $url): bool
    {
        return filter_var($url, FILTER_VALIDATE_URL); //filter_var - filtro na variável, por isso filter_var
    }


    //Curso de PHP 8 Aula 030 É Melhor Criar ou Utilizar um Filtro
    // a função validarUrl a parti dessa aula se chamou validar url com filtro 
    /**
     * Valida uma url sem precisar de filtro interno do php
     * @param string $url
     * @return bool
     */
    public static function validarUrlSemFiltro(string $url): bool
    {
        if (mb_strlen($url) < 10) {
            return false;
        }

        if (!str_contains($url, '.')) { // ! -( não) conter o ponto
            //str_contains() Verifica se $needle foi encontrado em $haystack e retorna um valor booleano (true/false) se $needle foi encontrado ou não.
            return false;
        }
        if (str_contains($url, 'http://') or str_contains($url, 'https://')){
            return true;
        }

         return false;
    }

//Curso de PHP 8 Aula 032 Informação do servidor e ambiente de execução

public static function localhost():bool{
        $servidor = filter_input(INPUT_SERVER,'SERVER_NAME');//filter_input() - Obtém uma variável externa específica por nome e, opcionalmente, a filtra. - INPUT_SERVER para obter variáveis do servidor
    
        if($servidor == 'localhost'){
            return true;
        }

        return false;
    }
    /**
     * Monta url de acordo com o ambiente
     * @param string url parte da url ex .admin
     * @return string url completa
     */
    public static function url(string $url):string{
        $servidor = filter_input(INPUT_SERVER,'SERVER_NAME');
        $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);
        //str_starts_with() - A função retorna {@see true} se o $haystack passado começa na string $needle ou {@see false} caso contrário.
        if(str_starts_with($url,'/')){ // se começa com a barra, concatenara normalmente, se não, irar colocar a barra
            return $ambiente . $url;
        }
        return $ambiente . '/' . $url;
    }

    //Curso de PHP 8 Aula 033 Introdução aos Arrays

    public static function dataAtual(): string {
        $diaMes = date('d');
        $diaSemana = date('w'); // numero do dia (da semana) não do mes
        $mes = date('n') -1;
        $ano = date('Y');

        $nomesDiasSemanas = ['Domingo','Segunda-feira','Terça-feira','Quarta-feira','Quinta-feira','Sexta-feira'];

        $nomesMeses =[
            'Janeiro',
            'Fevereiro',
            'Março',
            'Abril',
            'Maio',
            'Junho',
            'Julho',
            'Agosto',
            'Setembro',
            'Outubro',
            'Novembro',
            'Dezembro'
        ];

        $dataFormatada = $nomesDiasSemanas[$diaSemana] . ', ' . $diaMes . ' de ' . $nomesMeses[$mes] . ' de ' . $ano;
        return $dataFormatada;
    }

    //Curso de PHP 8 Aula 034 Slug URL Amigável
    /**
     * Gera uma url amigável
     * @param string $string
     * @return string slug
     */
    public static function slug(string $string)
    {   
        $mapa['a'] ='ÀàÁáÃãÂâÇçÈèÉéÊêëÌìÍíÎîïÒòÓóÕõÔôÙùÚúÛû!@#$%&*()+={}[];:<>/\|,?¨ " \'';
        $mapa['b'] = 'aaaaaaaacceeeeeeeiiiiiiioooooooouuuuuu                             ';
       
        $slug = strtr(mb_convert_encoding($string,'Windows-1252','UTF-8'),mb_convert_encoding($mapa['a'],'Windows-1252','UTF-8'),$mapa['b']); //strtr()Traduzir caracteres ou substituir substrings
        
        
        //utf8_decode() e o encode foram descontinuados no PHP 8.2
        // substituir pelo mb_convert_encoding da extensão mb_strings
        $slug = strip_tags(trim($slug));
        $slug = str_replace(' ','-',$slug); //Substitua todas as ocorrências da string de pesquisa pela string de substituição
        $slug = str_replace(['-----','----','---','--','--','-'],'-',$slug);
        return strtolower(mb_convert_encoding($slug,'Windows-1252','UTF-8'))  ;//strtolower - Tornar uma string minúscula
        
    }


    public static function validarCpf(string $cpf):bool{
        $cpf = self::limparNumero($cpf); // função criada dentro de função, criada logo abaixo
        //modificada em 045 Introdução aos Métodos Estáticos
        //'/(\d)\1{10}/' expressão regula que diz que não aceita dígitos repetidos 
        if(mb_strlen($cpf) != 11 or preg_match('/(\d)\1{10}/',$cpf)){
            return false;
        } //para validar cpf
        for($t = 9; $t < 11; $t++){
            for($d = 0, $c = 0; $c < $t; $c++){
        
               $d += $cpf[$c] * (($t + 1) - $c); 
        
            }
            $d = ((10 * $d) % 11) % 10;
            if($cpf[$c] != $d){
                return false;
            }
            
        }

        return true;

       
    }
public static function limparNumero(string $numero):string
{
    return preg_replace('/[^0-9]/','',$numero); // preg_replace()Execute uma pesquisa de expressão regular e substitua. - /[^0-9]/ - expressão regular que diz (Que não esteja no intervalo de 0 a 9.)
}


    }

    ?>



</body>

</html>