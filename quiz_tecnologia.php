<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mini Projeto - Quiz</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Quiz - Tecnologia</h1>

        <form action="resultado_tecnologia.php" method="POST">
            <h3>1) Qual destas empresas foi a primeira a ultrapassar o valor de mercado de 1 trilhão de dólares? </h3>
            <input type="radio" name="q1" value="a"> Amazon <br>
            <input type="radio" name="q1" value="b"> Google <br>
            <input type="radio" name="q1" value="c"> Apple <br>
            <input type="radio" name="q1" value="d"> Microsoft <br>

            <h3>2) O que significa a sigla CPU, presente em todos os computadores? </h3>
            <input type="radio" name="q2" value="a"> Central Processing Unit <br>
            <input type="radio" name="q2" value="b"> Computer Power Unit <br>
            <input type="radio" name="q2" value="c"> Central Programming Utility <br>
            <input type="radio" name="q2" value="d"> Control Process User <br>

            <h3>3) Qual destas tecnologias é a base do funcionamento de criptomoedas como o Bitcoin? </h3>
            <input type="radio" name="q3" value="a"> Inteligência Artificial <br>
            <input type="radio" name="q3" value="b"> Blockchain <br>
            <input type="radio" name="q3" value="c"> Cloud Computing <br>
            <input type="radio" name="q3" value="d"> Big Data <br>

            <h3>4) Em relação à Internet das Coisas (IoT), qual é a melhor definição? </h3>
            <input type="radio" name="q4" value="a"> Computadores superpotentes conectados em rede local <br>
            <input type="radio" name="q4" value="b"> Dispositivos físicos conectados à internet, trocando dados automaticamente <br>
            <input type="radio" name="q4" value="c"> Rede social voltada para objetos inteligentes <br>
            <input type="radio" name="q4" value="d"> Um tipo de inteligência artificial usada em automóveis <br>

            <h3>5) Qual dessas linguagens é principalmente usada no desenvolvimento de aplicativos Android? </h3>
            <input type="radio" name="q5" value="a"> Swift <br>
            <input type="radio" name="q5" value="b"> Kotlin <br>
            <input type="radio" name="q5" value="c"> Ruby <br>
            <input type="radio" name="q5" value="d"> C# <br>

            <br>
            <div class="btn">
                <button type="submit">Enviar Respostas</button>
            </div>
        </form>
    </body>
</html