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
    echo '<h1>Arquivo de configuração do sistema </h1>'; // tag em aberto vai engolir o código de outros arquivos tbm
    date_default_timezone_set('America/Sao_Paulo'); //definir o fuso horário

    //Curso de PHP 8 Aula 031 Constantes
    //informaçoes do site
    define('SITE_NOME','UnSet - blog'); //define - definir constantes 
    define('SITE_DESCRICAO','UnSet - Tecnologia em Sistemas');

    //Urls do sistema
    define('URL_PRODUCAO','url site feito');
    define('URL_DESENVOLVIMENTO','http://localhost/cursounsetphp/blog');

    const SITE_NOME2 = 'Unset';
    //não dar para colocar o const dentro de condicionais, mas pode utilizar o "define".
    ?>
</body>
</html>