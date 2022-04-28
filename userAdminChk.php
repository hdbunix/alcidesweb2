<?php
session_start();
include "connect.php";
$us=$_POST['username'];
$pw=$_POST['password'];
$adm = $pdo->query('Select Codigo, Nome from usuarios_adm where Login = "'.$us.'" and Senha =md5("'.$pw.'")')->fetch();
// Se usuário e senha não existem :
// ------------------------------
if (!$adm['Codigo']) {
   echo '<b>Usuário não existe ou senha inválida.</b>';
   echo '<br><a href="userAdmin.php">Voltar</a>';
   
} else {

   $_SESSION['Codigo'] = $adm['Codigo'];
   $_SESSION['Nome'] = $adm['Nome'];
   $_SESSION['LogadoADM'] = true;
   
   // Abre sistema :
   // ------------  

   echo '<b>Menu de Opções</b><hr>';   
   echo '<a href="userAdminArea.php">Area Administrativa</a>';
     
}
