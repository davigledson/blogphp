
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
    include('./sistema/Nucleo/Mensagem.php');
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
echo '<hr>';
//Curso de PHP 8 Aula 022 Limpando TAGS
$texto2 = '<h1>Texto</h1> <p>para</p> resumir';
echo $texto2;
echo '<hr>';
echo strip_tags($texto2); // strip_tags() - limpa as tag

echo '<hr>';

//Curso de PHP 8 Aula 026 Operador Ternário
$valor = 5;
if ($valor){ // se o valor existir
    echo $valor;
} else {
    echo 0;
}

echo '<hr>';
echo $valor ? $valor : 0; //condicional ternaria (se o valor existir, recebe o valor, se não, o valor recebe zero)- parenteses opcionais - recomendada em condições simples

echo '<hr>';
echo $valor ?: 0; //resumindo ainda mais 
echo '<hr>';
separadorLinha();
echo 'R$ ' . formatarValor(20);

separadorLinha();
echo formatarNumero(10000);
separadorLinha();

//Curso de PHP 8 Aula 027 Definindo Fuso Horário Padrão

$data = date('d/m/Y H:i:s');
echo $data;

//Curso de PHP 8 Aula 028 Criando Função Contar Tempo

separadorLinha('Função Contar Tempo');
echo contarTempo('2020-01-10 02:23:59'); //padrão americano
//Curso de PHP 8 Aula 029 Tipos de Filtros

separadorLinha('Função validar email');
if( validarEmail('davigledson@outlook.com')){
    echo 'endereço de email válido';
} else{
    echo 'E-mail inválido';
}
//modo de ver o tipo bool - echo var_dump(validarEmail('davigledson@outlook.com')); 
separadorLinha('função validar url');

var_dump(validarUrl('https://www.youtube.com/watch?v=iTXf4cS4upk'));
separadorLinha();
if (validarUrl('https://www.youtube.com/watch?v=iTXf4cS4upk')){
    echo 'endereço valido';
} else {
    echo 'endereço invalido';
}

//Curso de PHP 8 Aula 030 É Melhor Criar ou Utilizar um Filtro
separadorLinha('Função validar URL sem filtro');
$url = 'https://a';

echo var_dump(validarUrlSemFiltro($url));
separadorLinha();
echo var_dump(validarUrl($url));

separadorLinha('Curso de PHP 8 Aula 031 Constantes');
echo SITE_NOME;
separadorLinha();
echo SITE_NOME2;

//Curso de PHP 8 Aula 032 Informação do servidor e ambiente de execução
separadorLinha('Curso de PHP 8 Aula 032 Informação do servidor e ambiente de execução
');
//var_dump($_SERVER); - dados do servidor
var_dump(localhost());
separadorLinha();

echo url('davi');

separadorLinha('Curso de PHP 8 Aula 033 Introdução aos Arrays');
echo $_SERVER['HTTP_HOST'];
separadorLinha();
echo $_SERVER['SCRIPT_FILENAME'];
separadorLinha();
$meses = array( //pode "personalizar "indexes" 
   'j' => 'janeiro',
    'f'=> 'fevereiro',
    'm' => 'março'
); //declaração de array - pode deixa em uma linha ou varias, para organizar melhor
$dias = [
    
    'segunda',
    'terça',
    'quarta'
]; //outro tipo de declarar array
var_dump($meses);
separadorLinha();
var_dump($dias);
separadorLinha();
echo $meses['j']; // chamando pelo index numérico
separadorLinha();


foreach($meses as $chave => $valor){ //foreach - para percorrer os array
    echo" $chave <br>";
};
separadorLinha();
echo dataAtual();

separadorLinha();
echo saudacao() .' Hoje é '. dataAtual();

separadorLinha('Curso de PHP 8 Aula 034 Slug URL Amigável');
echo slug("Àdão          \" Negro\" - '2022'") . '<hr>';
echo slug("Avatar                          2: O Caminho da Água") . '<hr>';
echo slug("Não! Não Olhe") . '<hr>';
echo slug("Sonic 2 - O Filme") . '<hr>';
echo slug("NOVA SÉRIE NO DISNEY+!") . '<hr>';
echo slug("100 Melhores filmes") . '<hr>';
echo slug("teste!@##$%¨,*/\|?;:");
separadorLinha('Curso de PHP 8 Aula 035 Estrutura de Controle Switch');
echo saudacao();

separadorLinha('Curso de PHP 8 Aula 037 Estruturas de Repetição');
//while
$numero = 5;
while ($numero <10){
    echo $numero++;
}
separadorLinha();
//for
for($i = 0;$i <= 10; $i++){
    echo $i;
}
separadorLinha();
for($i = 1;$i <= 10; $i++){
    echo ($i % 2 ? $i .' impar' : $i . ' par') . ' <br>';
}
separadorLinha();
for($i = 1;$i <= 10; $i++){
   echo $i . 'x' . $i . ' = ' . $i * $i  . ' <br>';
}
separadorLinha();
$multiplicador = 5;
for($i = 1;$i <= 10; $i++){
   echo $i . 'x' . $multiplicador . ' = ' . $i * $multiplicador  . ' <br>';
}
separadorLinha();
$cpf = '16065710440';


/*
integrado a função validarCpf($cpf);

for($t = 9; $t < 11; $t++){
    for($d = 0, $c = 0; $c < $t; $c++){

       ($d += $cpf[$c] * (($t + 1) - $c)); 

    }
    $d = ((10 * $d) % 11) % 10;
    if($cpf[$c] != $d){
        echo 'CPF Inválido';
    }

    else {
        echo 'CPF Válido';
    }

    
}


*/


separadorLinha('Curso de PHP 8 Aula 038 Introdução as Expressões Regulares');
$cpf2 = '160.657.104-40';
echo $limparNumero = preg_replace('/[^0-9]/','',$cpf2); // preg_replace()Execute uma pesquisa de expressão regular e substitua. - /[^0-9]/ - expressao regular que diz (Que não esteja no intervalo de 0 a 9.)
separadorLinha();
$cpf3 = '21111111111';
var_dump(validarCpf($cpf));
separadorLinha();

var_dump(validarCpf($cpf2));
separadorLinha();

var_dump(validarCpf($cpf3));
separadorLinha();
separadorLinha('Curso de PHP 8 Aula 039 Introdução as Classes');

$msg = new Mensagem(); // chamando a classe
var_dump($msg);
separadorLinha('Curso de PHP 8 Aula 040 Introdução aos Atributos');
//echo $msg ->texto; // para acessa o atributo da classe (o atributo tem que ser publico)
separadorLinha();
//echo $msg ->texto ='texto de mensagem' //atribuir um novo valor
separadorLinha('Curso de PHP 8 Aula 041 Introdução aos Métodos
');
$msg2 = new Mensagem();
echo $msg2->renderizar();
separadorLinha('Curso de PHP 8 Aula 042 Introdução ao Encadeamento de Métodos');
echo $msg2 -> sucesso('Mensagem de sucesso') -> renderizar();//Encadeamento de Métodos
separadorLinha();
var_dump($msg2);
separadorLinha();
echo $msg2 -> erro('Mensagem de erro') -> renderizar();
separadorLinha();
var_dump($msg2);

separadorLinha();
echo $msg2 ->alerta('Mensagem de Alerta') -> renderizar();
var_dump($msg2);
separadorLinha();
echo $msg2 ->informa('Mensagem de Informação') -> renderizar();
var_dump($msg2);
?>
</body>

</html>
