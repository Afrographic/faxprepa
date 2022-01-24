function addSubjectProxy(addSubjectButton) {
    let fieldOK = true;
    let subjectObj = {};
    subjectObj.file = $('#subjectFile').files[0];
    subjectObj.name = $('#nomMatiere').value;
    subjectObj.annee = $('#anneMatiere').value;
    subjectObj.taille = 0;
    subjectObj.idEcole = parseInt(userData.idSchool);
    subjectObj.idTypeEpreuve = parseInt($('#typeExam').value);
    if (subjectObj.file != null) {
        subjectObj.taille = bytesToSize(subjectObj.file.size);
    }

    let isPDF = subjectObj.file.name.includes("pdf");

    // verification of the fields
    if (subjectObj.name.trim().length == 0) {
        renderError($('#nomMatiere').parentNode, "Veuillez renseigner le nom de la matiere");
        fieldOK = false;
    }
    if (subjectObj.annee.trim().length == 0) {
        renderError($('#anneMatiere').parentNode, "Veuillez renseigner l'anne scolaire de l'epreuve");
        fieldOK = false;
    }

    if (subjectObj.file == null) {
        renderError($('#subjectFile').parentNode, "Veuillez importer le document correspondant a l'epreuve!");
        fieldOK = false;
    }
    if (!isPDF) {
        renderError($('#subjectFile').parentNode, "Veuillez importer un fichier PDF!");
        fieldOK = false;
    }
    if (fieldOK && isPDF) {
        enableButtonLoadingState(addSubjectButton);
        addSubject(subjectObj);
    }
}

function addSubject(subjectObj) {
    console.log("Let's call the server");
    console.log(subjectObj);
    let data = new FormData();
    for (const key in subjectObj) {
        data.append(key, subjectObj[key])
    }
    let req = new XMLHttpRequest();
    req.open("POST", "app/controllers/addSubject.php");
    req.onload = function() {
        setTimeout(function() {
            closeAddSubjectScreen();
            endButtonLoadingState($('#addSubjectButton'), "Ajouter l'epreuve");
        }, 1000);
        setTimeout(function() {
            reload();
        }, 1000);
    }
    req.send(data);
}

function closeAddSubjectScreen() {
    setTimeout(function() {
        closerouterScreen();
        resetAddSubjectField();
    }, 1000);
}

function loadfile() {
    $("#subjectFile").click();
}

$("#subjectFile").addEventListener("change", function() {
    $("#nameFileSubject").innerHTML = $("#subjectFile").files[0].name;
    $("#fileUploadAddSubject").classList.add("loaded");
})
let typeExams;

function getTypeExam() {
    var req = new XMLHttpRequest();
    req.open('GET', 'app/controllers/getTypeMatiere.php');
    req.onload = function() {
        typeExams = JSON.parse(this.responseText);
        renderTypeExams();
    }
    req.send();
}

function renderTypeExams() {
    let htmlTemplate = '';
    let typeTestDowloadScreen = '';
    typeExams.forEach(function(examEl) {
        htmlTemplate += `
          <option value=${examEl.idTypeEpreuve}>${examEl.label}</option>
        `
        typeTestDowloadScreen += `
        <div class="tabItem ${examEl.idTypeEpreuve == 1 ? "tab-active" : ""}" onclick="setActive(this);renderTests(${examEl.idTypeEpreuve})">
        ${examEl.label}
        </div>
        `
    });
    $("#typeExam").innerHTML = htmlTemplate;
    $("#typeTestTabs").innerHTML = typeTestDowloadScreen;
}
getTypeExam();

function resetAddSubjectField() {
    $("#fileUploadAddSubject").classList.remove("loaded");
    $("#nameFileSubject").innerHTML = "Cliquez pour importer le sujet";
    $('#nomMatiere').value = '';
    $('#anneMatiere').value = '';
}