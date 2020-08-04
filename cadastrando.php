<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$sql = "INSERT INTO usuario (nome, email, created) VALUES('$nome', '$email',NOW())";
$result_user = mysqli_query($conn, $sql);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color:green;'>Usuario cadastrado com sucesso</p>";
    header("Location: cadastro.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Usuario não foi cadastrado com sucesso</p>";
    header("Location: cadastro.php");

}

?>
