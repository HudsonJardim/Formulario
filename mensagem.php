<?php

require_once 'config.php';

$senhaSecreta = "123";
if($_SERVER ["REQUEST_METHOD"]=="POST"){
$senhadigitada = $_POST['senha'];

//digitou a senha certo
if($senhadigitada === $senhaSecreta){
    $sql = "SELECT * FROM mensagem";
    $result = $conn->query($sql);
}else{
echo "<h1>Senha Incorreta!</h1>"; //AQUI

}

}

?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ver mensagem</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form  method="post"> 
<label for="senha">Senha:</label>
<input type="password" name="senha" placeholder="Digite sua senha" required>
 <button type="submit">Enviar</button>
 </form>

 <div class="mensagem">
</form>
 <?php if (isset($result) && $result->num_rows >0)  : ?>
    <h2>mensagem</h2>
    <ul>
        <?php while ($row = $result->fetch_assoc()) :?>
            <li>
                <strong>Nome: </strong> <?php echo $row ["nome"]; ?><br>
                <strong>email: </strong> <?php echo $row ["email"]; ?><br>
                <strong>mensagem: </strong> <?php echo $row ["mensagem"]; ?><br>
                <strong>Data e Hora: </strong> <?php echo $row["Data"]. "às".$row ["data"];?><br>
            </li>
            
            <?php endwhile; ?>
        </ul>
        <?php else :  ?>      
             <p>Nenhuma mensagem encontrada. </p>
            <?php endif; ?>
     
 <body>


</html>
