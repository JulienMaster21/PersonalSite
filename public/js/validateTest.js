let init = function() {
    let form = document.getElementById('form');
    form.addEventListener('submit', validateForm);
};

let validateForm = function(event) {
    event.preventDefault();

    // Define the name value
    let name = document.getElementById('name').value;

    // Define the completed value
    let completed = document.getElementById('completed').value;

    // Define the grade value
    let grade = document.getElementById('grade').value;

    // Define the EC value
    let EC = document.getElementById('EC').value;

    // Define the course_id value
    let course_id = document.getElementById('course_id').value;

    // Define the regex for checking the name value
    let nameRegex = /^[a-zA-Z0-9]{6,255}$/;
    let nameValidationSucceeded = nameRegex.test(name);

    // Define the validation for checking the completed value
    let completedValidation = 'completed' || null;
    let completedValidationSucceeded = completed === completedValidation;

    // Define the regex for checking the grade value
    let gradeRegex = /^(0?[1-9]|1[0])$/;
    let gradeValidationSucceeded = gradeRegex.test(grade);

    // Define the regex for checking the EC value
    let ECRegex = /^(0?[1-9]|1[0])$/;
    let ECValidationSucceeded = ECRegex.test(EC);

    // Define the regex for checking the course_id value
    let courseRegex = /^[0-9]{0,}$/;
    let courseValidationSucceeded = courseRegex.test(course_id);

    // Define error message on wrong name
    let nameErrorMessage = 'Voer een naam in van minimaal 6 tot 255 karakters.';

    // Define error message on wrong completed
    let completedErrorMessage = 'De waarde van de checkbox moet \'completed\'';

    // Define error message on wrong grade
    let gradeErrorMessage = 'Voer een cijfer van 1 tot 10 in';

    // Define error message on wrong EC
    let ECErrorMessage = 'Voer een cijfer van 1 tot 10 in';

    // Define error message on wrong course_id
    let courseErrorMessage = 'Kies een van de opties van de dropdown';

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

    // check if course feedback already exists and if so to delete it
    let courseFeedback = document.getElementById('course-feedback');
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
        div.setAttribute('id', 'course-feedback');
        div.setAttribute('class', 'invalid-feedback');
        div.innerText = courseErrorMessage;

        document.getElementById('course_id').parentElement.appendChild(div);
    }

    // Submit the form if the validation is succesful
    if (nameValidationSucceeded &&
        completedValidationSucceeded &&
        gradeValidationSucceeded &&
        ECValidationSucceeded &&
        courseValidationSucceeded) {
        document.getElementById('form').submit();
    }
};


window.addEventListener('load', init);
