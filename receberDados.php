<?php
include_once "conexao.php";

$userName = $_POST['cadUserName'];
$userEmail = $_POST['cadEmail'];
$userPassword = $_POST['cadPassword'];

cadastrarUsuarios($userName, $userEmail, $userPassword);


?>