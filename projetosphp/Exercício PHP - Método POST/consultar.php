<?php
// Inicialização de variáveis com valores padrão[cite: 1]
$exibir = false;
$nome = "";
$media = 0;
$situacao = "";

// Verifica se os dados foram enviados através do método POST (via formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Resgata os valores enviados pelos campos do formulário.
    $nome = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    // Calcula a média aritmética das três notas.
    $media = ($nota1 + $nota2 + $nota3) / 3;

    // Define a situação do aluno com base na média obtida (nota mínima: 6).
    if ($media >= 6) {
        $situacao = "Aprovado";
    } else {
        $situacao = "Reprovado";
    }  

    // Define a variável de controle para exibir o bloco de resultado no HTML.
    $exibir = true;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Média</title>
</head>
<body>
    <?php if ($exibir): ?>
        <!-- Bloco exibido quando os dados foram enviados e processados com sucesso[cite: 1, 2] -->
        <h2>Resultado do Aluno</h2>
        <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
        <p><strong>Média final:</strong> <?php echo number_format($media, 2, ',', '.'); ?></p>
        <p><strong>Situação:</strong> <?php echo $situacao; ?></p>
        <br>
        <a href="index.html">Calcular novamente</a>
    <?php else: ?>
        <!-- Bloco exibido se a página for acessada diretamente sem o envio do formulário[cite: 1, 2] -->
        <p>Nenhum dado foi enviado. <a href="index.html">Voltar ao formulário</a></p>
    <?php endif; ?>
</body>
</html>