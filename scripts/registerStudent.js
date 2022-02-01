function registerStudentProxy(registerButton) {
    resetErrorStudentForm();

    // getting the data
    let fieldOK = true;
    let profile = $('#studentProfile').files[0];
    let pseudo = $('#pseudoRegisterStudent').value;
    let email = $('#emailRegisterStudent').value;
    let mdp = $('#mdpRegisterStudent').value;
    let cmdp = $('#cmdpRegisterStudent').value;


    // verification of the fields
    if (pseudo.trim().length == 0) {
        $("#pseudoRegisterStudent").parentNode.lastElementChild.classList.add("error-active");
        fieldOK = false;
    }
    if (email.trim().length == 0 || !validateEmail(email)) {
        $("#emailRegisterStudent").parentNode.lastElementChild.classList.add("error-active");
        fieldOK = false;
    }
    if (mdp.trim().length == 0) {
        $("#mdpRegisterStudent").parentNode.lastElementChild.classList.add("error-active");
        fieldOK = false;
    }
    if (cmdp.trim().toLowerCase() != mdp.trim().toLowerCase()) {
        $("#cmdpRegisterStudent").parentNode.lastElementChild.classList.add("error-active");
        fieldOK = false;
    }


    if (fieldOK) {
        scrollToBottomOfHtmlElement($('#registerStudentForm'));
        enableButtonLoadingState(registerButton);
        registerStudent(pseudo, mdp, profile, email);
    }
}

function resetErrorStudentForm() {
    console.log($("#pseudoRegisterStudent").parentNode.lastElementChild);
    $("#pseudoRegisterStudent").parentNode.lastElementChild.classList.remove("error-active");
    $("#emailRegisterStudent").parentNode.lastElementChild.classList.remove("error-active");
    $("#mdpRegisterStudent").parentNode.lastElementChild.classList.remove("error-active");
    $("#cmdpRegisterStudent").parentNode.lastElementChild.classList.remove("error-active");
}

function registerStudent(pseudo, mdp, profile, email) {
    let data = new FormData();
    data.append('pseudo', pseudo)
    data.append('mdp', mdp)
    data.append('email', email)
    if (profile != null) {
        data.append('profile', profile);
    }
    let req = new XMLHttpRequest();
    req.open("POST", "app/controllers/studentRoutes.php");
    req.onload = function() {
        let res = JSON.parse(this.responseText);
        setTimeout(function() {
            login(res);
            endButtonLoadingState($('#registerButtonStudent'), "s\'enregistrer");
        }, 1000);
    }
    req.send(data);
}

function loadStudentProfile() {
    $("#studentProfile").click();
}

const validateEmail = (email) => {
    return String(email)
        .toLowerCase()
        .match(
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
};