<?php
$dns = 'mysql:dbname=php;host=localhost';
$user ='root';
$pass ='';


$database = new PDO($dns,$user,$pass);

//atualizar um registro
$update = $database->exec('UPDATE tarefas 
                           SET descricao = "Sonhar com um dia melhor" 
                           WHERE id = 15;');

if( $update ){

    echo "Registro alterado!";

}else{
    echo "Erro ao alterar o registro";

}
