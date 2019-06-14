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

function checkURL () {
    // Define the url value
    let url = document.getElementById('url').value;

    // Define the regex for checking the url value
    let urlRegex = /^[a-zA-Z0-9-_.~!*'();:@&=+$,/?%#]{6,255}$/;
    let urlValidationSucceeded = urlRegex.test(url);

    // Define error message on wrong url
    let urlErrorMessage = 'Voer een url in van minimaal 6 tot 255 karakters.';

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
}

function checkDescription () {
    // Define the description value
    let description = document.getElementById('description').value;

    // Define the regex for checking the description value
    let descriptionRegex = /^[a-zA-Z0-9]{6,255}$/;
    let descriptionValidationSucceeded = descriptionRegex.test(description);

    // Define error message on wrong description
    let descriptionErrorMessage = 'Voer een beschrijving in van minimaal 6 tot 255 karakters.';

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
}

let validateForm = function(event) {
    event.preventDefault();

    // Submit the form if the validation is succesful
    if (checkName() &&
        checkURL() &&
        checkDescription()) {
        document.getElementById('form').submit();
    }
};

window.addEventListener('load', init);
