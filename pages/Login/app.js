"use strict";

const inputUsername = document.querySelector('.input-username');
const inputPassword = document.querySelector('.input-password');
const btnLogin = document.querySelector('.btn-login');

const checkIfUserExists = async (username, password) => {
    const response = await fetch('../../Controller/__authenticate.php', {
        method: "POST",
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
                'username': username,
                'password': password,
                'method': 'check'
            })
    });

    const data = await response.json();
    return data.exists;                      
}

const handleLogin = async (user,pass) => {
    const username = inputUsername.value;
    const password = inputPassword.value;
    const method = encodeURIComponent("auth");
    const userExists = await checkIfUserExists(user,pass);
    console.log(userExists);
    if(!userExists){console.log("user doesnt exist"); return;}
    window.location.href = `../../Controller/__authenticate.php?username=${username}&password=${password}&method=auth`;
}


btnLogin.addEventListener('click',async (e) => {
    e.preventDefault();
    await handleLogin(inputUsername.value, inputPassword.value);
});

