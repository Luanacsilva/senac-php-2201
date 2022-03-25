<?php
//comeco do conecta banco de dados
$dns = 'mysql:dbname=php;host=localhost';
$user ='root';
$pass ='';


$database = new PDO($dns,$user,$pass);
// fim do conecta banco de dados

$stmt = $database->query("SELECT id, descricao FROM tarefas");

$stmt->execute();

echo "<table>
         <tr>
            <td>ID</td><td>Descrição</td>
            </tr>";


while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){

    echo " <tr>
             <td>{$registro['id']}</td>
             <td>{$registro['descricao']}</td>   
    
    </tr>";
}

echo "</table>";