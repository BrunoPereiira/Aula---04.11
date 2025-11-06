<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado do Quiz</h1>

    <?php
    $gabarito = [
        "q1" => "c", // A alternativa correta é Apple
        "q2" => "a", // A alternativa correta é Central Processing Unit
        "q3" => "b", // A alternativa correta é Blockchain
        "q4" => "b", // A alternativa correta é Dispositivos físicos conectados à internet, trocando dados automaticamente
        "q5" => "b" // A alternativa correta é Kotlin
    ];
    
    $pontos = 0;

    foreach ($gabarito as $pergunta => $pergunta_armazenada) {
        if (isset($_POST[$pergunta]) && $_POST[$pergunta] === $pergunta_armazenada) {
            $pontos++;
        }
    }

    echo "<p>Você acertou <strong>$pontos</strong> de " . count($gabarito) . " perguntas</p>";

    if ($pontos == 5) {
        echo "<p>Excelente! Foi muito bem!</p>";
    } elseif ($pontos >= 3) {
        echo "<p>Bom trabalho! Mas ainda pode melhorar.</p>";
    } else {
        echo "<p>Você consegue, continue estudando!</p>";
    }

    ?>
    <a href="quiz_tecnologia.php">Tentar novamente</a>
    <a href="quiz.php">Escolher outro Quiz</a>

</body>
</html>