<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mini Projeto - Quiz</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Quiz - Velozes e Furiosos</h1>

        <form action="resultado_vf.php" method="POST">
            <h3>1) Qual carro clássico Dominic Toretto dirige em várias partes da franquia?</h3>
            <input type="radio" name="q1" value="a"> Nissan Skyline GT-R <br>
            <input type="radio" name="q1" value="b"> Dodge Charger R/T 1970 <br>
            <input type="radio" name="q1" value="c"> Toyota Supra MK4 <br>
            <input type="radio" name="q1" value="d"> Chevrolet Camaro SS <br>

            <h3>2) Qual carro Brian O’Conner utiliza na corrida final do primeiro filme contra Dom? </h3>
            <input type="radio" name="q2" value="a"> Toyota Supra laranja <br>
            <input type="radio" name="q2" value="b"> Mitsubishi Eclipse verde <br>
            <input type="radio" name="q2" value="c"> Nissan Skyline azul <br>
            <input type="radio" name="q2" value="d"> Mazda RX-7 vermelho <br>

            <h3>3) No filme Mais Velozes e Mais Furiosos (2003), qual carro Roman Pearce pilota em grande parte da trama? </h3>
            <input type="radio" name="q3" value="a"> Mitsubishi Eclipse Spyder <br>
            <input type="radio" name="q3" value="b"> Ford Mustang GT <br>
            <input type="radio" name="q3" value="c"> Dodge Challenger <br>
            <input type="radio" name="q3" value="d"> Mitsubishi Lancer Evolution <br>

            <h3>4) Em Velozes e Furiosos: Desafio em Tóquio, Han é visto dirigindo frequentemente qual carro? </h3>
            <input type="radio" name="q4" value="a"> Nissan 350Z <br>
            <input type="radio" name="q4" value="b"> Mazda RX-7 Veilside <br>
            <input type="radio" name="q4" value="c"> Toyota Chaser <br>
            <input type="radio" name="q4" value="d"> Honda S2000 <br>

            <h3>5) Qual desses carros aparece no famoso assalto ao cofre em Velozes e Furiosos 5: Operação Rio? </h3>
            <input type="radio" name="q5" value="a"> Nissan Skyline GT-R R34 <br>
            <input type="radio" name="q5" value="b"> Chevrolet Corvette Grand Sport <br>
            <input type="radio" name="q5" value="c"> Dodge Charger Preto <br>
            <input type="radio" name="q5" value="d"> Subaru Impreza WRX STi <br>

            <br>
            <div class="btn">
                <button type="submit">Enviar Respostas</button>
            </div>
        </form>
    </body>
</html