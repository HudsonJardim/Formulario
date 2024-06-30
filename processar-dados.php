<?php


require_once 'config.php';

$nome = $_POST ['nome'];
$email = $_POST ['email'];
$mensagem = $_POST ['mensagem'];
$data_atual = date('d/m/Y');
$hora_atual = date ('H:i:s');


//preparar comando para tabela

$smtp = $conn -> prepare("INSERT INTO mensagem ( nome, email, mensagem, data, hora) VALUES (?, ?, ?, ?, ?)");
$smtp->bind_param("sssss",$nome, $email, $mensagem, $data_atual, $hora_atual);

//se executar de modo correto
if ($smtp->execute()){
    echo "<h1>Mensagem enviada com sucesso! Obrigado</h1>";
    }else{
        echo "Erro no envio da mensagem: ".$smtp->error;
           }
           $smtp-> close();
           $conn -> close();

           ?>

