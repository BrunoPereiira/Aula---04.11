<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mini Projeto - Quiz</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Quiz - Matematica</h1>

        <form action="resultado_matematica.php" method="POST">
            <h3>1) Qual é o resultado da expressão: 8 + 4 * 3 - 10 / 2 </h3>
            <input type="radio" name="q1" value="a"> 28 <br>
            <input type="radio" name="q1" value="b"> 30 <br>
            <input type="radio" name="q1" value="c"> 34 <br>
            <input type="radio" name="q1" value="d"> 36 <br>

            <h3>2) Se x = 5, qual é o valor de 2x² - 3x + 4? </h3>
            <input type="radio" name="q2" value="a"> 29 <br>
            <input type="radio" name="q2" value="b"> 34 <br>
            <input type="radio" name="q2" value="c"> 39 <br>
            <input type="radio" name="q2" value="d"> 44 <br>

            <h3>3) Em uma sequência numérica: 2, 4, 8, 16, 32, ?. Qual é o próximo número? </h3>
            <input type="radio" name="q3" value="a"> 48 <br>
            <input type="radio" name="q3" value="b"> 54 <br>
            <input type="radio" name="q3" value="c"> 64 <br>
            <input type="radio" name="q3" value="d"> 128 <br>

            <h3>4) Um relógio marca 3h15min. Qual é o menor ângulo entre o ponteiro das horas e o dos minutos? </h3>
            <input type="radio" name="q4" value="a"> 37,5° <br>
            <input type="radio" name="q4" value="b"> 45° <br>
            <input type="radio" name="q4" value="c"> 52,5° <br>
            <input type="radio" name="q4" value="d"> 60° <br>

            <h3>5) Três amigos compram juntos uma pizza de R$ 36,00. Se João pagou o dobro do que Maria, e Ana pagou o triplo do que Maria, quanto cada um pagou? </h3>
            <input type="radio" name="q5" value="a"> João R$12,00; Maria R$6,00; Ana R$18,00 <br>
            <input type="radio" name="q5" value="b"> João R$9,00; Maria R$6,00; Ana R$21,00 <br>
            <input type="radio" name="q5" value="c"> João R$10,00; Maria R$5,00; Ana R$21,00 <br>
            <input type="radio" name="q5" value="d"> João R$8,00; Maria R$4,00; Ana R$24,00 <br>

            <br>
            <div class="btn">
                <button type="submit">Enviar Respostas</button>
            </div>
        </form>
    </body>
</html