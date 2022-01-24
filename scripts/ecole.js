function loadSchool(offset) {
    var req = new XMLHttpRequest();
    req.open('GET', 'app/controllers/getSchool.php?offset=' + offset);
    req.onload = function() {

        var schools = JSON.parse(this.responseText);
        renderSchools(schools, offset);

        console.log(schools);
    }
    req.send();
}

loadSchool(0);

function renderSchools(schools, offset) {
    let schoolTemplate = '';
    schools.forEach(function(schoolItem) {
        schoolTemplate += `
        <div class="schoolItem" onclick="showrouterScreen('downloader');loadActiveSchoolHeader('${schoolItem.idSchool}','${schoolItem.logo}','${schoolItem.name}','${schoolItem.totalEpreuve}'); loadTests(${schoolItem.idSchool})" id='${schoolItem.idSchool}'>
            <div class="logo">
                <img src="${schoolItem.logo}" alt="" />
            </div>
            <div>
                <div class="nom">${schoolItem.name}</div>
                <div class="numEpreuve">${schoolItem.totalEpreuve}   epreuve(s)</div>
                <div class="manager">Gerer par ${schoolItem.pseudo}  </div>
            </div>
        </div>
        `
    })
    if (offset == 0) {
        $("#schoolContainer").innerHTML = schoolTemplate;
    } else {
        $("#schoolContainer").innerHTML += schoolTemplate;
    }

    if (schools.length == 0) {
        $("#schoolContainer").innerHTML = `
        <div class="noData">
            <img src="images/project/noData.png" alt="">
        </div>`;
    }
}

function search() {

}