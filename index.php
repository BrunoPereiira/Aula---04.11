<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página Inicial - Mini Projeto - Quiz</title>
    </head>
    <body>
        <?php if(isset($_SESSION['nome'])): ?>
            <h1>Bem vindo(a) <?= htmlspecialchars($_SESSION['nome'] ?? $_SESSION['email']) ?>!</h1>
            <p>Você já está autenticado</p>

            <a href="perfil.php"><button>Meu Perfil</button></a>
            <a href="quiz.php"><button>Meu Perfil</button></a>
            <a href="resultado.php"><button>Meu Perfil</button></a>
            <a href="logout.php"><button>Meu Perfil</button></a>

            <?php else: ?>
                <h1>Entrar na Platforma Quiz</h1>
                <?php if(!empty($_GET['erro'])): ?>
                    <p><?= htmlspecialchars($_GET['erro']) ?></p>
                <?php endif; ?>

                <?php if(!empty($_GET['ok'])): ?>
                    <p><?= htmlspecialchars($_GET['ok']) ?></p>
                <?php endif; ?>

                <form action="login.php" method="POST" autocomplete="off">
                    <label for="email">E-mail:</label><br>
                    <input type="email" id="email" name="email" required>

                    <br>
                    <br>

                    <label for="senha">Senha:<label><br>
                    <input type="password" id="senha" name="senha" required>

                    <br>
                    <br>

                    <input type="hidden" name="next" value="perfil.php">

                    <button type="submit">Entrar</button>
                    <br>

                </form>

                <br>
                <a href="esqueci_senha.php"><button type="button">Esqueci a Senha</a>
                <br>

                <a href="registro.php"><button type="button">Cadastrar</a>
        <?php endif; ?>
    </body>
</html>