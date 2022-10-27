const loginForm = document.querySelector('form.login');
const signupForm = document.querySelector('form.signup');
const loginBtn = document.querySelector('label.login');
const signupBtn = document.querySelector('label.signup');
const signupLink = document.querySelector('.signup-link a');
const loginLink = document.querySelector('.login-link a');

signupBtn.onclick = (() => {
    loginForm.style.marginLeft = "-50%";
});

loginBtn.onclick = (() => {
    loginForm.style.marginLeft = "0%";
});

signupLink.onclick = (() => {
    signupBtn.click();
    return false;
});

loginLink.onclick = (() => {
    loginBtn.click();
    return false;
});