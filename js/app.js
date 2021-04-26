const login_password_marked = document.querySelector('.login-data-password-marked');
const login_password_marked_active = document.querySelector('.login-data-password-marked-active');
const login_data_password = document.querySelector('.login-data-password');
const sigin_password_marked = document.querySelector('.sigin-data-password-marked');
const sigin_password_marked_active = document.querySelector('.sigin-data-password-marked-active');
const sigin_data_password = document.querySelector('.sigin-data-password');
const sigin_data_veri_password = document.querySelector('.sigin-data-veri-password');
let change_model_login = document.querySelector('.login-footer-sigin span');
let change_model_sigin = document.querySelector('.sigin-footer-login span');
// Masquer et afficher le mot de passe
function show_login(){
    login_data_password.setAttribute('type', 'text');
}
function hide_login(){
    login_data_password.setAttribute('type', 'password');
}
function show_sigin(){
    sigin_data_password.setAttribute('type', 'text');
    sigin_data_veri_password.setAttribute('type', 'text');
}
function hide_sigin(){
    sigin_data_password.setAttribute('type', 'password');
    sigin_data_veri_password.setAttribute('type', 'password');
}
//

//
let pwShow_login = 0;
login_password_marked.addEventListener('click', (e)=>{
    e.target.style.display ="none";
    e.target.parentElement.children[3].style.display = "block";
    if(pwShow_login == 0){
        pwShow_login = 1;
        show_login();
    }else{
        pwShow_login = 0;
        hide_login();
    }
}, false);
login_password_marked_active.addEventListener('click', (e)=>{
    e.target.style.display ="none";
    e.target.parentElement.children[2].style.display = "block";
    if(pwShow_login == 0){
        pwShow_login = 1;
        show_login();
    }else{
        pwShow_login = 0;
        hide_login();
    }
}, false);
//
sigin_password_marked.addEventListener('click', (e)=>{
    e.target.style.display ="none";
    sigin_password_marked_active.style.display = "block";
    if(pwShow_login == 0){
        pwShow_login = 1;
        show_sigin();
    }else{
        pwShow_login = 0;
        hide_sigin();
    }
}, false);
sigin_password_marked_active.addEventListener('click', (e)=>{
    e.target.style.display ="none";
    sigin_password_marked.style.display = "block";
    if(pwShow_login == 0){
        pwShow_login = 1;
        show_sigin();
    }else{
        pwShow_login = 0;
        hide_sigin();
    }
}, false);
// ---------

// Alterner de la page d'inscription a se conncter
change_model_login.addEventListener('click', (e)=>{
    e.target.parentElement.parentElement.parentElement.style.display = 'none';
    e.target.parentElement.parentElement.parentElement.parentElement.children[2].style.display = 'flex';
});
change_model_sigin.addEventListener('click', (e)=>{
    e.target.parentElement.parentElement.parentElement.style.display = 'none';
    e.target.parentElement.parentElement.parentElement.parentElement.children[1].style.display = 'flex';
});
// -----