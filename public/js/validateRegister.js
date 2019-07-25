let init = function() {
    let form = document.getElementById('form');
    form.addEventListener('submit', validateForm);
};

function checkLang() {
    return document.getElementById('html').getAttribute('lang');
}

function checkName () {
    // Initialise the name error message value
    let nameErrorMessage;

    // Define the name value
    let name = document.getElementById('name').value;

    // Define the regex for checking the name value
    let nameRegex = /^[a-zA-Z0-9 ]{6,255}$/;
    let nameValidationSucceeded = nameRegex.test(name);

    // Define error message on wrong name
    if (checkLang() === 'nl') {
        nameErrorMessage = 'Voer een naam in van minimaal 6 tot 255 karakters.';
    }
    else {
        nameErrorMessage = 'Enter a name with a minimum of 6 to 255 characters.';
    }

    // check if name feedback already exists and if so to delete it
    let nameFeedback = document.getElementById('name-feedback');
    if (document.body.contains(nameFeedback)) {
        nameFeedback.parentNode.removeChild(nameFeedback);
    }
    // Check if name is valid
    if (nameValidationSucceeded) {
        if (document.getElementById('name').classList.contains('is-invalid')) {
            document.getElementById('name').classList.remove('is-invalid');
        }
    }
    // Add feedback if name is not valid
    else if (!nameValidationSucceeded) {
        document.getElementById('name').classList.add('is-invalid');
        let div = document.createElement('div');
        div.setAttribute('id', 'name-feedback');
        div.setAttribute('class', 'invalid-feedback');
        div.innerText = nameErrorMessage;

        document.getElementById('name').parentElement.appendChild(div);
    }

    return nameValidationSucceeded;
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

function checkConfirmPassword () {
    // Initialise the email error message value
    let confirmPasswordErrorMessage;

    // Define the password value
    let password = document.getElementById('password').value;

    // Define the confirmPassword value
    let confirmPassword = document.getElementById('confirmPassword').value;

    // Define the logic for checking the password value
    let confirmPasswordValidationSucceeded = password === confirmPassword;

    // Define error message on wrong confirmPassword
    if (checkLang() === 'nl') {
        confirmPasswordErrorMessage = 'Het ingevulde wachtwoord is niet hetzelfde.';
    }
    else {
        confirmPasswordErrorMessage = 'The entered password isn\'t the same.';
    }

    // check if confirmPassword feedback already exists and if so to delete it
    let confirmPasswordFeedback = document.getElementById('confirmPassword-feedback');
    if (document.body.contains(confirmPasswordFeedback)) {
        confirmPasswordFeedback.parentNode.removeChild(confirmPasswordFeedback);
    }
    // Check if confirmPassword is valid
    if (confirmPasswordValidationSucceeded) {
        if (document.getElementById('confirmPassword').classList.contains('is-invalid')) {
            document.getElementById('confirmPassword').classList.remove('is-invalid');
        }
    }
    // Add feedback if confirmPassword is not valid
    else if (!confirmPasswordValidationSucceeded) {
        document.getElementById('confirmPassword').classList.add('is-invalid');
        let div = document.createElement('div');
        div.setAttribute('id', 'confirmPassword-feedback');
        div.setAttribute('class', 'invalid-feedback');
        div.innerText = confirmPasswordErrorMessage;

        document.getElementById('confirmPassword').parentElement.appendChild(div);
    }

    return confirmPasswordValidationSucceeded;
}

let validateForm = function(event) {
    event.preventDefault();

    // Submit the form if the validation is succesful
    if (checkName() &&
        checkEmail() &&
        checkPassword() &&
        checkConfirmPassword()) {
        document.getElementById('form').submit();
    }
};

window.addEventListener('load', init);
