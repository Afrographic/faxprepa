let idSchoolStatic = 0;

function loadActiveSchoolHeader(idSchool_arg, logo, name, totalEpreuve, manager) {
    idSchoolStatic = idSchool_arg;
    $("#activeSchoolLogo").src = logo;
    $("#activeSchoolName").innerHTML = name;
    $("#activeSchoolNumTest").innerHTML = totalEpreuve + ' epreuve(s)';
    $("#managerDownloader").innerHTML = `Gerer par ${manager}`;
    loadFiliereForASchools();
}


function loadFiliereForASchools() {
    console.log(`id of the school ${idSchoolStatic}`);
    var req = new XMLHttpRequest();
    req.open('GET', `app/controllers/filiereRoutes.php?idSchool=${idSchoolStatic}`);
    req.onload = function() {
        console.log(this.responseText);
        let filieres = JSON.parse(this.responseText);
        renderSchoolsFiliere_down(filieres);
    }
    req.send();
}



function renderSchoolsFiliere_down(filieres) {
    let filiereTemplate = '';
    filieres.forEach(function(filiereItem) {
        filiereTemplate += `
          <option value=${filiereItem.idFiliere}>${filiereItem.label}</option>
        `
    });
    $("#filter_Filiere").innerHTML = filiereTemplate;
}
let tests = [];

function loadTests(idSchoolP) {
    console.log(idSchoolP);
    let idSchool = parseInt(idSchoolP);
    var req = new XMLHttpRequest();
    req.open('GET', 'app/controllers/getTest.php?idSchool=' + idSchool);
    req.onload = function() {
        tests = JSON.parse(this.responseText);
        renderTests(typeExams[0].idTypeEpreuve);
    }
    req.send();
}

function sortTests() {
    // enableButtonLoadingState(searchButton);
    let idFiliere = $("#filter_Filiere").value;
    let annee = $("#filter_annee").value;
    let niveau = $("#filter_niveau").value;

    // creating the formData
    let data = new FormData();
    data.append("idSchool", idSchoolStatic)
    data.append("idFiliere", idFiliere)
    data.append("annee", annee)
    data.append("niveau", niveau)

    // Make the request
    var req = new XMLHttpRequest();
    req.open('POST', 'app/controllers/getTest.php');
    req.onload = function() {
        setActive($$(".tabItem")[0]);
        tests = JSON.parse(this.responseText);
        renderTests(typeExams[0].idTypeEpreuve);
    }
    req.send(data);

    // check the fields
}


function renderTests(idtypeTest) {
    let testItemTemplate = '';
    tests.forEach(function(testItem) {
        if (testItem.idTypeEpreuve == idtypeTest) {
            testItemTemplate += ` 
            <div class="testItem">
                    <div class="iconFile">
                        <div>
                            <img src="images/project/pdf.png" alt="" />
                        </div>

                        <div class="nameSize">
                            <div class='name'>${testItem.nom}</div>
                            <div class='size'>${testItem.taille}</div>
                        </div>
                    </div>
                   
                    <div class="flex1 datePosted">
                        Annee <br>
                        <span class="dateMetaData">
                            ${testItem.annee}
                        </span>
                    </div>
                    <div class="flex1 datePosted">
                        Niveau <br>
                        <span class="dateMetaData">
                            ${testItem.niveau}
                        </span>
                    </div>
                    <a href="${testItem.path}" onclick="downloadTest(${testItem.idEpreuve})' download="download" target="_blank">
                        <div class="flex1 button CTAButtonSecondary" onclick="countDonwload(${testItem.idEpreuve})">
                           
                            <img src="images/project/download.png" alt="" />
                            Telecharger
                        </div>
                    </a>
        </div>
`
        }
    });

    if (testItemTemplate.length > 0) {
        $("#testContainer").innerHTML = testItemTemplate;
    } else {

        $("#testContainer").innerHTML = `
        <div class="noData">
        <img src="images/project/noData.png" alt="">
    </div>`;
    }
}