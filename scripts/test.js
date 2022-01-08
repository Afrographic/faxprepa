function loadActiveSchoolHeader(idSchool, logo, name, totalEpreuve) {
    $("#activeSchoolLogo").src = logo;
    $("#activeSchoolName").innerHTML = name;
    $("#activeSchoolNumTest").innerHTML = totalEpreuve + ' epreuve(s)';
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
                        Publier par <br>
                        <span class="dateMetaData">
                            Afrographix
                        </span>
                    </div>
                    <a href="${testItem.path}" onclick="downloadTest(${testItem.idEpreuve})' download="download" target="_blank">
                        <div class="flex1 button CTAButtonSecondary">
                           
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