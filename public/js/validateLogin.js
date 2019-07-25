let init = function() {
    let form = document.getElementById('form');
    form.addEventListener('submit', validateForm);
};

function checkLang() {
    return document.getElementById('html').getAttribute('lang');
}

function checkEmail () {
    // Initialise the email error message value
    let emailErrorMessage;

    // Define the email value
    let email = document.getElementById('email').value;

    // Define the regex for checking the email value
    let emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    let emailValidationSucceeded = emailRegex.test(email);

    // Define error message on wrong email
    if (checkLang() === 'nl') {
        emailErrorMessage = 'Voer een geldig emailadres in de vorm van gebruiker@example.com in.';
    }
    else {
        emailErrorMessage = 'Enter a valid email address in the form of user@example.com.';
    }

    // check if email feedback already exists and if so to delete it
    let emailFeedback = document.getElementById('email-feedback');
    if (document.body.contains(emailFeedback)) {
        emailFeedback.parentNode.removeChild(emailFeedback);
    }
    // Check if email is valid
    if (emailValidationSucceeded) {
        if (document.getElementById('email').classList.contains('is-invalid')) {
            document.getElementById('email').classList.remove('is-invalid');
        }
    }
    // Add feedback if email is not valid
    else if (!emailValidationSucceeded) {
        document.getElementById('email').classList.add('is-invalid');
        let div = document.createElement('div');
        div.setAttribute('id', 'email-feedback');
        div.setAttribute('class', 'invalid-feedback');
        div.innerText = emailErrorMessage;

        document.getElementById('email').parentElement.appendChild(div);
    }

    return emailValidationSucceeded;
}

function checkPassword () {
    // Initialise the password error message value
    let passwordErrorMessage;

    // Define the password value
    let password = document.getElementById('password').value;

    // Define the regex for checking the password value
    let passwordRegex = /^.{8,}/;
    let passwordValidationSucceeded = passwordRegex.test(password);

    // Define error message on wrong password
    if (checkLang() === 'nl') {
        passwordErrorMessage = 'Voer een wachtwoord in van minimaal 8 karakters.';
    }
    else {
        passwordErrorMessage = 'Enter a password with a minimum of 8 characters.'
    }

    // check if password feedback already exists and if so to delete it
    let passwordFeedback = document.getElementById('password-feedback');
    if (document.body.contains(passwordFeedback)) {
        passwordFeedback.parentNode.removeChild(passwordFeedback);
    }
    // Check if password is valid
    if (passwordValidationSucceeded) {
        if (document.getElementById('password').classList.contains('is-invalid')) {
            document.getElementById('password').classList.remove('is-invalid');
        }
    }
    // Add feedback if password is not valid
    else if (!passwordValidationSucceeded) {
        document.getElementById('password').classList.add('is-invalid');
        let div = document.createElement('div');
        div.setAttribute('id', 'password-feedback');
        div.setAttribute('class', 'invalid-feedback');
        div.innerText = passwordErrorMessage;

        document.getElementById('password').parentElement.appendChild(div);
    }

    return passwordValidationSucceeded;
}

let validateForm = function(event) {
    event.preventDefault();

    // Submit the form if the validation is succesful
    if (checkEmail() &&
        checkPassword()) {
        document.getElementById('form').submit();
    }
};

window.addEventListener('load', init);
