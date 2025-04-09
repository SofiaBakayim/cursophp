<?php

//comentario de linha 

/* comentario de varias linhas
 */

//--comandos

/*print("ola mundoooooo");

echo "<h1>Ola mundo a partir do PHP</h1>";

echo"<div style=background-color:pink>Olá Olá</div>";*/

$a = 1; //Variavel
echo "<h1>ficheiro index.php, valor é:$a</h1>";
echo '<h2>teste de include $(a)</h2>';

//icludes
include "./system/configuration.php"; //Se não encontrar o ficheiro configuration.php, apenas dá um warning

require "system/helpers.inc.php";//se não enconttrar o ficheiro helpers.php, dá erro fatal

require_once "system/helpers.inc.php";//inc serve para dizer que um ficheiro está dentro de outro. colocar sempre o require_once pois assim permite que não se repita outra 

echo "<hr><h1>Tipo de Dados</h1>";
/* Tipos de dados */

//string
$nome = "Sofia";
echo "Nome: " . $nome . "<br>"; //catonar(sinónimos: Juntar, mesclar) variavéis 

//inteiro

$numero = 10;

//float - virgula flutuante
$float = 10.54;

//boolean - Verdadeiro/falso
$verdadeiro = true;
$falso = false;

//nulo
$nulo = null;

$salario = null;

//tipo de variaveis

echo gettype(value: $numero); //Devolve o tipo de dados
echo "<br>";
echo gettype(value: $verdadeiro);

echo "<br>";
var_dump(value: $verdadeiro); //mostra o tipo de dados e o valor

/* Funções */
echo "<hr><h1>Funções</h1>";

echo saudacao(); //chamar a função saudacao
echo "<br>";
echo date("H");

echo "<hr>";
//string
$texto = "<h1>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

echo $total = mb_strlen(trim($texto));
//echo $texto;
//echo strip_tags($texto);

echo resumirTexto($texto, 150, '(Ler mais...)');
echo "<hr>";

/* Operador ternario */
$a = 3; 
$b = 5;
if ($a > $b){
    echo "a: {$a} eh maior ou igual a b: {$b}";
}
else{
    echo "a: {$a} eh menor b: {$b}";
}

echo "<br>";
//operador ternario

echo $a >= $b ? "a: {$a} eh maior ou igual a b: {$b}" : "2- a: {$a} eh menor b: {$b}";

echo "<hr>";
//validar email
$email = 'Sofia.bakayim@gmail.com';
var_dump(validarEmail($email));

?>
