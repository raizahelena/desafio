<?php
if (isset($_GET['enviar'])) {
	
	//Variaveis de POST
	//====================================================
	$nome = $_GET['_nome'];	
    $email = $_GET['_email'];
    $telefone = $_GET['_telefone'];	
  
  //Faz conexão com banco de dados Mysql
	//====================================================
  $connect = new mysqli('localhost', 'root', '', 'Teste');
  
  if(!$connect){
	  die('Erro na conexão (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
  }
  

  //Insere dados na tabela Usuarios
  $query = "INSERT INTO usuarios (nome,email,telefone) VALUES ('$nome','$email','$telefone')"
   or die("Erro na Consulta" . mysqli_error($link));
   
  $result = $connect->query($query);
 
  //Caso de sucesso ou erro, retorna uma mensagem
    if($result>0){
	  echo"<script>window.location.href='index.html';window.alert('Usuario cadastrado com sucesso!');</script>";
    }else{
      echo"<script>window.location.href='index.html';window.alert('Nao foi possivel cadastrar o usuario');</script>";
    }
	 mysqli_close($connect);
} 
?>