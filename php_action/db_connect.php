<?php
$servername = "localhost";
$username = "root";
$password = "ivano!@#";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
  //echo "Erro na conexão: ".mysqli_connect_error();
else:
  //echo "Conexão estabelecida com sucesso!";
endif;