<?php
$data = $_GET;
session_start();
$_SESSION["nro_item"] = @$_SESSION["nro_item"] + 1;
$x = $_SESSION["nro_item"];
$_SESSION['CodigoEAN'][$x]=$data['CodEAN'];
$_SESSION['NomeProd'][$x]=$data['Produto'];
$_SESSION['preco'][$x]=$data['Preco'];
$_SESSION["total"] = @$_SESSION["total"]+ $data ["Preco"];

echo '<b>Lojas Baratão - Carrinho de Compras</b><hr>';
echo '<table border=1"><tr><td>Código</td><td>Produto</td><td>Valor R$</td></tr>';
for ($a=1; $a<=$x; $a++) {
   echo '<tr><td>'.$_SESSION['CodigoEAN'][$a].'</td>';
   echo '<td>'.$_SESSION['NomeProd'][$a].'</td>';
   echo '<td>'.$_SESSION['preco'][$a].'</td>';
   echo '</tr>';
}
echo '<table>';
echo "<br>Total R$ " . number_format ($_SESSION["total"],2,",",".");

?>

<a href="index.php" class="btn btn-lg btn-primary">Inicio</a>
<br><br>
<a href="mainCartPay.php" class="btn btn-lg btn-success" target = "_SELF">Pagar</a>
<br><br>
<a href="mainCartClr.php" class="btn btn-lg btn-danger" target = "_SELF">Limpar carrinho</a>