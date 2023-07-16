<?php
// Obtém a temperatura da URL
$temperatura = $_GET['temperatura'];

// Verifica a temperatura e define a mensagem correspondente
if ($temperatura < 0) {
    $mensagem = 'Congelante';
} elseif ($temperatura >= 0 && $temperatura < 15) {
    $mensagem = 'Frio';
} elseif ($temperatura >= 15 && $temperatura < 25) {
    $mensagem = 'Razoável';
} elseif ($temperatura >= 25) {
    $mensagem = 'Calor';
} else {
    $mensagem = 'Temperatura inválida';
}


echo '<!DOCTYPE html>
<html>
<head>
<title>Mensagem de temperatura</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    padding: 20px;
  }
  
  h1 {
    color: #333333;
  }
  
  p {
    margin-bottom: 10px;
  }
</style>
</head>
<body>
<h1>Mensagem de temperatura:</h1>
<p>A temperatura informada é: ' . $temperatura . ' graus Celsius</p>
<p>' . $mensagem . '</p>
</body>
</html>';
?>
