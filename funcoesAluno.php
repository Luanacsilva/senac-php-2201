<?php

function cadastraAluno(array $aluno):bool 

{
        $f = fopen('alunos.csv', 'a'); 
        $escreveu= fwrite($f, "{$aluno['matricula']};\" {$aluno['nome']}\"\n");
        fclose($f);

        if($escreveu){
            return true;
        }else{
            return false;
        }

};
// retornar vetor
function listarAluno():array
{
    $alunos =[];

    $f = fopen('alunos.csv','r');
    while($linha = fgets($f)){

        var_dump($linha);
        echo "<br></br>";

    }
    return$alunos;
}