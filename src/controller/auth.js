  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
  import { firebaseConfig } from "./chave/firebase.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-analytics.js";
  import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-auth.js";
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const auth = getAuth(app);
  const analytics = getAnalytics(app);


  const btnRegistar = document.getElementById('registrar');

    btnRegistar.addEventListener('click', ()=>{
        let email = document.getElementById('iusuario').value;
        let senha = document.getElementById('isenha').value;

        createUserWithEmailAndPassword(auth, email, senha)
        .then((userCredential) => {
        // Signed up 
        const user = userCredential.user;
        console.log("Usuario criado:", user);
        })
        .catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;
        console.log(errorCode, errorMessage);
    });
  })

 