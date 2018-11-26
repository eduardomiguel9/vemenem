<?php
echo "Cadastrado realizado ";
$Nome = $_POST['nome'];/* quando possui $ é uma variável*//*POST é o método do formulário*/
$Sobrenome = $_POST['sobrenome'];
$Email = $_POST['email'];/*os nomes em colchetes são iguais os que estão no html */
$Senha = $_POST['senha'];
$Tipo = $_POST['tipoUsuario'];
$Login = $_POST['login'];


$connect = mysqli_connect("localhost","root","","vemEnem");/*mysqli_connect estabelece a conexão com o banco*/
$query="insert into usuario (nome, sobrenome,email,senha,tipoUsuario, login) values ('$Nome','$Sobrenome','$Email','$Senha','Usuario','$Login')";/*pega as variáveis e inseri no banco-- o nome entre os parantes é igual aos que estão no banco o nome ex: Contato tem que ser igual ao do banco */
$insert=mysqli_query($connect,$query);/*executa a conexão e faz a inserção*/
header("Location:index.html");

 ?>
