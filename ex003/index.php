<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conhecendo as Variaveis</title>
</head>
<h1>Variaveis</h1>
<body>
    <?php 
$nome = "José";
$sobrenome = "Caio";
const PAIS = "Brasil";



echo "Muito Prazer, meu nome é $nome $sobrenome! " . PAIS;
//No PHP, o símbolo $ é usado para indicar uma variável, ou seja, um espaço na memória que guarda um valor que pode mudar durante a execução do programa. Por exemplo, $nome = "Caio"; cria uma variável chamada nome que armazena um texto. Já const é utilizado para declarar uma constante, que é um valor fixo que não pode ser alterado depois de definido. Esse tipo de declaração é comum em linguagens como

?>
</body>
</html>