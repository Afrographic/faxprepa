function loadTestsAPI(idSchoolP) {
    console.log(idSchoolP);
    let idSchool = parseInt(idSchoolP);
    var req = new XMLHttpRequest();
    req.open('GET', 'app/controllers/getTest.php?idSchool=' + idSchool);
    req.onload = function() {
        let tests = JSON.parse(this.responseText);
        console.log(tests);
        renderUserTest(tests);
    }
    req.send();
}

let userDataFILE = localStorage.getItem('schoolData');
userDataFILE = JSON.parse(userDataFILE);
loadTestsAPI(userDataFILE.idSchool);

function renderUserTest(tests) {

    let testItemTemplate = '';
    tests.forEach(function(testItem) {

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
                   
                        <div class="flex1 button CTAButtonSecondary" onclick="deleteTest(this,${testItem.idEpreuve})" >
                          
                            <img src="images/project/delete.png" alt="" />
                            Supprimer
                        </div>
                   
        </div>
`

    });
    if (testItemTemplate.length > 0) {
        $("#gererTestContainerDFFF").innerHTML = testItemTemplate;
    } else {
        console.log("i got nothing!!!");
        $("#gererTestContainerDFFF").innerHTML = `
        <div class="noData">
        <img src="images/project/noData.png" alt="">
    </div>`;
    }
}





function deleteTest(htmlElement, idTest) {
    console.log(htmlElement);
    if (confirm("Voulez vous vraiment supprimer ce test?")) {
        console.log("Will delete this thing!");
        htmlElement.parentNode.parentNode.removeChild(htmlElement.parentNode);
        if (!$("#gererTestContainerDFFF").innerHTML.includes("testItem")) {
            $("#gererTestContainerDFFF").innerHTML = `
            <div class="noData">
            <img src="images/project/noData.png" alt="">
        </div>`;
        }

        dataBaseDeleteTest(parseInt(idTest));
    }
}

function dataBaseDeleteTest(idTest) {
    var req = new XMLHttpRequest();
    req.open('GET', 'app/controllers/deleteTest.php?idTest=' + idTest);
    req.onload = function() {

        var schools = JSON.parse(this.responseText);
        renderSchools(schools, offset);
    }
    req.send();
}