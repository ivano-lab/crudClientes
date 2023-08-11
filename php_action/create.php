<?php 
session_start();
require_once 'db_connect.php';

if (isset($_POST['btn-cadastrar'])) {

	if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
		$_SESSION['mensagem'] = "Formato de idade inválido! Use números!";
		header('Location: ../adicionar.php');
	} else { 
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
  
  $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";
  
  if(mysqli_query($connect, $sql)) {
      $_SESSION['mensagem'] = "Registro inserido com sucesso!";
      header('Location: ../index.php');
  } else {
      $_SESSION['mensagem'] = "Erro ao cadastrar!";
      header('Location: ../index.php');
    }
  }
}