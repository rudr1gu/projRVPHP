const passShow = document.getElementById('passView');
const senha =  document.getElementById('isenha');

passShow.addEventListener('click', ()=>{
    if(senha.type === 'password') {
        senha.type = 'text' ;
        passShow.innerHTML = "<i class='bx bx-show'></i>" ;
    } else {
        senha.type = 'password';
        passShow.innerHTML = "<i class='bx bxs-low-vision'>";
    }
})