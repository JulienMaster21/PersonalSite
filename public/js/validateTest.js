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

function checkGrade () {
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
    }
    else {
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
}

function checkCompleted () {
    // Initialise the completed error message value
    let completedErrorMessage;

    // Define the completed value
    let completed = document.getElementById('completed').value;

    // Define the validation for checking the completed value
    let completedValidation = 1;
    let completedValidationSucceeded = completed === completedValidation;

    // Define error message on wrong completed
    if (checkLang() === 'nl') {
        completedErrorMessage = 'De waarde van de checkbox moet \'1\' zijn.';
    }
    else {
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
}

function checkEC () {
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
    }
    else {
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
}

function checkCourse () {
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
    }
    else {
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
}

let validateForm = function(event) {
    event.preventDefault();

    // Submit the form if the validation is succesful
    if (checkName() &&
        checkGrade() &&
        checkCompleted() &&
        checkEC() &&
        checkCourse()) {
        document.getElementById('form').submit();
    }
};

window.addEventListener('load', init);
