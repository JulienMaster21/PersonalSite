
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app'
// });

/**
 * Enbale popovers
 */

$(function () {
    $('[data-toggle="popover"]').popover()
});

/**
 *
 */

window.menu = function menu() {
    if (document.getElementById("dropdown").style.display === "block") {
        document.getElementById("dropdown").style.display = "none";
    }
    else {
        document.getElementById("dropdown").style.display = "block";
    }
}

/**
 * Check if page has input and enable front-end validation
 */

// Define function to add the form checking eventListener
let init = function() {
    let form = document.getElementById('form');
    if (form) {
        form.addEventListener('submit', validateForm);
    }
};

// Function to check the current language
function checkLang() {
    return document.getElementById('html').getAttribute('lang');
}

// Functions to check the value of an input and handle error messages
window.checkName = function checkName() {
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
        } else {
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
    };

window.checkGrade = function checkGrade() {
        // Initialise the grade error message value
        let gradeErrorMessage;

        // Define the grade value
        let grade = document.getElementById('grade').value;

        // Define the regex for checking the grade value
        let gradeRegex = /^(0?[1-9][.][0-9]|1[0]|1[0][.][0])$/;
        let gradeValidationSucceeded = gradeRegex.test(grade);

        // Define error message on wrong grade
        if (checkLang() === 'nl') {
            gradeErrorMessage = 'Voer een cijfer van 1 tot 10 in met de vorm van 1.1.';
        } else {
            gradeErrorMessage = 'Enter a number from 1 to 10 in the form of 1.1.';
        }

        // check if grade feedback already exists and if so to delete it
        let gradeFeedback = document.getElementById('grade-feedback');
        if (document.body.contains(gradeFeedback)) {
            gradeFeedback.parentNode.removeChild(gradeFeedback);
        }
        // Check if grade is valid
        if (gradeValidationSucceeded) {
            if (document.getElementById('grade').classList.contains('is-invalid')) {
                document.getElementById('grade').classList.remove('is-invalid');
            }
        }
        // Add feedback if grade is not valid
        else if (!gradeValidationSucceeded) {
            document.getElementById('grade').classList.add('is-invalid');
            let div = document.createElement('div');
            div.setAttribute('id', 'grade-feedback');
            div.setAttribute('class', 'invalid-feedback');
            div.innerText = gradeErrorMessage;

            document.getElementById('grade').parentElement.appendChild(div);
        }

        return gradeValidationSucceeded;
    };

window.checkCompleted = function checkCompleted() {
        // Initialise the completed error message value
        let completedErrorMessage;

        // Define the completed value
        let completed = document.getElementById('completed').value;

        // Define the validation for checking the completed value
        let completedValidation = '1';
        let completedValidationSucceeded = completed === completedValidation;

        // Define error message on wrong completed
        if (checkLang() === 'nl') {
            completedErrorMessage = 'De waarde van de checkbox moet \'1\' zijn.';
        } else {
            completedErrorMessage = 'The value of the checkbox must be \'1\'.';
        }

        // check if completed feedback already exists and if so to delete it
        let completedFeedback = document.getElementById('completed-feedback');
        if (document.body.contains(completedFeedback)) {
            completedFeedback.parentNode.removeChild(completedFeedback);
        }
        // Check if completed is valid
        if (completedValidationSucceeded) {
            if (document.getElementById('completed').classList.contains('is-invalid')) {
                document.getElementById('completed').classList.remove('is-invalid');
            }
        }
        // Add feedback if completed is not valid
        else if (!completedValidationSucceeded) {
            document.getElementById('completed').classList.add('is-invalid');
            let div = document.createElement('div');
            div.setAttribute('id', 'completed-feedback');
            div.setAttribute('class', 'invalid-feedback');
            div.innerText = completedErrorMessage;

            document.getElementById('completed').parentElement.appendChild(div);
        }

        return completedValidationSucceeded;
    };

