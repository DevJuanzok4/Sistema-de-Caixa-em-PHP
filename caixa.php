<?php 
$nome = $_POST['nome'];
$primeiroproduto = $_POST['primeiroproduto'];
$segundoproduto = $_POST['segundoproduto'];
$pagamento = $_POST['pagamento'];


$soma = $primeiroproduto + $segundoproduto;
$resultado = $soma - $pagamento;

echo " <center><h1> Nota Fiscal: </h1></center>  ";
echo " <center> o nome do cliente é: $nome <br></center> ";
echo "<center>Ele Gastou : $soma <br></center> ";
echo "<center> O troco Recebido é : $resultado <br></center> ";












?>