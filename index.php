
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog PHP</title>
</head>
<body>
    <?php 
// Arquivo index responsável pela iniciação do projeto

// include = incluir -A função include() do PHP tem como objetivo incluir (como o próprio nome diz) um arquivo dentro do outro quando acessado. Caso ocorra algum problema na inclusão deste, será apresentado um Warning (aviso) que não foi possível incluir o arquivo e continuará a exibição da página normalmente sem a inclusão do arquivo. A função include() aceita parâmetros via GET quando chama um arquivo. - 

// require = requerido - A função require() do PHP tem a mesma funcionalidade da função include(), citada acima, com a diferença que se caso o arquivo que você está incluindo não exista (ou não seja encontrado), será gerado um Fatal Error (erro fatal), paralizando a execução de qualquer script que venha após a linha do require(); outra divergência é o fato desta função não aceitar parâmetros via GET para o arquivo chamado. Caso você utilize este parâmetro, ele será ignorado.

//As funções include_once() e require_once() do PHP tem as suas funcionalidades praticamente “idênticas” às funções include() e require(), respectivamente. Digo “idênticas” (entre aspas) pois a única diferença entre elas é o fato da funções que possuem o “_once” só permitirem a inclusão do arquivo uma única vez na página e ignorando caso você chame ela mais vezes sem notar.


/* 
 - no caso de informações essências para o o sistema, utiliza-se normalmente o require

 - informações não fundamentais tipo o topo pou rodapé, usa-se o include

*/




    
    
    require_once 'sistema/configuracao.php';
    include_once 'helpers.php'; // não diferencia minusculas ou maiúsculas
    echo '<h1>arquivo index</h1>';
    echo '<hr>';
    echo saudacao();
    echo '<hr>';
    echo saudacao();
    echo '<hr>';

    $texto ='texto para resumir';
    //declare(strict_types = 1); 
    //declare(strict_types = 1) - faz com que todos os tipos de dados requisitados tenham que especificamente eles mesmo. exemplo o 50 abaixo, que na função requisita um tipo float
    echo resumirTexto($texto,50,'texto');

    /*
Curso de PHP 8 Aula 017 Tipos de Dados e Retorno
*/ 
/*

echo '<hr>';
$string = 'texto';
$int = 10;
$float = 9.99;
$bool = true;
$nulo = null;

var_dump($string); echo '<hr>';
var_dump($int); echo '<hr>';
var_dump($float); echo '<hr>';
var_dump($bool); echo '<hr>';
var_dump($nulo); echo '<hr>';
*/

//Curso de PHP 8 Aula 021 Funções dentro de Funções

echo '<hr>';
echo saudacao();
echo '<hr>';


$total = 'davi gledson da silva benedito';

echo mb_strlen(trim($texto)); 
//mb_strlen() - conta os caracteres das strings
//trim() retirar os espaços antes de depois da string
echo '<hr>';
echo $total2 = mb_strlen(trim($total));

echo '<hr>';
echo $resumo = mb_substr($total,7,20);
//mb_substr() - permite corta os caracteres das string

echo '<hr>';
echo $ecorrencia = mb_strrpos($total,'d');
//mb_strrpos() - permite encontrar a ultima ocorrência de um caractere ou texto  - em caso de não encontrado retorna um vazio

echo '<hr>';
echo resumirTexto($total, 20);
?>
</body>
</html>