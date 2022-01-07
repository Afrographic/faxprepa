function registerProxy(registerButton) {
    let fieldOK = true;
    let name = $('#nameRegister').value;
    let mdp = $('#mdpRegister').value;
    let cmdp = $('#cmdpRegister').value;
    let logo = $('#logoSchool').files[0];

    // verification of the fields
    if (name.trim().length == 0) {
        renderError($('#nameRegister').parentNode, "Veuillez renseigner le nom de l\'ecole");
        fieldOK = false;
    }
    if (mdp.trim().length == 0) {
        renderError($('#mdpRegister').parentNode, "Veuillez renseigner votre mot de passe");
        fieldOK = false;
    }
    if (cmdp.trim().toLowerCase() != mdp.trim().toLowerCase()) {
        renderError($('#cmdpRegister').parentNode, "Les mots de passe ne correspondent pas!");
        fieldOK = false;
    }
    if (logo == null) {
        renderError($('#logoSchool').parentNode, "Veuillez importer le logo de votre ecole!");
        fieldOK = false;
    }

    if (fieldOK) {
        scrollToBottomOfHtmlElement($('#registerForm'));
        enableButtonLoadingState(registerButton);
        register(name, logo, mdp);
    }
}

function enableButtonLoadingState(button) {
    button.innerHTML = '';
    button.classList.add("loading");

}

function scrollToBottomOfHtmlElement(element) {
    element.scrollTop = element.scrollHeight;
}

function endButtonLoadingState(button, initialText) {
    button.innerHTML = initialText;
    button.classList.remove("loading");
}

function renderError(HTMlNode, message) {
    console.log(HTMlNode);
    if (!HTMlNode.innerHTML.includes("error-active")) {
        HTMlNode.innerHTML += `
        <div class="errorField error-active">
            <img src="images/project/warning.png" alt="">
            <span>${message}</span>
        </div>
        `;
    }
}

function register(name, logo, mdp) {
    let data = new FormData();
    data.append('name', name)
    data.append('mdp', mdp)
    data.append('logo', logo)
    let req = new XMLHttpRequest();
    req.open("POST", "app/controllers/register.php");
    req.onload = function() {
        let res = JSON.parse(this.responseText);
        setTimeout(function() {
            login(res);
            endButtonLoadingState($('#registerButton'), "s\'enregistrer");
        }, 1000);
    }
    req.send(data);
}

function login(res) {
    if (res.status == 200) {
        $("#successCreateAccount").classList.add("info-active");
        let schoolData = JSON.stringify(res.schoolData);
        localStorage.setItem('schoolData', schoolData);
        closeRegisterScreen();
    } else {
        $("#errorCreateAccount").classList.add("error-active");
    }
    scrollToBottomOfHtmlElement($('#registerForm'));
}

function closeRegisterScreen() {
    scrollToBottomOfHtmlElement($('#registerForm'));
    setTimeout(function() {
        closerouterScreen();
        updateUiStateOnLogedIn();
    }, 1000);
}


function loadLogo() {
    $("#logoSchool").click();
}
$("#logoSchool").addEventListener("change", function() {
    $("#nameFile").innerHTML = $("#logoSchool").files[0].name;
    $("#fileUploadRegister").classList.add("loaded");
})