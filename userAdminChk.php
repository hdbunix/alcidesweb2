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
   echo '<br><a href="userAdmin.html">Voltar</a>';
   
} else {

   $_SESSION['Codigo'] = $adm['Codigo'];
   $_SESSION['Nome'] = $adm['Nome'];
   $_SESSION['Logado'] = true;
   
   // Abre sistema :
   // ------------  

   echo '<b>Menu de Opções</b><hr>';   
   echo '<a href="inclui_produtos.php">Incluir Produto</a>';
   echo '<br><a href="lista_produtos.php">Listar Produtos</a>'; 
   echo '<br><br><a href="logout.php">Sair do Sistema</a>';  
     
}
