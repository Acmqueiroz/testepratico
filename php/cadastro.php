<?php 

include("conexao.php");


$nome= $_POST["nome"];
$email= $_POST["email"];

$insert= $connt->prepare("insert into users (nome, email) values (:nome,:email)"); 
$insert->execute(array(
    ":nome" =>$nome, 
    ":email" =>$email
));

if ($insert->rowCount() >0){
    echo json_encode(array(
        "mensagem" =>"Usuário cadastrado com sucesso" 
    ));

} else {
    http_response_code(400);
    echo json_encode(array(
        "mensagem" =>"Erro" 
    ));

}

