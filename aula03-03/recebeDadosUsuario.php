<?php
// include não da erro fatal
//require dá erro fatal
//require_once verifica se vc já fez o include do arquivo

include 'funcoesAluno.php';

$matricula = $_POST['matricula'];
                                                        $aluno = $_POST['aluno'];

if (cadastraAluno(['matricula' => $matricula, 'nome' =>$aluno])){

echo "$aluno, voce foi matriculado corretamente!";
}else{

    echo "$aluno, algo deu errado";
}

echo "<br></br><a href='dadosUsuario.php'>Cadastrar outro</a>
            &nbsp;&nbsp;&nbsp;
            <a href='listarUsuarios.php>Listar usuario</a>";

