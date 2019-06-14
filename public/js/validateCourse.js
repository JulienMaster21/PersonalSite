let init = function() {
    let form = document.getElementById('form');
    form.addEventListener('submit', validateForm);
};

function checkName () {
    // Define the name value
    let name = document.getElementById('name').value;

    // Define the regex for checking the name value
    let nameRegex = /^[a-zA-Z0-9]{6,255}$/;
    let nameValidationSucceeded = nameRegex.test(name);

    // Define error message on wrong name
    let nameErrorMessage = 'Voer een naam in van minimaal 6 tot 255 karakters.';

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

function checkBlok () {
    // Define the blok_id value
    let blok_id = document.getElementById('blok_id').value;

    // Define the regex for checking the blok_id value
    let blokRegex = /^[0-9]{0,}$/;
    let blokValidationSucceeded = blokRegex.test(blok_id);

    // Define error message on wrong blok_id
    let blokErrorMessage = 'De waarde van die optie is niet geldig';

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
}

let validateForm = function(event) {
    event.preventDefault();

    // Submit the form if the validation is succesful
    if (checkName() &&
        checkBlok()) {
        document.getElementById('form').submit();
    }
};

window.addEventListener('load', init);
