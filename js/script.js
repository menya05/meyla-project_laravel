document.getElementById('loginForm').addEventListener('submit', function(event){
    event.preventDefault();

    //deklarasi username dan password yang benar
    const correcUsername = "Meyla";
    const correcPassword = "Meyla";

    //mengambil username dan password yang diinput
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    //pengkondisian ketika usernama dan password benar maupunsalah
    if(username === correcUsername && password === correcPassword){
        alert('Sukses');
        window. location.href = 'index.html';
    }else{
        alert('Username atau password salah')
    }

});
