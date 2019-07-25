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

let validateForm = function(event) {
    event.preventDefault();

    // Submit the form if the validation is succesful
    if (checkName() &&
        checkEmail()) {
        document.getElementById('form').submit();
    }
};

window.addEventListener('load', init);
