<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$media = ($nota1 + $nota2 + $nota3) / 3;

$mensagem = ($media >= 7) ? 'APROVADO' : 'REPROVADO';
?>

<!DOCTYPE html>
<html>
<head>
<title>Resultado do Cálculo de Média</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Resultado do Cálculo de Média</h1>

<div class="result">
  <h2>Média do Aluno:</h2>
  <p>Nota 1: <?php echo $nota1; ?></p>
  <p>Nota 2: <?php echo $nota2; ?></p>
  <p>Nota 3: <?php echo $nota3; ?></p>
  <p>Média: <?php echo number_format($media, 1); ?></p>
  <p>Resultado: <?php echo $mensagem; ?></p>
</div>

</body>
</html>
