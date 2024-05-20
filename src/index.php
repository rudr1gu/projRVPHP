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
    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-analytics.js";
        import { getAuth }from "";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyCxgpG-XHRZ8Rvg8MbVFcsixmcso9UUnAA",
            authDomain: "telalogin-a921c.firebaseapp.com",
            projectId: "telalogin-a921c",
            storageBucket: "telalogin-a921c.appspot.com",
            messagingSenderId: "850930177701",
            appId: "1:850930177701:web:1c5a1364c1219947435f4c",
            measurementId: "G-SHBPGY2HGC"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
        console.log(app);
     </script>
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
                    <button id="regi" onClick="registrar()">Registra</button>
                </div>
            </form>
        </section>
    </main>
    <script>
        let registrar = () =>{
            let email = document.getElementById("iusuario").value;
            let email = document.getElementById("isenha").value;


        }
    </script>
    <footer>
        <p>Todos os direitos reservado</p>
    </footer>
    <script type="module" src="./controller/gui.js"></script>
</body>
</html>