<?php

        $f = fopen('usuario.csv', 'a'); 
        fwrite($f, "{$usuario['usuario']};\" {$aluno['nome']}\"\n");
        fclose($f);

        if($writting){
            return true;
        }else{
            return false;
        }



function listarAluno():array
{
    $alunos =[];

    $f = fopen('usuario.csv','r');
    while($linha = fgets($f)){

        var_dump($linha);
        echo "<br></br>";

    }
}