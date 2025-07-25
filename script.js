const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnlogin-popup');
const iconClose = document.querySelector('.icon-close');
let login = document.querySelector('.login');
let register = document.querySelector('.register');

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
    login.classList.add('login2');
    register.classList.add('register2');
    register.classList.remove('register');
    login.classList.remove('login');
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
    login.classList.add('login');
    register.classList.add('register');
    register.classList.remove('register2');
    login.classList.remove('login2');
});

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});
iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});
