<?php
// conecta banco de dados
$dns = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass ='';

$bd = new PDO($dns, $user, $pass);
// fim da conexão de banco de dados

//INSERT 
//FIM DO INSERT
if($bd->exec('DELETE FROM tarefas WHERE id = 13') ){

    echo "GRAVOU";
}else{

    echo " ai meu deus";
}
 