window.checkEC = function checkEC() {
        // Initialise the EC error message value
        let ECErrorMessage;

        // Define the EC value
        let EC = document.getElementById('EC').value;

        // Define the regex for checking the EC value
        let ECRegex = /^(0?[1-9][.][0-9]|1[0]|1[0][.][0])$/;
        let ECValidationSucceeded = ECRegex.test(EC);

        // Define error message on wrong EC
        if (checkLang() === 'nl') {
            ECErrorMessage = 'Voer een cijfer van 1 tot 10 in met de vorm van 1.1.';
        } else {
            ECErrorMessage = 'Enter a number from 1 to 10 in the form of 1.1.';
        }

        // check if EC feedback already exists and if so to delete it
        let ECFeedback = document.getElementById('EC-feedback');
        if (document.body.contains(ECFeedback)) {
            ECFeedback.parentNode.removeChild(ECFeedback);
        }
        // Check if EC is valid
        if (ECValidationSucceeded) {
            if (document.getElementById('EC').classList.contains('is-invalid')) {
                document.getElementById('EC').classList.remove('is-invalid');
            }
        }
        // Add feedback if EC is not valid
        else if (!ECValidationSucceeded) {
            document.getElementById('EC').classList.add('is-invalid');
            let div = document.createElement('div');
            div.setAttribute('id', 'EC-feedback');
            div.setAttribute('class', 'invalid-feedback');
            div.innerText = ECErrorMessage;

            document.getElementById('EC').parentElement.appendChild(div);
        }

        return ECValidationSucceeded;
    };

window.checkCourse = function checkCourse() {
        // Initialise the course error message value
        let courseErrorMessage;

        // Define the course_id value
        let course_id = document.getElementById('course_id').value;

        // Define the regex for checking the course_id value
        let courseRegex = /^[0-9]{0,}$/;
        let courseValidationSucceeded = courseRegex.test(course_id);

        // Define error message on wrong course_id
        if (checkLang() === 'nl') {
            courseErrorMessage = 'De waarde van die optie is niet geldig.';
        } else {
            courseErrorMessage = 'The value of that option isn\'t valid.';
        }

        // check if courses feedback already exists and if so to delete it
        let courseFeedback = document.getElementById('courses-feedback');
        if (document.body.contains(courseFeedback)) {
            courseFeedback.parentNode.removeChild(courseFeedback);
        }
        // Check if course_id is valid
        if (courseValidationSucceeded) {
            if (document.getElementById('course_id').classList.contains('is-invalid')) {
                document.getElementById('course_id').classList.remove('is-invalid');
            }
        }
        // Add feedback if course_id is not valid
        else if (!courseValidationSucceeded) {
            document.getElementById('course_id').classList.add('is-invalid');
            let div = document.createElement('div');
            div.setAttribute('id', 'courses-feedback');
            div.setAttribute('class', 'invalid-feedback');
            div.innerText = courseErrorMessage;

            document.getElementById('course_id').parentElement.appendChild(div);
        }

        return courseValidationSucceeded;
    };

