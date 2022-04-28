<?php
session_start();
include "connect.php";
$us=$_POST['username'];
$pw=$_POST['passwd'];
$adm = $pdo->query('Select Codigo, Nome from usuarios where Login = "'.$us.'" and Senha =md5("'.$pw.'")')->fetch();

// Se usuário e senha não existem :
// ------------------------------
if (!$adm['Codigo']) {
   echo '<b>Usuário não existe ou senha inválida.</b>';
   echo '<br><a href="userLogin.html">Voltar</a>';
   
} else {

   $_SESSION['Codigo'] = $adm['Codigo'];
   $_SESSION['Nome'] = $adm['Nome'];
   $_SESSION['Logado'] = true;
   
   // Abre sistema :
   // ------------  
echo '
<h1>Login efetuado!!!</h1><hr>
<a class="btn btn-lg btn-primary" href="index.php">Voltar à loja</a>
<a class="btn btn-lg btn-warning" href="mainCart.php">Carrinho</a>
<a class="btn btn-lg btn-danger" href="userLogout.php">Deslogar</a>
     ';
}
?>

