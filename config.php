<?php

$_server = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'formulario';
$conn = new mysqli ('localhost', 'root', '', 'formulario');

//$conn = new mysqli ('localhost', 'root', '', 'formulario');


if($conn -> connect_error) {
die ("falha ao se comunicar com banco de dados:" .$conn->connect_error);
}
?>