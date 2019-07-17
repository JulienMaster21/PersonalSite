let init = function() {
    let form = document.getElementById('form');
    form.addEventListener('submit', validateForm);
};

function checkName () {
    // Define the name value
    let name = document.getElementById('name').value;

    // Define the regex for checking the name value
    let nameRegex = /^[a-zA-Z0-9 ]{6,255}$/;
    let nameValidationSucceeded = nameRegex.test(name);

    // Define error message on wrong name
    let nameErrorMessage = 'Voer een naam in van minimaal 6 tot 255 karakters';

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
    // Define the email value
    let email = document.getElementById('email').value;

    // Define the regex for checking the email value
    let emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    let emailValidationSucceeded = emailRegex.test(email);

    // Define error message on wrong email
    let emailErrorMessage = 'Voer een geldig emailadres in de vorm van gebruiker@example.com in';

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

function checkUser () {
    // Define the user value
    let user = document.getElementById('user').value;

    // Define the validation for checking the user value
    let userValidationSucceeded = user === "true";

    // Define error message on wrong user
    let userErrorMessage = 'De checkbox moet een waarde van \'true\' hebben';

    // check if user feedback already exists and if so to delete it
    let userFeedback = document.getElementById('user-feedback');
    if (document.body.contains(userFeedback)) {
        userFeedback.parentNode.removeChild(userFeedback);
    }
    // Check if user is valid
    if (userValidationSucceeded) {
        if (document.getElementById('user').classList.contains('is-invalid')) {
            document.getElementById('user').classList.remove('is-invalid');
        }
    }
    // Add feedback if user is not valid
    else if (!userValidationSucceeded) {
        document.getElementById('user').classList.add('is-invalid');
        let div = document.createElement('div');
        div.setAttribute('id', 'user-feedback');
        div.setAttribute('class', 'invalid-feedback');
        div.innerText = userErrorMessage;

        document.getElementById('user').parentElement.appendChild(div);
    }

    return userValidationSucceeded;
}

function checkAdministrator () {
    // Define the administrator value
    let administrator = document.getElementById('administrator').value;

    // Define the validation for checking the administrator value
    let administratorValidationSucceeded = administrator === "true";

    // Define error message on wrong administrator
    let administratorErrorMessage = 'De checkbox moet een waarde van \'true\' hebben';

    // check if administrator feedback already exists and if so to delete it
    let administratorFeedback = document.getElementById('administrator-feedback');
    if (document.body.contains(administratorFeedback)) {
        administratorFeedback.parentNode.removeChild(administratorFeedback);
    }
    // Check if administrator is valid
    if (administratorValidationSucceeded) {
        if (document.getElementById('administrator').classList.contains('is-invalid')) {
            document.getElementById('administrator').classList.remove('is-invalid');
        }
    }
    // Add feedback if administrator is not valid
    else if (!administratorValidationSucceeded) {
        document.getElementById('administrator').classList.add('is-invalid');
        let div = document.createElement('div');
        div.setAttribute('id', 'administrator-feedback');
        div.setAttribute('class', 'invalid-feedback');
        div.innerText = administratorErrorMessage;

        document.getElementById('administrator').parentElement.appendChild(div);
    }

    return administratorValidationSucceeded;
}

let validateForm = function(event) {
    event.preventDefault();

    // Submit the form if the validation is succesful
    if (checkName() &&
        checkEmail() &&
        checkUser() &&
        checkAdministrator()) {
        document.getElementById('form').submit();
    }
};

window.addEventListener('load', init);
