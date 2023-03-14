<?php 
namespace sistema\Nucleo; // namespace tem que ser a primeira declaração do arquivo (MESMO)
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--bootstrap não será utilizado dessa forma-->
</head>

<body>

    <?php 
    
    
    

    //Curso de PHP 8 Aula 039 Introdução as Classes
    
    /**
     * Classe Mensagem - responsável por exibir as mensagens do sistema
     * @author Davi Gledson <davigledson@outlook.com>
     */
    
   


    class Mensagem
    {
        private $texto = 'ola, sou um atributo privado dentro da classe'; // public significa que o atributo e publico e pode ser acessado fora da classe


        private $css; //private - somente dentro da classe, se dará o acesso ao tributo (normalmente usado)

        //métodos são funções dentro de classes

        /**
         * Método responsável pela renderização
         * @return string
         */
        public function renderizar(): string
        {
             // $this e uma pseudo classe para acessar os atributos ou outros métodos
            return "<div class='{$this -> css}'>
            
            {$this -> texto} 
            
            </div>";
            //retorna a variável texto e css, dentro de uma classe CSS
        }
        private function filtrar(string $mensagem): string
        {
            return filter_var($mensagem,FILTER_SANITIZE_SPECIAL_CHARS); //FILTER_SANITIZE_SPECIAL_CHARS para não renderizar tags
            //strip_tags = faz sumir as tags
        }

        //Curso de PHP 8 Aula 042 Introdução ao Encadeamento de Métodos

        public function sucesso(string $mensagem):Mensagem
        {   
            $this -> css = 'alert alert-success';

           $this->texto = $this-> filtrar($mensagem);
           return $this;
        }

        public function erro(string $mensagem):Mensagem
        {   
            $this -> css = 'alert alert-danger';

           $this->texto = $this-> filtrar($mensagem);
           return $this;
        }

        public function alerta(string $mensagem):Mensagem
        {   
            $this -> css = 'alert alert-warning';

           $this->texto = $this-> filtrar($mensagem);
           return $this;
        }
        public function informa(string $mensagem):Mensagem
        {   
            $this -> css = 'alert alert-primary';

           $this->texto = $this-> filtrar($mensagem);
           return $this;
        }
        //Curso de PHP 8 Aula 043 Introdução aos Métodos Mágicos
        //Curso de PHP 8 Aula 043 Introdução aos Métodos Mágicos

    public function __tostring() //método magico (para não precisar encadear  o método renderizar)
    //Métodos mágicos são métodos especiais que sobrescrever o comportamento padrão do PHP quando certas operações são realizadas em um objeto.
    {
        return $this -> renderizar();
    }
    }


    
    ?>

</body>

</html>