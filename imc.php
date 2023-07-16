<?php
// Obtém os dados do formulário
$peso = $_POST['peso'];
$altura = $_POST['altura'];

// Calcula o IMC
$imc = $peso / ($altura * $altura);

// Define a classificação do IMC
if ($imc < 18.5) {
    $classificacao = 'Abaixo do peso';
} elseif ($imc >= 18.5 && $imc < 25) {
    $classificacao = 'Peso normal';
} elseif ($imc >= 25 && $imc < 30) {
    $classificacao = 'Sobrepeso';
} elseif ($imc >= 30 && $imc < 35) {
    $classificacao = 'Obesidade grau I';
} elseif ($imc >= 35 && $imc < 40) {
    $classificacao = 'Obesidade grau II';
} else {
    $classificacao = 'Obesidade grau III';
}

// Exibe a página HTML com o resultado
echo '<!DOCTYPE html>
<html>
<head>
<title>Resultado do IMC</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    padding: 20px;
  }
  
  h1 {
    color: #333333;
  }
  
  .result {
    margin-top: 20px;
    padding: 10px;
    background-color: #ffffff;
    border: 1px solid #cccccc;
  }
  
  .result h2 {
    margin-top: 0;
    color: #333333;
  }
  
  .result p {
    margin-bottom: 5px;
  }
</style>
</head>
<body>
<h1>Resultado do IMC</h1>
<div class="result">
  <h2>Seu IMC:</h2>
  <p>Peso: ' . $peso . ' kg</p>
  <p>Altura: ' . $altura . ' m</p>
  <p>IMC: ' . number_format($imc, 2) . '</p>
  <p>Classificação: ' . $classificacao . '</p>
</div>
</body>
</html>';
?>
    