window.checkURL = function checkURL () {
    // Initialise the url error message value
    let urlErrorMessage;

    // Define the url value
    let url = document.getElementById('url').value;

    // Define the regex for checking the url value
    let urlRegex = /^[a-zA-Z0-9-_.~!*'();:@&=+$,/?%#]{6,255}$/;
    let urlValidationSucceeded = urlRegex.test(url);

    // Define error message on wrong url
    if (checkLang() === 'nl') {
        urlErrorMessage = 'Voer een url in van minimaal 6 tot 255 karakters.';
    }
    else {
        urlErrorMessage = 'Enter a url with a minimum of 6 to 255 characters.';
    }

    // check if url feedback already exists and if so to delete it
    let urlFeedback = document.getElementById('url-feedback');
    if (document.body.contains(urlFeedback)) {
        urlFeedback.parentNode.removeChild(urlFeedback);
    }
    // Check if url is valid
    if (urlValidationSucceeded) {
        if (document.getElementById('url').classList.contains('is-invalid')) {
            document.getElementById('url').classList.remove('is-invalid');
        }
    }
    // Add feedback if url is not valid
    else if (!urlValidationSucceeded) {
        document.getElementById('url').classList.add('is-invalid');
        let div = document.createElement('div');
        div.setAttribute('id', 'url-feedback');
        div.setAttribute('class', 'invalid-feedback');
        div.innerText = urlErrorMessage;

        document.getElementById('url').parentElement.appendChild(div);
    }

    return urlValidationSucceeded;
};

window.checkDescription = function checkDescription () {
    // Initialise the description error message value
    let descriptionErrorMessage;

    // Define the description value
    let description = document.getElementById('description').value;

    // Define the regex for checking the description value
    let descriptionRegex = /^[a-zA-Z0-9 ]{6,255}$/;
    let descriptionValidationSucceeded = descriptionRegex.test(description);

    // Define error message on wrong description
    if (checkLang() === 'nl') {
        descriptionErrorMessage = 'Voer een beschrijving in van minimaal 6 tot 255 karakters.';
    }
    else {
        descriptionErrorMessage = 'Enter a description with a minimum of 6 to 255 characters.';
    }

    // check if description feedback already exists and if so to delete it
    let descriptionFeedback = document.getElementById('description-feedback');
    if (document.body.contains(descriptionFeedback)) {
        descriptionFeedback.parentNode.removeChild(descriptionFeedback);
    }
    // Check if description is valid
    if (descriptionValidationSucceeded) {
        if (document.getElementById('description').classList.contains('is-invalid')) {
            document.getElementById('description').classList.remove('is-invalid');
        }
    }
    // Add feedback if description is not valid
    else if (!descriptionValidationSucceeded) {
        document.getElementById('description').classList.add('is-invalid');
        let div = document.createElement('div');
        div.setAttribute('id', 'description-feedback');
        div.setAttribute('class', 'invalid-feedback');
        div.innerText = descriptionErrorMessage;

        document.getElementById('description').parentElement.appendChild(div);
    }

    return descriptionValidationSucceeded;
};

window.checkBlok = function checkBlok () {
    // Initialise the blok error message value
    let blokErrorMessage;

    // Define the blok_id value
    let blok_id = document.getElementById('blok_id').value;

    // Define the regex for checking the blok_id value
    let blokRegex = /^[0-9]{0,}$/;
    let blokValidationSucceeded = blokRegex.test(blok_id);

    // Define error message on wrong blok_id
    if (checkLang() === 'nl') {
        blokErrorMessage = 'De waarde van die optie is niet geldig.';
    }
    else {
        blokErrorMessage = 'The value of that option isn\'t valid.';
    }

    // check if bloks feedback already exists and if so to delete it
    let blokFeedback = document.getElementById('bloks-feedback');
    if (document.body.contains(blokFeedback)) {
        blokFeedback.parentNode.removeChild(blokFeedback);
    }
    // Check if blok_id is valid
    if (blokValidationSucceeded) {
        if (document.getElementById('blok_id').classList.contains('is-invalid')) {
            document.getElementById('blok_id').classList.remove('is-invalid');
        }
    }
    // Add feedback if blok_id is not valid
    else if (!blokValidationSucceeded) {
        document.getElementById('blok_id').classList.add('is-invalid');
        let div = document.createElement('div');
        div.setAttribute('id', 'bloks-feedback');
        div.setAttribute('class', 'invalid-feedback');
        div.innerText = blokErrorMessage;

        document.getElementById('blok_id').parentElement.appendChild(div);
    }

    return blokValidationSucceeded;
};

window.checkEmail =  function checkEmail () {
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
};

window.checkPassword = function checkPassword () {
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
};

window.checkConfirmPassword = function checkConfirmPassword () {
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
};

// Function to check if all inputs are valid
let validateForm = function(event) {
    event.preventDefault();

    // Submit the form if the validation is successful
    if ((!document.getElementById('name') || checkName()) &&
        (!document.getElementById('grade') || checkGrade()) &&
        (!document.getElementById('completed') || checkCompleted()) &&
        (!document.getElementById('EC') || checkEC()) &&
        (!document.getElementById('course_id') || checkCourse()) &&
        (!document.getElementById('url') || checkURL()) &&
        (!document.getElementById('description') || checkDescription()) &&
        (!document.getElementById('blok_id') || checkBlok()) &&
        (!document.getElementById('email') || checkEmail()) &&
        (!document.getElementById('password') || checkPassword()) &&
        (!document.getElementById('confirmPassword') || checkConfirmPassword())) {
        document.getElementById('form').submit();
    }
};

// event Listener to initialise the page
window.addEventListener('load', init);
