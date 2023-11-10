//globalThis.handleCredentialResponse = async (response) => 
//import decrypt from '../jose-main/test/jwt/decrypt.test.mjs';

//import {jwtDecrypt}  from '../Controlador/jose-main/';

globalThis.onSignIn = (googleUser) => {
    console.log(googleUser.credential);
    googleUser= parseJwt(googleUser.credential);
    
    /*
    for (let i in googleUser) {
        console.log(googleUser[i]);
        
    }
    */
    
    console.log(googleUser);
    let profile = googleUser;
    auth(profile);
}

function parseJwt (token) {
    var base64Url = token.split('.')[1];
    var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
    var jsonPayload = decodeURIComponent(window.atob(base64).split('').map(function(c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));

    return JSON.parse(jsonPayload);
}

function auth(profile){
    href="../Controlador/index.vista.php?'"
}