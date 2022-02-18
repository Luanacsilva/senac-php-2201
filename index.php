<?php

//Comentario de linha 
/*
Comentario de bloco */

define( 'XPTO', 'valor sempre igual' );//Declaração de constante

echo XPTO;//Usando a constante

$num =2;

$var =  '<br>'. "Olá mundo $num <br>"; // o ponto é sinal de concatenação no php
 echo $var;

 var_dump ($var);

//phpinfo();
// phpinfo, traz informaçoes importantes do php, como variaveis de ambientes 

//Após café
//vetores

$domingo = 'Domingo';//podemos declarar vetor 
$segunda = 'Segunda feira';
$terca = 'Terca feira';
$quarta = 'quarta feira';
$quinta = ' quinta feira';
$sexta = 'sexta feira';
$sabado = 'sabado';

$diaSemana =  [ 'Domingo',
                'segunda',
                'terca',
                'quarta',
                'quinta',
                'sexta',
                'sabado'];
                
 $contatos = [
    'peste' => 'vandinha',
    'esporadico' =>'mãe',
    'emergencia' =>'Gabi'
 ];
 echo "<br> mostre eles ". $contatos['emergencia']; //sem interpolação
 echo "<br> Mostre eles {$contatos['peste']}"; // com interpolação


$usuario[0] = ['nome' => 'Luiz',
               'senha' => '123'];

$usuario[1] = ['nome' => 'Fer',
               'senha' => '321'];

$usuario[2] = ['nome' => 'Bono',
               'senha' => '627'];

               //fazer um looping usando essa tabela para mostrar na tela 



 echo "<pre>/n/n";
 var_dump($usuario);






