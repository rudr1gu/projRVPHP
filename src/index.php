<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login</title>
    <link rel="stylesheet" href="./view/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>TodoList</h1>
    </header>
    <main>
        <?php
            include_once "./controller/main.php";
        ?>

        <section class="formulario">
            <form action="./controller/AuthController.php" method="get">
                <div class="input"><input type="text" name="usuario" id="iusuario" required><label for="iusuario"><i class='bx bx-user'></i> Usuario</label></div>
                <div class="input"><input type="password" name="senha" id="isenha" required><label for="isenha"><i class='bx bx-key' ></i> Senha</label> <span id="passView"><i class='bx bxs-low-vision'></i></span></div>
                <div class="input">
                    <input type="reset" value="limpar">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </section>
    </main>
    <footer>
        <p>Todos os direitos reservado</p>
    </footer>
    <script type="module" src="./controller/gui.js"></script>
</body>
</html>