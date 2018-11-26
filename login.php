  <?php
$login = $_POST["nome"];
$senha = $_POST["password"];
$connect = mysqli_connect("localhost", "root","","vemEnem");
$query = "insert into usuario (nome, password) values ('$login', '$senha')";
$verifica = ("SELECT tipoUsuario FROM usuario WHERE login='$login' AND senha='$senha'") or die("Sem conexão com banco");
$dados = mysqli_query($connect,$verifica);

  while ($row=mysqli_fetch_array($dados,MYSQLI_ASSOC)) {
    $var=$row['tipoUsuario'];

    if (mysqli_num_rows($dados)<=0) {
       echo "Login ou senha incorretos!";
       die ();
    }else{
      if ($var == "admin") {
        header ("Location: paginaPerfilAdmin.html");
      }else{
        header("Location: paginaPerfil.html");
      }
    }

  }



 ?>
