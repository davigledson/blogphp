
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
// Arquivo index responsável pela iniciação do projeto

// include = incluir -A função include() do PHP tem como objetivo incluir (como o próprio nome diz) um arquivo dentro do outro quando acessado. Caso ocorra algum problema na inclusão deste, será apresentado um Warning (aviso) que não foi possível incluir o arquivo e continuará a exibição da página normalmente sem a inclusão do arquivo. A função include() aceita parâmetros via GET quando chama um arquivo. - 

// require = requerido - A função require() do PHP tem a mesma funcionalidade da função include(), citada acima, com a diferença que se caso o arquivo que você está incluindo não exista (ou não seja encontrado), será gerado um Fatal Error (erro fatal), paralizando a execução de qualquer script que venha após a linha do require(); outra divergência é o fato desta função não aceitar parâmetros via GET para o arquivo chamado. Caso você utilize este parâmetro, ele será ignorado.

//As funções include_once() e require_once() do PHP tem as suas funcionalidades praticamente “idênticas” às funções include() e require(), respectivamente. Digo “idênticas” (entre aspas) pois a única diferença entre elas é o fato da funções que possuem o “_once” só permitirem a inclusão do arquivo uma única vez na página e ignorando caso você chame ela mais vezes sem notar.


/* 
 - no caso de informações essências para o o sistema, utiliza-se normalmente o require

 - informações não fundamentais tipo o topo pou rodapé, usa-se o include

*/
    require_once 'sistema/configuracao.php';
    include_once 'Helpers.php'; // não diferencia minusculas ou maiúsculas
    echo '<h1>arquivo index'

?>
</body>
</html>